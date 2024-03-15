
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<!-- <div class="container mt-5 shadow-lg"> -->
<!-- <div class="container-fluid"> -->
        <!-- <div class="container-fluid"> -->
          <div class="card shadow-lg">
            <div class="card-body">
              <div class="row">
                
                <div class="col-md-6">
                  <h5 class="card-title fw-semibold mb-4">waktu tersisa</h5>
                  <div class="card">
                    <div class="card-body">

                      <table class="table datatable shadow-lg" id="tampil123">

            <thead>
              <tr>
                <th scope="col">Nama</th>
                <th scope="col">Durasi</th>
                <th scope="col">Sampai</th>
              </tr>
            </thead>
           <tbody>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<?php
// Set timezone to Jakarta
date_default_timezone_set('Asia/Jakarta');

foreach ($tiga as $key) {
    // Convert time from database to Jakarta timezone
    $jam = new DateTime($key->jam, new DateTimeZone('Asia/Jakarta'));

    // Calculate duration in seconds
    $durasi_parts = explode(":", $key->durasi);
    $durasi_seconds = ($durasi_parts[0] * 3600) + ($durasi_parts[1] * 60) + $durasi_parts[2];

    // Calculate end time by adding duration to start time
    $akhir = clone $jam;
    $akhir->add(new DateInterval('PT' . $durasi_seconds . 'S'));

    // Format end time as HH:MM:SS
    $sampai = $akhir->format('H:i:s');

    // Calculate remaining time
    $now = new DateTime();
    $selisih = $akhir->getTimestamp() - $now->getTimestamp();

    // Format remaining time as HH:MM:SS
    $jam_selisih = floor($selisih / 3600);
    $menit_selisih = floor(($selisih % 3600) / 60);
    $detik_selisih = $selisih % 60;

    $jam_selisih = sprintf("%02d", $jam_selisih);
    $menit_selisih = sprintf("%02d", $menit_selisih);
    $detik_selisih = sprintf("%02d", $detik_selisih);

    $selisih_waktu = sprintf("%02d:%02d:%02d", $jam_selisih, $menit_selisih, $detik_selisih);
?>
<tr id="row_<?= $key->id_pelanggan ?>">
    <td><?= $key->nama ?></td>
    <td id="countdown_<?= $key->id_pelanggan ?>"><?= $selisih_waktu ?></td>
    <td><?= $sampai ?></td>
</tr>
<script>
    var endTime_<?= $key->id_pelanggan ?> = new Date("<?= $akhir->format('M d, Y H:i:s') ?>").getTime();
    var customerId_<?= $key->id_pelanggan ?> = <?= $key->id_pelanggan ?>;
</script>
<?php } ?>

<script>
    // Array untuk menyimpan interval untuk setiap pelanggan
    var intervals = [];

    // Fungsi untuk memindahkan pelanggan yang waktu habisnya telah tercapai ke tabel pelanggan habis
    function hapusPelanggan(customerId) {
        // Kirim AJAX request untuk menghapus pelanggan dengan customerId
        $.ajax({
            type: "POST",
            url: "<?= base_url('home/hapus_pelang1/') ?>" + '/' + customerId, // Sesuaikan dengan URL Anda
            success: function(response) {
                // Lakukan sesuatu setelah pelanggan dihapus, misalnya refresh halaman
                location.reload(); // Contoh: refresh halaman setelah pelanggan dihapus
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
            }
        });
    }

    // Fungsi untuk meng-update countdown
    function updateCountdown(endTime, elementId, customerId) {
        var now = new Date().getTime();
        var distance = endTime - now;

        if (distance > 0) {
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            document.getElementById(elementId).innerHTML = hours + ":" + minutes + ":" + seconds;
        } else {
            document.getElementById(elementId).innerHTML = "Waktu habis";
            hapusPelanggan(customerId);
            clearInterval(intervals[customerId]); // Hentikan interval yang sesuai dengan pelanggan yang waktu habis
        }
    }

    // $(document).ready(function(){
    //     setInterval(function(){
    //         // Lakukan permintaan AJAX ke server
    //         $.ajax({
    //             type: "GET",
    //             url: "daftar_durasi",
    //             success: function(response) {
    //                 // Perbarui isi tabel dengan data terbaru
    //                 $('#tampil123').html(response);
    //             },
    //             error: function(xhr, status, error) {
    //                 console.error(xhr.responseText);
    //             }
    //         });
    //     }, 1000); // Memuat ulang setiap 3 detik
    // });
    // Lakukan update setiap detik
    <?php foreach ($tiga as $key): ?>
        intervals[<?= $key->id_pelanggan ?>] = setInterval(function() {
            updateCountdown(endTime_<?= $key->id_pelanggan ?>, "countdown_<?= $key->id_pelanggan ?>", customerId_<?= $key->id_pelanggan ?>);
        }, 1000);
    <?php endforeach; ?>
</script>


    


</tbody>
          </table>

                    </div>
                  </div>
                </div>

          <div class="col-md-6">
                  <h5 class="card-title fw-semibold mb-4">Waktu Habis</h5>
                  <div class="card">
                    <div class="card-body">

                         <table class="table datatable shadow-lg">
            <thead>
                <tr>
                <th scope="col">Nama</th>
                <th scope="col">Keluar Jam</th>
                <th scope="col">Aksi</th>
                
              </tr>
                <?php
                foreach ($empat as $key) {
                     $jam = strtotime($key->jam . ' Asia/Jakarta');

    // Convert duration to seconds
    $durasi = strtotime($key->durasi) - strtotime('00:00:00');

    // Add duration to start time
    $akhir = $jam + $durasi;

    // Check if end time is already passed
    if ($akhir < time()) {
        // If end time is already passed, add 1 day
        $akhir += 86400; // 86400 seconds = 1 day
    }

    // Format end time as HH:MM:SS
    $sampai = date('H:i:s', $akhir);

    // Hitung selisih waktu antara $sampai dan waktu sekarang
    $selisih = $akhir - time();

    // Konversi selisih menjadi format HH:MM:SS
    $jam_selisih = floor($selisih / 3600);
    $menit_selisih = floor(($selisih % 3600) / 60);
    $detik_selisih = $selisih % 60;

    $jam_selisih = sprintf("%02d", $jam_selisih);
    $menit_selisih = sprintf("%02d", $menit_selisih);
    $detik_selisih = sprintf("%02d", $detik_selisih);

    $selisih_waktu = sprintf("%02d:%02d:%02d", $jam_selisih, $menit_selisih, $detik_selisih);
                    ?>

              
            </thead>
            <tbody>
            <tr>
            <td><?= $key->nama ?></td>
            <td><?= $key->jam_keluar ?></td>
            <td>
            <a href="<?= base_url('home/hapus_pelang2/'.$key->id_pelangganh) ?>">
            <button  class="btn btn-primary btn-square"><li class="ti ti-trash-x"></button>
            </a>
            </td>
            </tr>  
            
            </tbody>
            <?php } ?>
          </table>

    <!-- Sertakan script.js untuk melakukan pemanggilan AJAX dan memperbarui tabel -->

          <script>
              $(document).ready(function() {
    // Gunakan AJAX untuk mengambil data pelanggan habis secara asinkron
    $.ajax({
        type: "GET",
        url: "<?= base_url('home/getPelangganHabis') ?>",
        success: function(response) {
            // Panggil fungsi untuk memperbarui tabel dengan data yang diterima
            updateTable(response);
        },
        error: function(xhr, status, error) {
            console.error(xhr.responseText);
        }
    });
});

// Fungsi untuk memperbarui tabel dengan data yang diterima
function updateTable(data) {
    // Kosongkan isi tabel
    $('.datatable tbody').empty();

    // Loop melalui data yang diterima dan tambahkan ke dalam tabel
    $.each(data, function(index, item) {
        // Buat baris baru dalam tabel
        var row = $('<tr>').appendTo('.datatable tbody');

        // Tambahkan data ke dalam baris
        $('<td>').text(item.nama).appendTo(row);
        $('<td>').text(item.selesai).appendTo(row); // Sesuaikan dengan nama kolom yang tepat
    });
}


          </script>

                    </div>
                  </div>
                </div>
                <div>
                <a href="<?=base_url('home')?>">  
                <button class="btn btn-primary btn-square">Exit</button>
                </a>  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
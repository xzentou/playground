<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<!-- <div class="container mt-5 shadow-lg"> -->
<!-- <div class="container-fluid"> -->
        <!-- <div class="container-fluid"> -->
          
                    
                      <table class="table datatable shadow-lg" id="tampil123">

            <thead>
              <tr>
                <th scope="col">Nama</th>
                <th scope="col">Durasi</th>
                <th scope="col">Sampai</th>
              </tr>
            </thead>
          <tbody >
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <meta name="csrf-token" content="<?= csrf_hash() ?>">
    <script>
        // Array untuk menyimpan interval untuk setiap pelanggan
        var intervals = [];
    </script>
    <?php foreach ($tiga as $key): ?>
<?php
    // Konversi waktu mulai dari zona waktu server ke zona waktu Asia/Jakarta
    $mulai = new DateTime($key->mulai, new DateTimeZone('Asia/Jakarta'));
    $selesai = new DateTime($key->selesai, new DateTimeZone('Asia/Jakarta'));
?>
<tr id="row_<?= $key->id_pelanggan ?>">
    <td><?= $key->nama_anak ?></td>
    <td id="countdown_<?= $key->id_pelanggan ?>"></td>
    <td><?= $selesai->format('H:i:s') ?></td>
</tr>
<script>
    $(document).ready(function() {
        var startTime_<?= $key->id_pelanggan ?> = new Date("<?= $mulai->format('M d, Y H:i:s') ?>").getTime();
        var endTime_<?= $key->id_pelanggan ?> = new Date("<?= $selesai->format('M d, Y H:i:s') ?>").getTime();
        var interval_<?= $key->id_pelanggan ?> = setInterval(function() {
            var now = new Date().getTime();
            var distance = endTime_<?= $key->id_pelanggan ?> - now;

            if (distance > 0) {
                var hours = String(Math.floor(distance / (1000 * 60 * 60))).padStart(2, '0');
                var minutes = String(Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60))).padStart(2, '0');
                var seconds = String(Math.floor((distance % (1000 * 60)) / 1000)).padStart(2, '0');

                var countdownText = hours + ":" + minutes + ":" + seconds;
                document.getElementById("countdown_<?= $key->id_pelanggan ?>").innerHTML = countdownText;
            } else {
                document.getElementById("countdown_<?= $key->id_pelanggan ?>").innerHTML = "Waktu Habis";
                clearInterval(interval_<?= $key->id_pelanggan ?>);
                // Panggil fungsi untuk mengirim permintaan AJAX
                kirimPermintaanAjax("<?= $key->no_trans ?>", "<?= $key->no_transaksi ?>");
            }
        }, 1000); // Ubah interval menjadi 1000 (1 detik) untuk mengupdate countdown setiap detik
    });



// Fungsi untuk mengirim permintaan AJAX
function kirimPermintaanAjax(noTrans, noTransaksi) {
    // Dapatkan CSRF token
    var csrfToken = $('meta[name="csrf-token"]').attr('content');

    // Kirim permintaan AJAX
    $.ajax({
        type: "POST",
        url: "<?= base_url('Home/daftar_durasi') ?>",
        data: {
            noTrans: noTrans,
            noTransaksi: noTransaksi,
            csrf_test_name: csrfToken // Nama CSRF token diatur ke 'csrf_test_name' di CodeIgniter secara default
        },
        success: function(response) {
            // Tanggapan dari server, jika diperlukan
            console.log(response); // Menampilkan tanggapan server di konsol browser

    // Memuat data baru dari server untuk memperbarui tabel
  

            // Setelah permintaan berhasil, panggil fungsi untuk memperbarui status transaksi
            updateStatusTransaksi(noTrans);
        }
    });
}

// Fungsi untuk memperbarui status transaksi menjadi "habis" di kedua tabel
function updateStatusTransaksi(noTrans) {
    $.ajax({
        type: "POST",
        url: "<?= base_url('Home/ubah_status_transaksi/') ?>" + "/" + noTrans,
        success: function(response) {
            console.log(response); // Contoh: Menampilkan tanggapan server di konsol browser
            location.reload();
        }
    });
}


</script>

<!-- <script>
  function autoRefresh() {
        // Perbarui halaman saat fungsi dipanggil
        location.reload();
    }

    // Panggil fungsi autoRefresh setiap 4 detik (4000 milidetik)
    setInterval(autoRefresh, 5000);
</script> -->
    <?php endforeach; ?>
</tbody>

          </table>
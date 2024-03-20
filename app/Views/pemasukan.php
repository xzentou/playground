<div class="container-fluid">
    <div class="container-fluid">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Forms</h5>
            <div class="card">
                <div class="card-body">
                    <div class="mb-3">
                        <label for="startDate" class="form-label">Pemasukan Tanggal</label>
                        <input type="date" id="mulai" class="form-control">
                        <label for="endDate" class="form-label">Sampai Dengan</label>
                        <input type="date" id="akhir" class="form-control">
                        <button id="generatePdf" class="btn btn-primary">Print PDF</button>
                    </div>
                    <div class="col-md-12">
                        <div class="card shadow mb-4">
                            <table class="table align-items-center table-flush" data-row-style="rowStyle">
                                <thead>
                                    <tr>
                                        <th data-field="no_transaksi" data-visible="false">No Transaksi</th>
                                        <th data-field="nama_anak" class="font-14">Nama</th>
                                        <th data-field="nama_paket" class="font-14">Paket</th>
                                        <th data-field="harga" class="font-14">Total Harga</th>
                                    </tr>
                                </thead>
                                <tbody id="data">
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
   $(document).ready(function() {
    // Fungsi untuk menampilkan data berdasarkan tanggal yang dipilih
    function fetchData() {
        var mulai = $('#mulai').val();
        var akhir = $('#akhir').val();

        // Lakukan AJAX request
        $.ajax({
            url: '<?= base_url('home/getdata') ?>',
            type: 'POST',
            data: { mulai: mulai, akhir: akhir },
            dataType: 'json',
            success: function(response) {
                // Bersihkan tabel sebelum menambahkan data baru
                $('#data').empty();

                // Tambahkan data ke dalam tabel
                $.each(response, function(index, data) {
                    $('#data').append('<tr><td>' + data.no_transaksi + '</td><td>' + data.nama_anak + '</td><td>' + data.nama_Paket + '</td><td>' + data.harga + '</td></tr>');
                });
            }
        });
    }

    // Panggil fungsi fetchData saat tanggal berubah
    $('#mulai, #akhir').change(fetchData);

    // Panggil fungsi fetchData saat halaman dimuat untuk pertama kali
    fetchData();

    // Event listener untuk tombol Generate PDF
    $('#generatePdf').click(function() {
    var mulai = $('#mulai').val();
    var akhir = $('#akhir').val();

    // Redirect ke URL yang akan membuat PDF dengan menambahkan parameter mulai dan akhir
    window.open('<?= base_url('home/printpemasukan/') ?>?mulai=' + mulai + '&akhir=' + akhir, '_blank');
});
});

</script>


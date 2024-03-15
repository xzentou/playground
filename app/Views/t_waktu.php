<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<div class="container-fluid">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Forms</h5>
                <div class="card">
                    <div class="card-body">
                    <form id="myForm" class="row g-3" action="<?= base_url('home/aksi_t_waktu' ) ?>" method="POST" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="no_transaksi" class="form-label">Nomor Transaksi</label>
        <input type="text" class="form-control" name="no_transaksi" id="no_transaksi">
    </div>
    <div class="mb-3">
        <label for="nama" class="form-label">Nama Anak</label>
        <input type="text" class="form-control" name="nama" id="nama" readonly>
    </div>
    <div class="mb-3">
        <label for="selesai" class="form-label">Jam Selesai</label>
        <input type="text" class="form-control" name="selesai" id="selesai">
    </div>
    <div class="mb-3">
        <label for="selesai" class="form-label">Tambah Jam</label>
        <input type="text" class="form-control" name="twaktu">
    </div>
    <div class="container ">
    <button type="submit" class="btn btn-primary">tambah</button>
    </div>
</form>

<script>
    $(document).ready(function() {
        $('#no_transaksi').on('input', function() {
            var no_transaksi = $(this).val(); // Ambil nilai nomor transaksi

            // Kirim permintaan AJAX ke server
            $.ajax({
                type: 'POST',
                url: '<?= base_url('home/get_data_by_no_transaksi') ?>', // Ganti dengan URL yang sesuai
                data: {no_transaksi: no_transaksi},
                success: function(response) {
    // Tanggapan dari server
    console.log("Response dari server:", response);

    // Tanggapan dari server
    var data = response; // Tidak perlu parse karena sudah objek

    // Tampilkan data di dalam form
    $('#nama').val(data.nama_anak);
    $('#selesai').val(data.selesai);
},
                error: function(xhr, status, error) {
                    console.error("Terjadi kesalahan:", xhr.responseText);
                }
            });
        });
    });
</script>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</script>

    


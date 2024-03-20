<div class="container-fluid">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Tambah</h5>
                <div class="card">
                    <div class="card-body">
                    <form id="myForm" class="row g-3" action="<?= base_url('home/aksi_t_paket') ?>" method="POST" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="harga" class="form-label">Nama Paket</label>
        <input type="text" class="form-control" id="harga" name="nama_paket">
    </div>

    <div class="mb-3">
        <label for="harga" class="form-label">Harga</label>
        <input type="text" class="form-control" id="harga" name="harga">
    </div>

    <div class="mb-3">
    <label for="durasi" class="form-label">Durasi (HH:MM:SS)</label>
    <input type="text" class="form-control" id="durasi" name="durasi" pattern="[0-9]{2}:[0-9]{2}:[0-9]{2}">
    <small>Format: HH:MM:SS (contoh: 12:34:56)</small>
</div>
<div>
    <button type="submit" class="btn btn-primary">Tambah</button>
    </div>
</form>



                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</script>

    


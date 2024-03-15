<div class="container-fluid">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Tambah</h5>
                <div class="card">
                    <div class="card-body">
                    <form id="myForm" class="row g-3" action="<?= base_url('home/aksi_t_anak') ?>" method="POST" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="harga" class="form-label">Nama Anak</label>
        <input type="text" class="form-control" id="harga" name="nama_anak">
    </div>

    <div class="mb-3">
        <label for="harga" class="form-label">Orang Tua</label>
        <input type="text" class="form-control" id="harga" name="orangtua">
    </div>

    <div class="mb-3">
    <label for="durasi" class="form-label">Umur</label>
    <input type="text" class="form-control" id="durasi" name="umur">
</div>

    
    <button type="submit" class="btn btn-primary">Tambah</button>
</form>



                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</script>

    


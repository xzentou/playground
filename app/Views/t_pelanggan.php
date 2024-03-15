<!-- <div class="container-fluid">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Forms</h5>
                <div class="card">
                    <div class="card-body"> -->
                    <form id="myForm" class="row g-3" action="<?= base_url('home/aksi_t_pelanggan') ?>" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Nama Anak</label>
        <select class="form-control" name="anak" id="anak" onchange="showPrice()">
            <option>-pilih-</option>
            <?php foreach ($empat as $key => $value) { ?>
                <option value="<?= $value->id_anak . '|' . $value->nama_anak . '|' . $value->orang_tua . '|' . $value->umur ?>"><?= $value->nama_anak ?></option>
            <?php } ?>
        </select>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Pilih Paket</label>
        <select class="form-control" name="paket" id="paket" onchange="showPrice()">
            <option>-pilih-</option>
            <?php foreach ($dua as $key => $value) { ?>
                <option value="<?= $value->id_paket . '|' . $value->durasi . '|' . $value->harga . '|' . $value->nama_Paket ?>"><?= $value->nama_Paket ?></option>
            <?php } ?>
        </select>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Metode Pembayaran</label>
        <select class="form-control" name="metode">
            <option>Cash</option>
            <option>E-cash</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="harga" class="form-label">Harga</label>
        <input type="number" class="form-control" id="harga" name="Harga" readonly required>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Nominal</label>
        <input type="number" class="form-control" id="nominal" name="nominal" oninput="calculateChange()" required>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Kembalian</label>
        <input type="number" class="form-control" id="kembalian" name="Kembalian" readonly required>
    </div>
    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <input type="hidden" name="id" value="<?= $tiga->username?>">
    
    <button type="submit" class="btn btn-primary">Tambah</button>
    
    <button type="submit" class="btn btn-primary" id="printPDF">Tambah & Print</button>
</form>

<script>
    function showPrice() {
        var selectedOption = document.getElementById("paket").value.split('|');
        var harga = selectedOption[2];
        document.getElementById("harga").value = harga;
    }

    function calculateChange() {
        var harga = document.getElementById("harga").value;
        var nominal = document.getElementById("nominal").value;
        var kembalian = parseInt(nominal) - parseInt(harga);
        if (kembalian < 0) {
            kembalian = 0; // Jika kembalian negatif, atur menjadi 0
        }
        document.getElementById("kembalian").value = kembalian;
    }
</script>

                    <!-- </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<script src="<?=base_url('libs/jquery/dist/jquery.min.js')?>"></script>
<script src="<?=base_url('libs/bootstrap/dist/js/bootstrap.bundle.min.js')?>"></script>
<script src="<?=base_url('js/sidebarmenu.js')?>"></script>
<script src="<?=base_url('js/app.min.js')?>"></script>
<script src="<?=base_url('libs/simplebar/dist/simplebar.js')?>"></script>
<script>
    $(document).ready(function() {
        // Handler for button click event
        $('#printPDF').click(function() {
            // Get form data
            const formData = new FormData(document.getElementById('myForm'));
            const params = new URLSearchParams(formData).toString();
            // Construct redirect URL with form data as query parameters
            const redirectUrl = '<?= base_url('home/printpdf/') ?>' + '?' + params;
            // Open the URL in a new tab
            window.open(redirectUrl, '_blank');
        });
         });
</script>

    <!-- // $('#myForm').submit(function(event) {
    //         // event.preventDefault(); // Menghentikan submit form

    //         // Ambil data form
    //         var formData = new FormData(this);

    //         // Kirim AJAX request
    //         $.ajax({
    //             type: "POST",
    //             url: "<?= base_url('home/aksi_t_pelanggan') ?>",
    //             data: formData,
    //             processData: false,
    //             contentType: false,
    //             success: function(response) {
    //                 // Perbarui tabel dengan data pelanggan yang diperbarui (ini seharusnya di daftar_durasi)
    //             },
    //             error: function(xhr, status, error) {
    //                 console.error(xhr.responseText);
    //             }
    //         });
    //     });
    // }); -->


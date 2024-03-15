
                    <form id="myForm" class="row g-3" action="<?= base_url('home/aksi_t_pelangganl') ?>" method="POST" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="harga" class="form-label">Nama Anak</label>
        <input type="text" class="form-control" name="nama">
    </div>

    <div class="mb-3">
        <label for="harga" class="form-label">Orang Tua</label>
        <input type="text" class="form-control"name="orangtua">
    </div>

    <div class="mb-3">
    <label for="durasi" class="form-label">Umur</label>
    <input type="text" class="form-control" name="umur">
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


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</script>

    


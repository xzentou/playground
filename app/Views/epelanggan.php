<div class="container-fluid">
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title fw-semibold mb-4">Edit</h5>
              <div class="card">
                <div class="card-body">
                  <form class="row g-3" action="<?= base_url('home/aksi_e_pelanggan') ?>" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Nama Anak</label>
                      <input type="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $tiga->nama_anak?>" name="nama">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Umur</label>
                      <input type="number" class="form-control" id="exampleInputPassword1" value="<?= $tiga->umur?>" name="umur">
                    </div>

                    
                   <?php
// Misalkan Anda telah mengambil nilai acak dari database dan menyimpannya dalam variabel $selected_package_id
$selected_package_id = $tiga->id_paket;
$status_transaksi = $tiga->status_transaksi;

// Kemudian Anda bisa menggunakan variabel tersebut dalam loop untuk menandai opsi yang dipilih
?>

<div class="col-md-12">
    <label for="validationDefault01" class="form-label">Pilih Paket</label>
    <div class="col-md-12 mb-1">
        <select class="form-control" name="paket" id="judulSurat">
            <option value="-pilih-">- Pilih -</option>
            <?php foreach ($empat as $value) {?>
                <option value="<?= $value->id_paket . '|' . $value->durasi ?>" <?php if ($value->id_paket == $selected_package_id) echo 'selected' ?>><?= $value->nama_Paket ?> - <?= $value->harga ?></option>
            <?php }?>
        </select>
    </div>
</div>

<div class="col-md-12">
    <label for="validationDefault01" class="form-label">Status</label>
    <div class="col-md-12 mb-1">
        <select class="form-control" name="status" id="judulSurat">
            <option value="-pilih-">- Pilih -</option>
            <option value="belum" <?php echo ($status_transaksi == 'belum') ? 'selected' : ''; ?>>Belum</option>
            <option value="udah" <?php echo ($status_transaksi == 'udah') ? 'selected' : ''; ?>>Sudah</option>
        </select>
    </div>
</div>

                    
                    <div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <input type="hidden" name="id" value="<?= $tiga->id_pelanggan?>">
                    <input type="hidden" name="idt" value="<?= $tiga->id_transaksi?>">
                  </div>
                  </form>
                </div>
              </div>
             
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
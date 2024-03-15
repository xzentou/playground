<main id="main" class="main"></main>

<div class="pagetitle">
<h1>wasda</h1>

  <nav>
    <ol class="breadcrumb">
     
    </ol>
  </nav>
</div><!-- End Page Title -->
<section class="section">
  <div class="row">
    <div class="col-lg-12">
    <h3 style="color:grey;">Paket</h3>
    <a href="<?= base_url('home/t_Paket/') ?>" >
    <button class="btn btn-primary btn-square" id="animated-button"><i class="ri-add-circle-fill "> </i>Tambah</button>
    </a>
      <!-- <div class="card"> -->
        <!-- <div class="card-body"> -->
        
        
          
        
        
          <table class="table datatable shadow-lg">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Sampai</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
           <tbody>
<?php 
foreach ($dua as $key) {
?>
    <tr>
        <td><?= $key->nama_Paket ?></td>
        <td><?= $key->durasi ?></td>
        <td><?= $key->harga ?></td>

        <td class="jarak-button">
            <a href="<?= base_url('home/epaket/'.$key->id_paket) ?>">
            <button id="showPopupButton" class="btn btn-primary btn-square"><i class="ti ti-file-pencil"></i></button>
            </a>

            <a href="<?= base_url('home/softdeletepaket/'.$key->id_paket) ?>" onclick="return confirmDelete()">
            <button id="showPopupButton" class="btn btn-primary btn-square"><i class="ti ti-trash"></i></button>
            </a>

      </td>
    </tr>

<script>
function confirmDelete() {
// Tampilkan konfirmasi
var result = confirm("Apakah kamu yakin mau menghapus data pelanggan?");

// Jika pengguna menekan OK, return true (lanjutkan penghapusan)
// Jika pengguna menekan Batal, return false (batalkan penghapusan)
return result;
}
</script>




        </td>
    </tr>
<?php } ?>
</tbody>
          </table>
        </div>
      </div>

    </div>
  </div>
</section>
<main id="main" class="main">

<div class="pagetitle">
  <h1>Surat Masuk</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index">Home</a></li>
      <li class="breadcrumb-item"><a href="brg_msk">Surat Keluar</a></li>
      <li class="breadcrumb-item active"><a href="brg_kel">Surat Masuk</a></li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
        
        
          <a href="<?= base_url('home/t_user/') ?>" >
    <button class="btn btn-primary btn-square" id="animated-button"><i class="ri-add-circle-fill "> </i>Tambah</button>
    </a>
        
        
          <table class="table datatable shadow-lg">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">Foto</th>
                <th scope="col">Aksi</th>       
              </tr>
            </thead>
           <tbody>
<?php 
$no = 1;
foreach ($dua as $key) {
?>
    <tr>
        <td><?= $no++ ?></td>
        <td><?= $key->username ?></td>
        <td><?= $key->email ?></td>
        <td><img class="rounded-circle" style="width: 45px; height: 45px;" src="<?=base_url('img/'.$key->foto)?>"></td>

        <td class="jarak-button">
            <a href="<?= base_url('home/karyawanprofile/'.$key->id_user) ?>">
            <button class="btn btn-primary btn-square">Detail</button>
            </a>
            
            <a href="<?= base_url('home/restorekaryawan/'.$key->id_user) ?>" onclick="return confirmDelete()">
            <button id="showPopupButton" class="btn btn-primary btn-square"><i class="ti ti-trash"></i></button>
            </a>

      </td>
    </tr>

<script>
function confirmDelete() {
// Tampilkan konfirmasi
var result = confirm("Apakah kamu yakin mau restore data Karyawan?");

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
          <!-- End Table with stripped rows -->

        </div>
      </div>

    </div>
  </div>
</section>

</main><!-- End #main -->

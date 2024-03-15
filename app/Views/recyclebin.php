<main id="main" class="main">

<div class="pagetitle">
  <h1>Surat Masuk</h1>
  <nav>
    <ol class="breadcrumb">
     
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
        <h3 style="color:grey;">Recycle Bin</h3>
                
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
$no = 1;
foreach ($tiga as $key) {
?>
    <tr>
        <td><?= $no++ ?></td>
        <td><?= $key->nama_anak ?></td>
        <td><?= $key->selesai ?></td>

        <td class="jarak-button">
            <a href="<?= base_url('home/dpelanggan/'.$key->id_pelanggan) ?>">
            <button class="btn btn-primary btn-square">Detail</button>
            </a>
            
            <a href="<?= base_url('home/restoredata/'.$key->no_trans) ?>">
            <button id="showPopupButton" class="btn btn-primary btn-square"><i class="ti ti-history"></i></button>
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
          <!-- End Table with stripped rows --></section>

</main><!-- End #main -->
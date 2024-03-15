<main id="main" class="main">

<div class="pagetitle">
  <h1>Dashboard</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item active">Dashboard</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section dashboard">
  <div class="row">

    <!-- Left side columns -->
    <div class="col-lg-9">
      <div class="row">

        <!-- Sales Card -->
        <div class="col-xxl-4 col-md-12">
          <div class="card info-card sales-card">

            

            <div class="card-body">
              <?php
              date_default_timezone_set('Asia/Jakarta');
              ?>

              <h5 class="card-title"><?=session()->get('nama')?><span>| <?= date('d-m-Y') ?></span></h5>
     
              <!-- <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <img class="card-icon rounded-circle d-flex align-items-center justify-content-center"src="<?= base_url('img/'.$satu->foto)?>">
                </div> 
              </div> -->
              <div class="container">
                <strong>Selamat datang <?=session()->get('nama')?> semoga hari anda 
                menyenangkan selamat bekerja!</strong>
              </div>
            </div>

            
          </div>
        </div><!-- End Sales Card -->

        <!-- Revenue Card -->
        

  </div>
</section>

</main><!-- End #main -->
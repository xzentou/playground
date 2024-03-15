<main id="main" class="main">

    <div class="pagetitle">
      <h1>Profile</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Users</li>
          <li class="breadcrumb-item active">Profile</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
      

        <div class="col-xl-8">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  <h5 class="card-title">Informasi Pelanggan</h5>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label mt-3">No Transaksi</div>
                    <div class="col-lg-9 col-md-8 mt-3"><?= $dua->no_trans ?></div>
                  </div>
                  
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label mt-3">Orang Tua</div>
                    <div class="col-lg-9 col-md-8 mt-3"><?= $dua->orang_tua ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label mt-3">Nama Anak</div>
                    <div class="col-lg-9 col-md-8 mt-3"><?= $dua->nama_anak ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label mt-3">Umur</div>
                    <div class="col-lg-9 col-md-8 mt-3"><?= $dua->umur ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label mt-3">Durasi</div>
                    <div class="col-lg-9 col-md-8 mt-3"><?= $dua->durasi ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label mt-3">Tanggal & Jam</div>
                    <div class="col-lg-9 col-md-8 mt-3"><?= $dua->mulai ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label mt-3">Selesai</div>
                    <div class="col-lg-9 col-md-8 mt-3"><?= $dua->selesai ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label mt-3">Harga</div>
                    <div class="col-lg-9 col-md-8 mt-3"><?= $dua->harga ?></div>
                  </div>
                </div>

                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                  <!-- Profile Edit Form -->
                 
              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

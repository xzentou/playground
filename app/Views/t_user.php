   <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <div
      class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body">
                <a href="./index.html" class="text-nowrap logo-img text-center d-block py-3 w-100">
                <img src="<?=base_url('img/logosvg.svg')?>" width="180" alt="" /> 
                </a>
                <!-- <img src="<?=base_url('images/logos/dark-logo.svg')?>" width="180" alt=""> -->
                <form action="<?= base_url('home/aksi_tuser') ?>" method="POST" enctype="multipart/form-data">
                  <div class="mb-3">
                    <label for="exampleInputtext1" class="form-label">Name</label>
                    <input type="text" class="form-control" id="nama" placeholder="Enter nama" name="nama">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email Address</label>
                    <input type="text" class="form-control" id="penerbit" placeholder="Email" name="email">
                  <div class="mb-4">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="text" class="form-control" id="penerbit" placeholder="password" name="password">
                  </div>
                  <input type="hidden" name="foto" value="user-1.jpg">
                  <button type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Sign Up</button>
                  
                  <div class="d-flex align-items-center justify-content-center">
                    <a href="<?=base_url('home/')?>">
                    <p class="fs-4 mb-0 fw-bold">Already have an Account?</p>
                    </a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
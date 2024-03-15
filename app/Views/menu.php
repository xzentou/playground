 <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="./index.html" class="text-nowrap logo-img">
            <img src="<?=base_url('img/logosvg.svg')?>" width="180" alt="" />
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar">
          <ul id="">
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Home</span>
            </li>
           <li class="sidebar-item">
    <a class="sidebar-link" href="<?= base_url('home/') ?>" aria-expanded="false">
        <span>
            <i class="ti ti-home"></i>
        </span>
        <span class="hide-menu">Dashboard</span>
    </a>
    <a class="sidebar-link" href="<?= base_url('home/pelanggan') ?>" aria-expanded="false">
        <span>
            <i class="ti ti-man"></i>
        </span>
        <span class="hide-menu">Pelanggan</span>
    </a>
    <a class="sidebar-link" href="<?= base_url('home/tambahwaktu') ?>" aria-expanded="false">
        <span>
            <i class="ti ti-clock-edit"></i>
        </span>
        <span class="hide-menu">Tambah Waktu</span>
    </a>
    <a class="sidebar-link" href="<?= base_url('home/daftar_durasi') ?>" aria-expanded="false">
        <span>
            <i class="ti ti-clock-hour-3"></i>
        </span>
        <span class="hide-menu">Daftar Durasi</span>
    </a>

    <a class="sidebar-link" data-bs-target="#forms-na" data-bs-toggle="collapse" href="#">
          <i class="ti ti-report"></i><span>Laporan</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-na" class="nav-content collapse " data-bs-parent="#sidebar-nav">
       
            <a class="sidebar-link" href="<?=base_url('home/pemasukan/')?>">
            <span>
            <i class="ti ti-report-analytics"></i>
            </span>
              <span style="color:black;">pemasukan</span>
            </a>

          </li>
        </ul>

    <a class="sidebar-link" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="ti ti-folder"></i><span>Table</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
       
            <a class="sidebar-link" href="<?=base_url('home/paket/')?>">
            <span>
            <i class="ti ti-album"></i>
            </span>
              <span style="color:black;">Paket</span>
            </a>

            <a class="sidebar-link" href="<?= base_url('home/karyawan') ?>" aria-expanded="false">
            <span>
            <i class="ti ti-user-circle"></i>
            </span>
              <span class="hide-menu">Karyawan</span>
            </a>

            <a class="sidebar-link" href="<?=base_url('home/anak/')?>">
            <span>
            <i class="ti ti-mood-boy"></i>
            </span>
              <span style="color:black;">Anak</span>
            </a>
          </li>
        </ul>
    
        <a class="sidebar-link" data-bs-target="#forms-navv" data-bs-toggle="collapse" href="#">
          <i class="ti ti-trash-x"></i><span>Recycle bin</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-navv" class="nav-content collapse " data-bs-parent="#sidebar-nav">
       
            <a class="sidebar-link" href="<?= base_url('home/recyclebin') ?>">
            <span>
            <i class="ti ti-album"></i>
            </span>
              <span style="color:black;">Daftar Pelanggan Habis</span>
            </a>

            <a class="sidebar-link" href="<?= base_url('home/rpaket') ?>">
            <span>
            <i class="ti ti-mood-boy"></i>
            </span>
              <span style="color:black;">Paket</span>

              <a class="sidebar-link" href="<?= base_url('home/rkaryawan') ?>">
            <span>
            <i class="ti ti-mood-boy"></i>
            </span>
              <span style="color:black;">Karyawan</span>

            <a class="sidebar-link" href="<?= base_url('home/ranak') ?>">
            <span>
            <i class="ti ti-mood-boy"></i>
            </span>
              <span style="color:black;">Anak</span>
            </a>

            
          </li>
        </ul>
      </li><!-- End Forms Nav -->
            <!-- <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">UI COMPONENTS</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./ui-buttons.html" aria-expanded="false">
                <span>
                  <i class="ti ti-article"></i>
                </span>
                <span class="hide-menu">Buttons</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./ui-alerts.html" aria-expanded="false">
                <span>
                  <i class="ti ti-alert-circle"></i>
                </span>
                <span class="hide-menu">Alerts</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./ui-card.html" aria-expanded="false">
                <span>
                  <i class="ti ti-cards"></i>
                </span>
                <span class="hide-menu">Card</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./ui-forms.html" aria-expanded="false">
                <span>
                  <i class="ti ti-file-description"></i>
                </span>
                <span class="hide-menu">Forms</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./ui-typography.html" aria-expanded="false">
                <span>
                  <i class="ti ti-typography"></i>
                </span>
                <span class="hide-menu">Typography</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">AUTH</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./authentication-login.html" aria-expanded="false">
                <span>
                  <i class="ti ti-login"></i>
                </span>
                <span class="hide-menu">Login</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./authentication-register.html" aria-expanded="false">
                <span>
                  <i class="ti ti-user-plus"></i>
                </span>
                <span class="hide-menu">Register</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">EXTRA</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./icon-tabler.html" aria-expanded="false">
                <span>
                  <i class="ti ti-mood-happy"></i>
                </span>
                <span class="hide-menu">Icons</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./sample-page.html" aria-expanded="false">
                <span>
                  <i class="ti ti-aperture"></i>
                </span>
                <span class="hide-menu">Sample Page</span>
              </a>
            </li> -->
          </ul>
          
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
              <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-icon-hover" href="javascript:void(0)">
                <i class="ti ti-bell-ringing"></i>
                <div class="notification bg-primary rounded-circle"></div>
              </a>
            </li>
          </ul>
          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
              <li class="nav-item dropdown">
                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <img src="<?=base_url('img/'.$satu->foto)?>" alt="" width="35" height="35" class="rounded-circle">
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                  <div class="message-body">
                    <a href="<?=base_url('home/profile/'. $satu->id_user)?>" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-user fs-6"></i>
                      <p class="mb-0 fs-3">My Profile</p>
                    </a>
                    <a href="<?=BASE_URL('home/account'. $satu->id_user)?>" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-mail fs-6"></i>
                      <p class="mb-0 fs-3">My Account</p>
                    </a>
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-list-check fs-6"></i>
                      <p class="mb-0 fs-3">My Task</p>
                    </a>
                    <a href="<?=base_url('home/logout')?>" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href="index.html"><H3>SIAKAD</H3></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="ti-view-list"></span>
        </button>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <?php echo $sess[0]['nama_guru'] ?>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
                <i class="ti-settings text-primary"></i>
                Settings
              </a>
              <a href="<?php echo base_url('GuruController/logout') ?>" class="dropdown-item">
                <i class="ti-power-off text-primary"></i>
                Logout
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="ti-view-list"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('GuruController/index') ?>">
              <i class="ti-shield menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('GuruController/nilai') ?>">
              <i class="ti-pie-chart menu-icon"></i>
              <span class="menu-title">Input Nilai</span>
            </a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('') ?>">
              <i class="ti-pie-chart menu-icon"></i>
              <span class="menu-title">Data Nilai</span>
            </a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="pages/charts/chartjs.html">
              <i class="ti-pie-chart menu-icon"></i>
              <span class="menu-title">Materi</span>
            </a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="pages/charts/chartjs.html">
              <i class="ti-pie-chart menu-icon"></i>
              <span class="menu-title">Pengumuman</span>
            </a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="pages/charts/chartjs.html">
              <i class="ti-pie-chart menu-icon"></i>
              <span class="menu-title">Setting</span>
            </a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="pages/charts/chartjs.html">
              <i class="ti-pie-chart menu-icon"></i>
              <span class="menu-title">Keluar</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="container">
         
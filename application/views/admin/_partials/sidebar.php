<!-- Sidebar -->
<ul class="sidebar navbar-nav">
  <li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active' : '' ?>">
    <a class="nav-link" href="<?php echo site_url('admin') ?>">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span>
    </a>
  </li>
  <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'products' ? 'active' : '' ?> ">
    <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <i class="far fa-id-card"></i>
      <span>Customer</span>
    </a>
    <div class="dropdown-menu" aria-labelledby="pagesDropdown">
      <h6 class="dropdown-header">Daftar Customer:</h6>
      <a class="dropdown-item" href="<?php echo site_url('admin/products/add') ?>">
        <i class="fas fa-user-shield	"></i>
        <span>Supervisor</span>
      </a>
      <a class="dropdown-item" href="register.html">
        <i class="fas fa-street-view"></i>
        <span>Manager Area</span>
      </a>
      <a class="dropdown-item" href="forgot-password.html">
        <i class="far fa-smile"></i>
        <span>Client</span>
      </a>
      <div class="dropdown-divider"></div>
      <h6 class="dropdown-header">Absensi Harian:</h6>
      <a class="dropdown-item" href="404.html">
        <i class="far fa-copy	"></i>
        <span>Supervisor</span>
      </a>
    </div>
  </li>
  <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'products' ? 'active' : '' ?> ">
    <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <i class="far fa-id-card"></i>
      <span>Daily Progress</span>
    </a>
    <div class="dropdown-menu" aria-labelledby="pagesDropdown">
      <h6 class="dropdown-header">Daily Activity:</h6>
      <a class="dropdown-item" href="<?php echo site_url('admin/products/add') ?>">
        <i class="far fa-edit"></i>
        <span>Daily Report</span>
      </a>
      <a class="dropdown-item" href="register.html">
        <i class="fas fa-search"></i>
        <span>Controlling</span>
      </a>
      <a class="dropdown-item" href="forgot-password.html">
        <i class="fas fa-exclamation-triangle"></i>
        <span>Complaint</span>
      </a>
    </div>
  </li>
  <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'products' ? 'active' : '' ?> ">
    <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <i class="fas fa-database"></i>
      <span>Master Pekerjaan</span>
    </a>
    <div class="dropdown-menu" aria-labelledby="pagesDropdown">
      <h6 class="dropdown-header">Daftar Tabel:</h6>
      <a class="dropdown-item" href="<?php echo site_url('admin/TipePekerjaan/') ?>">
        <i class="fas fa-briefcase"></i>
        <span>Tipe Pekerjaan</span>
      </a>
      <a class="dropdown-item" href="<?php echo site_url('admin/JenisPekerjaan/') ?>">
        <i class="fas fa-tags"></i>
        <span>Jenis Pekerjaan</span>
      </a>
      <a class="dropdown-item" href="404.html">
        <i class="far fa-building"></i>
        <span>Lokasi Area Kerja</span>
      </a>
    </div>
  </li>
  <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'products' ? 'active' : '' ?> ">
    <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <i class="fas fa-map-marker-alt"></i>
      <span>Area Operasional</span>
    </a>
    <div class="dropdown-menu" aria-labelledby="pagesDropdown">
      <h6 class="dropdown-header">Daily Activity:</h6>
      <a class="dropdown-item" href="<?php echo site_url('admin/products/add') ?>">
        <i class="far fa-edit"></i>
        <span>Area Operasional</span>
      </a>
      <a class="dropdown-item" href="register.html">
        <i class="fas fa-search"></i>
        <span>Master Wilayah</span>
      </a>
    </div>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="charts.html">
      <i class="fas fa-fw fa-chart-area"></i>
      <span>Reporting</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="tables.html">
      <i class="fas fa-user-cog"></i>
      <span>Administrator</span></a>
  </li>
</ul>
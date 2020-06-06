<!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-code"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Admin</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        MENU
      </div>
	  
	  <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('user'); ?>">
          <i class="fas fa-fw fa-user"></i>
          <span>My Profile</span></a>
      </li>
	  
	  <li class="nav-item">
        <a class="nav-link" href="<?= base_url('transaksi'); ?>">
          <i class="fas fa-fw fa-money-bill-wave"></i>
          <span>Transaksi</span></a>
      </li>
	  
	  <li class="nav-item">
        <a class="nav-link" href="<?= base_url('detail'); ?>">
          <i class="fas fa-fw fa-money-check-alt"></i>
          <span>Detail Transaksi</span></a>
      </li>
	  
	  <li class="nav-item">
        <a class="nav-link" href="<?= base_url(''); ?>">
          <i class="fas fa-fw fa-utensils"></i>
          <span>Daftar Menu</span></a>
      </li>
	  
	  <li class="nav-item">
        <a class="nav-link" href="<?= base_url('menu'); ?>">
          <i class="fas fa-fw fa-pizza-slice"></i>
          <span>Jenis Menu</span></a>
      </li>
	  
	  <li class="nav-item">
        <a class="nav-link" href="<?= base_url('user/petugas'); ?>">
          <i class="fas fa-fw fa-id-card-alt"></i>
          <span>Daftar Petugas</span></a>
      </li>
	  
	  <li class="nav-item">
        <a class="nav-link" href="<?= base_url(''); ?>">
          <i class="fas fa-fw fa-users"></i>
          <span>Daftar Pelanggan</span></a>
      </li>

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin'); ?>">
          <i class="fas fa-fw fa-users"></i>
          <span>Daftar Admin</span></a>
      </li>

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->
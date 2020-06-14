<?php
$getUser = $this->session->userdata('session_user');
//$getGrup = $this->session->userdata('session_grup');
?>    
    

<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard.php">
    <div class="sidebar-brand-text mx-3">Admin</div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item active">
    <a class="nav-link" href="<?php echo base_url('Mahasiswa')?>">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>

  <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Nav Item - MASTER DATA -->
      <li class="nav-item active">
        <a class="nav-link collapsed" href="<?php echo base_url('Mahasiswa/grup')?>">
          <i class="fas fa-fw fa-table"></i>
          <span>Data Proyek</span></a>
      </li>

      <!-- Nav Item - Rincian Anggaran Biaya -->
      <li class="nav-item active">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-table"></i>
          <span>Rincian Anggaran Biaya</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?php echo base_url('Mahasiswa/jumlahbiaya')?>">Jumlah Biaya Pekerja</a>
            <a class="collapse-item" href="<?php echo base_url('Mahasiswa/bahan')?>">Transaksi Bahan Bangunan</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - STATUS PENGERJAAN -->
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('Mahasiswa/user')?>">
          <i class="fas fa-fw fa-cog"></i>
          <span>Status Pengerjaan</span></a>
      </li>

  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>
<!-- End of Sidebar -->



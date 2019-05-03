<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        
        <div>
          <h3 style="color: #ffffff;"> <?php echo $this->session->userdata('nama');?> </h3>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">DATA PERPUSTAKAAN</li>
        <li class="">
          <a href="<?php echo base_url('/dashboard'); ?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="">
          <a href="<?php echo base_url('/petugas'); ?>">
            <i class="fa fa-child"></i> <span>Petugas</span>
          </a>
        </li>
        <li class="">
          <a href="<?php echo site_url('/anggota'); ?>">
            <i class="fa fa-group"></i> <span>Anggota</span>
          </a>
        </li>
        <li class="">
          <a href="<?php echo site_url('/buku'); ?>">
            <i class="fa fa-book"></i> <span>Buku</span>
          </a>
        </li>
        <li class="">
          <a href="#">
            <i class="fa fa-pencil-square-o"></i> <span>Peminjaman</span>
          </a>
        </li>

        <li class="">
          <a href="<?php echo base_url('Login/logout'); ?>">
            <i class="fa fa-sign-out"></i> <span>Logout</span>
          </a>
        </li>
  </aside>
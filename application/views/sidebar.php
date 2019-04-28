<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url(); ?>assets/AdminLTE/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Devin Reness Noak</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
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
  </aside>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <header class="main-header">

      <!-- Logo -->
      <a href="<?= base_url('Admin') ?>" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>LclPrd</b></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>LocalPride</b></span>
      </a>

      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- Notifications: style can be found in dropdown.less -->
            
            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="<?= base_url('assets_admin/') ?>dist/img/k.jpg" class="user-image" alt="User Image">
                <span class="hidden-xs">Local Pride</span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                  <img src="<?= base_url('assets_admin/') ?>dist/img/k.jpg" class="img-circle" alt="User Image">

                  <p>
                    Local Pride - Admin
                    <small>Member since Nov. 2012</small>
                  </p>
                </li>
                <!-- Menu Body -->
                <li class="user-body">
                  <div class="row">
                    <div class="col-xs-4 text-center">
                      <a href="#">Followers</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Sales</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Friends</a>
                    </div>
                  </div>
                  <!-- /.row -->
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                  </div>
                  <div class="pull-right">
                    <a href="#" class="btn btn-default btn-flat">Sign out</a>
                  </div>
                </li>
              </ul>
            </li>
            <!-- Control Sidebar Toggle Button -->
           
          </ul>
        </div>

      </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="<?= base_url('assets_admin/') ?>dist/img/k.jpg" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p>Local Pride</p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
          <li class="header">MAIN NAVIGATION</li>
          <li><a href="<?= base_url('Admin') ?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>

          <!-- TAMBAH DATA -->
          <?php if (($this->uri->segment(2) == "tambahbaju") || ($this->uri->segment(2) == "tambahsepatu") || ($this->uri->segment(2) == "tambahtas") || ($this->uri->segment(2) == "tambahjaket") || ($this->uri->segment(2) == "tambahsandal") || ($this->uri->segment(2) == "tambahpolo")) : ?>
            <li class="active treeview menu-open">
              <a href="#">
                <i class="fa fa-user-plus"></i>
                <span>Tambah Data</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <?php if ($this->uri->segment(2) == "tambahbaju") : ?>
                  <li class="active"><a href="<?= base_url('Admin/tambahbaju') ?>"><i class="fa fa-circle-o"></i> Data Baju</a></li>
                  <li><a href="<?= base_url('Admin/tambahsepatu') ?>"><i class="fa fa-circle-o"></i> Data Sepatu</a></li>
                  <li><a href="<?= base_url('Admin/tambahtas') ?>"><i class="fa fa-circle-o"></i> Data Tas</a></li>
                  <li><a href="<?= base_url('Admin/tambahjaket') ?>"><i class="fa fa-circle-o"></i> Data Jaket</a></li>
                  <li><a href="<?= base_url('Admin/tambahsandal') ?>"><i class="fa fa-circle-o"></i> Data Sandal</a></li>
                  <li><a href="<?= base_url('Admin/tambahpolo') ?>"><i class="fa fa-circle-o"></i> Data Polo</a></li>

                <?php elseif ($this->uri->segment(2) == "tambahsepatu") : ?>
                  <li><a href="<?= base_url('Admin/tambahbaju') ?>"><i class="fa fa-circle-o"></i> Data Baju</a></li>
                  <li class="active"><a href="<?= base_url('Admin/tambahsepatu') ?>"><i class="fa fa-circle-o"></i> Data Sepatu</a></li>
                  <li><a href="<?= base_url('Admin/tambahtas') ?>"><i class="fa fa-circle-o"></i> Data Tas</a></li>
                  <li><a href="<?= base_url('Admin/tambahjaket') ?>"><i class="fa fa-circle-o"></i> Data Jaket</a></li>
                  <li><a href="<?= base_url('Admin/tambahsandal') ?>"><i class="fa fa-circle-o"></i> Data Sandal</a></li>
                  <li><a href="<?= base_url('Admin/tambahpolo') ?>"><i class="fa fa-circle-o"></i> Data Polo</a></li>

                <?php elseif ($this->uri->segment(2) == "tambahtas") : ?>
                  <li><a href="<?= base_url('Admin/tambahbaju') ?>"><i class="fa fa-circle-o"></i> Data Baju</a></li>
                  <li><a href="<?= base_url('Admin/tambahsepatu') ?>"><i class="fa fa-circle-o"></i> Data Sepatu</a></li>
                  <li class="active"><a href="<?= base_url('Admin/tambahtas') ?>"><i class="fa fa-circle-o"></i> Data Tas</a></li>
                  <li><a href="<?= base_url('Admin/tambahjaket') ?>"><i class="fa fa-circle-o"></i> Data Jaket</a></li>
                  <li><a href="<?= base_url('Admin/tambahsandal') ?>"><i class="fa fa-circle-o"></i> Data Sandal</a></li>
                  <li><a href="<?= base_url('Admin/tambahpolo') ?>"><i class="fa fa-circle-o"></i> Data Polo</a></li>

                <?php elseif ($this->uri->segment(2) == "tambahjaket") : ?>
                  <li><a href="<?= base_url('Admin/tambahbaju') ?>"><i class="fa fa-circle-o"></i> Data Baju</a></li>
                  <li><a href="<?= base_url('Admin/tambahsepatu') ?>"><i class="fa fa-circle-o"></i> Data Sepatu</a></li>
                  <li><a href="<?= base_url('Admin/tambahtas') ?>"><i class="fa fa-circle-o"></i> Data Tas</a></li>
                  <li class="active"><a href="<?= base_url('Admin/tambahjaket') ?>"><i class="fa fa-circle-o"></i> Data Jaket</a></li>
                  <li><a href="<?= base_url('Admin/tambahsandal') ?>"><i class="fa fa-circle-o"></i> Data Sandal</a></li>
                  <li><a href="<?= base_url('Admin/tambahpolo') ?>"><i class="fa fa-circle-o"></i> Data Polo</a></li>

                <?php elseif ($this->uri->segment(2) == "tambahsandal") : ?>
                  <li><a href="<?= base_url('Admin/tambahbaju') ?>"><i class="fa fa-circle-o"></i> Data Baju</a></li>
                  <li><a href="<?= base_url('Admin/tambahsepatu') ?>"><i class="fa fa-circle-o"></i> Data Sepatu</a></li>
                  <li><a href="<?= base_url('Admin/tambahtas') ?>"><i class="fa fa-circle-o"></i> Data Tas</a></li>
                  <li><a href="<?= base_url('Admin/tambahjaket') ?>"><i class="fa fa-circle-o"></i> Data Jaket</a></li>
                  <li class="active"><a href="<?= base_url('Admin/tambahsandal') ?>"><i class="fa fa-circle-o"></i> Data Sandal</a></li>
                  <li><a href="<?= base_url('Admin/tambahpolo') ?>"><i class="fa fa-circle-o"></i> Data Polo</a></li>

                <?php elseif ($this->uri->segment(2) == "tambahspolo") : ?>
                  <li><a href="<?= base_url('Admin/tambahbaju') ?>"><i class="fa fa-circle-o"></i> Data Baju</a></li>
                  <li><a href="<?= base_url('Admin/tambahsepatu') ?>"><i class="fa fa-circle-o"></i> Data Sepatu</a></li>
                  <li><a href="<?= base_url('Admin/tambahtas') ?>"><i class="fa fa-circle-o"></i> Data Tas</a></li>
                  <li><a href="<?= base_url('Admin/tambahjaket') ?>"><i class="fa fa-circle-o"></i> Data Jaket</a></li>
                  <li><a href="<?= base_url('Admin/tambahsandal') ?>"><i class="fa fa-circle-o"></i> Data Sandal</a></li>
                  <li class="active"><a href="<?= base_url('Admin/tambahpolo') ?>"><i class="fa fa-circle-o"></i> Data Polo</a></li>

                  <?php endif; ?>
              </ul>
            </li>
            </li>
          <?php else : ?>
            <li class="treeview ">
              <a href="#">
                <i class="fa fa-user-plus"></i>
                <span>Tambah Data</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?= base_url('Admin/tambahbaju') ?>"><i class="fa fa-circle-o"></i> Data Baju</a></li>
                <li><a href="<?= base_url('Admin/tambahsepatu') ?>"><i class="fa fa-circle-o"></i> Data Sepatu</a></li>
                <li><a href="<?= base_url('Admin/tambahtas') ?>"><i class="fa fa-circle-o"></i> Data Tas</a></li>
                <li><a href="<?= base_url('Admin/tambahjaket') ?>"><i class="fa fa-circle-o"></i> Data Jaket</a></li>
                <li><a href="<?= base_url('Admin/tambahsandal') ?>"><i class="fa fa-circle-o"></i> Data Sandal</a></li>
                <li><a href="<?= base_url('Admin/tambahpolo') ?>"><i class="fa fa-circle-o"></i> Data Polo</a></li>
              </ul>
            </li>
            </li>
          <?php endif; ?>
          <!-- LIST USER -->
         
          <li><a href="<?= base_url('Admin/loginadmin') ?>"><i class="fa fa-sign-out"></i> <span>Logout</span></a></li>
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      
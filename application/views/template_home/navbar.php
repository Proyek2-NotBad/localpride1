
  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet"><header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <a href="<?= base_url(); ?>Home/awal"><img src="<?= base_url('assets_web/') ?>img/log.png" alt="" title="" /></a>
        <!-- Uncomment below if you prefer to use a text image -->
        <!--<h1><a href="#hero">Header 1</a></h1>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
            <li class="active"><a href="<?= base_url(); ?>Home/awal">  Home</a></li>
            <li class="menu-has-children"><a href="">Menu Kami</a>
            <ul>
            <li class="active"><a href="<?= base_url(); ?>Home/baju">  Baju</a></li>
            <li class="active"><a href="<?= base_url(); ?>Home/tas">  Tas</a></li>
            <li class="active"><a href="<?= base_url(); ?>Home/sepatu"> Sepatu </a></li>
            <li class="active"><a href="<?= base_url(); ?>Home/jaket"> Jaket</a></li>
            <li class="active"><a href="<?= base_url(); ?>Home/sandal"> Sandal</a></li>
            <li class="active"><a href="<?= base_url(); ?>Home/polo"> Polo</a></li></ul>
          </li>
            <li class="active"><a href="<?= base_url(); ?>Home/kontak"> Kontak </a></li>
            <li class="active"><a href="<?= base_url(); ?>Home/tentang">  Tentang Kami</a></li>
      </nav>
      <!-- #nav-menu-container -->
    </div>
  </header>
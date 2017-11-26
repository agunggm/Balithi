
<div id="wrapper">

  <!-- Navigation -->
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.html">Balithi</a>
    </div>
    <!-- Top Menu Items -->
    <ul class="nav navbar-right top-nav">


      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i><?PHP echo ucfirst($this->session->userdata('nama'));?><b class="caret"></b></a>
        <ul class="dropdown-menu">

          <li class="divider"></li>
          <li>
            <a href="<?php echo base_url('dashboard/logout') ?>"><i class="fa fa-fw fa-power-off"></i> Logout</a>
          </li>
        </ul>
      </li>
    </ul>
    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
      <ul class="nav navbar-nav side-nav">
        <li class="active">
          <a href="<?php echo base_url().'hal_admin'?>"><i class="glyphicon glyphicon-th"></i> Dashboard</a>
        </li>
        <li>
          <a href="<?php echo base_url().'kelola_koleksi'?>"><i class="glyphicon glyphicon-leaf"></i> Kelola Koleksi</a>
        </li>
        <li>
          <a href="<?php echo base_url().'kelola_user'?>"><i class="glyphicon glyphicon-user"></i> Kelola Pengguna</a>
        </li>
        <li>
          <a href="<?php echo base_url().'penyerahan'?>"><i class="glyphicon glyphicon-download"></i> Kelola Penyerahan</a>
        </li>
        <li>
          <a href="<?php echo base_url().'permintaan'?>"><i class="glyphicon glyphicon-upload"></i> Kelola Permintaan</a>
        </li>
        <li>
          <a href="<?php echo base_url().'laporan'?>"><i class="glyphicon glyphicon-list-alt"></i> Laporan </a>
        </li>

      </ul>
    </div>
    <!-- /.navbar-collapse -->
  </nav>

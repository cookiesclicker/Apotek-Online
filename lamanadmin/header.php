<?php
//membuka koneksi ke database
$host       = 'localhost';
$user       = 'root';
$password   = '';
$dbname     = 'apotik';

$koneksi = mysqli_connect($host, $user, $password, $dbname);

if ($koneksi) {
    echo " ";
} else {
    echo "Database Error";
}
?>
<?php session_start();?>
<?php 
if(!isset($_SESSION['admin'])) {
  echo"<script>location='login.php';</script>";
  header('location:login.php');
  exit();
}
?>

<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Apotek Laras Admin</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bower_components/font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="assets/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="assets/dist/css/skins/skin-blue.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <header class="main-header">

    <!-- Logo -->
    <a href="index.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>L</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Apotek</b>Laras</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="assets/dist/img/download.jpg" class="img-circle" alt="User Image">

                <p>
                  Admin - Apotek Laras
                  <small>since. 2021</small>
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
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="assets/dist/img/download.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Apotek Laras</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
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

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Menu Navigation</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="active"><a href="index.php"><i class="fa fa-dashboard"></i> <span>Home</span></a></li>
        <li class="active"><a href="index.php?halaman=produk"><i class="fa fa-dashboard"></i> <span>Produk</span></a></li>
        <li class="active"><a href="index.php?halaman=pelanggan"><i class="fa fa-dashboard"></i> <span>Pelanggan</span></a></li>
        <li class="active"><a href="index.php?halaman=pembelian"><i class="fa fa-dashboard"></i> <span>Pembelian</span></a></li>
        <li class="active"><a href="index.php?halaman=logout"><i class="fa fa-dashboard"></i> <span>Logout</span></a></li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>
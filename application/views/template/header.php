<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>HRMS | PT.Bamanat Amiete Papua</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?= base_url('assets_template/'); ?>bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url('assets_template/'); ?>font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?= base_url('assets_template/'); ?>Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="<?= base_url('assets_template/'); ?>datatables-bs/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.0.8/dist/css/select2.min.css">
  <link rel="stylesheet" href="<?= base_url('assets_template/'); ?>css/AdminLTE.min.css">
  <link rel="stylesheet" href="<?= base_url('assets_template/'); ?>css/skins/skin-blue.min.css">
  <link rel="stylesheet" href="<?= base_url('assets_template/'); ?>sweetalert2/sweetalert2.css">
  <link rel="stylesheet" href="<?= base_url('assets_template/'); ?>sweetalert2/sweetalert2.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" integrity="sha512-mSYUmp1HYZDFaVKK//63EcZq4iFWFjxSL+Z3T/aCt4IO9Cejm03q3NKKYN6pFQzY0SBOr8h+eCIAZHPXcpZaNw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/1.3.9/daterangepicker-bs3.min.css" integrity="sha512-k0VTXT5hxAAdLbzfP5pqZSmRkrLn2uuvZOyaRmx2q8ABl1xQJfZkyDzlE4PFenpi1TVIhtFodMnNodkTnZDA2g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    <!-- Main Header -->
    <header class="main-header">
      <a href="index2.html" class="logo">
        <span class="logo-mini"><b>HR</b>MS</span>
        <span class="logo-lg"><b>Admin</b>HRMS</span>
      </a>
      <!-- Header Navbar -->
      <nav class="navbar navbar-static-top" role="navigation">
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- messages-menu -->
            <li class="dropdown messages-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope-o"></i><span class="label label-success">4</span></a>
              <ul class="dropdown-menu">
                <li>
                  <ul class="menu">
                    <li>
                      <a href="#">
                        <h4>
                          Support Team
                          <small><i class="fa fa-clock-o"></i> 5 mins</small>
                        </h4>
                        <p>Why not buy a new awesome theme?</p>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="footer"><a href="#">See All Messages</a></li>
              </ul>
            </li>
            <!-- /.messages-menu -->
            <!-- notifications-menu -->
            <li class="dropdown notifications-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell-o"></i><span class="label label-warning">10</span></a>
              <ul class="dropdown-menu">
                <li class="header">You have 10 notifications</li>
                <li>
                  <ul class="menu">
                    <li>
                      <a href="#">
                        <i class="fa fa-users text-aqua"></i> 5 new members joined today
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="footer"><a href="#">View all</a></li>
              </ul>
            </li>
            <!-- /.notifications-menu -->
            <!-- User Account Menu -->
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="<?= base_url('assets_template/'); ?>img/user2-160x160.jpg" class="user-image" alt="User Image">
                <span class="hidden-xs">Simon Liling</span>
              </a>
              <ul class="dropdown-menu">
                <li class="user-header">
                  <img src="<?= base_url('assets_template/'); ?>img/user2-160x160.jpg" class="img-circle" alt="User Image">
                  <p>
                    Alexander Pierce - Web Developer
                    <small>Member since Nov. 2012</small>
                  </p>
                </li>
              </ul>
            </li>
            <!-- /.User Account menu -->
            <li><a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a></li>
          </ul>
        </div>
      </nav>
    </header>
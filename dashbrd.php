<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ZEPHYRS - Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="stylesheet" href="dist/css/preloader.css" >
  <style>
    .main-header{
      background-color: #000;
    }
    .main-footer{
      background-color: #000;
    }
    .main-sidebar{
      background-color: #000;
    }
    *{
      font-family: "Roboto Condensed", sans-serif;
      letter-spacing: 2px;
      font-size: small;
    }
  </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-black navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="homepage.html" class="nav-link">Home</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="homepage.html" class="brand-link">
      <img src="https://th.bing.com/th/id/OIP.x4BmsP2ZpIVljBcLVLdWGQHaHa?w=187&h=187&c=7&o=5&dpr=1.25&pid=1.7" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">ZEPHYRS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
     <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="form1.html" class="nav-link active">
                  <p><b>NEED HELP? <u>FILL THIS FORM</u></b></p>
                </a>
              </li>
            </ul>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <?php
    $file = array_slice(file('wikitest.txt'), 0, 3);
   //print_r ($file);
   list($a, $b, $c) = $file;
   //echo $a."<br>".$b."<br>".$c."<br>".$d."<br>";
?>
          <div class="col-lg-3 col-6"> 
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>1</h3>

                <p><?php echo $a?></p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="http://127.0.0.1:5000/crises1" onclick='/crises' class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>2</h3>

                <p>Indo Pakistan Wars</p>
              </div>
              <div class="icon">
                <i class="ion ion-clipboard"></i>
              </div>
              <a href="http://127.0.0.1:5000/crises2" onclick='/crises2' class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>3</h3>

                <p>
                <!-- <?php echo $c?> -->
                Climatic Changes
                </p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="http://127.0.0.1:5000/crises3" onclick='/crises3' class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>4</h3>
                <p> Korean Conflict</p>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
              <a href="http://127.0.0.1:5000/crises4" onclick='/crises4' class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <p>
          <h2>LIVE TWEETS STREAM</h2>
          <h3><marquee direction="up" scrollamount="1">
		  <ul>
		  <li>Bidens Covid advisory team feature death panel doc who suggest die at be not a tragedy</li>
		  <li>COVID BUSINESS SUPPORT the deadline for employer to submitchange claim under the Coronavirus Job Retention Scheme</li>
		  <li>Pfizers CEO cash out of his stock on the same day the company unveil the result of it COVID vaccine tria</li>
		  <li>Donald Trump have do much more harm to the USA and US democracy than Bin Laden could have dream of and his mismanag</li>
		  <li>MSF be call on the UK Govt to make all COVID vaccine dealsand license public Billions ofof public fund be go into the development and manufacture of COVID vaccine but the deal that will determine who will get access be keep secret THREAD</li>
		  <li>When the Supreme Court agree Sudha Bharadwaj have a good case for bail And ask her to go back to the lower court</li>
      <li>Rick Scott have COVID. Excellent i hope he suffer</li>
      <li>The Association of US Cancer Centers just send a letter to Trump ask him to facilitate transition for COVID effort to Presidentelect Bidens team</li>
      <li>Yikes I hope everyone who be at the pack indoor event in Georgia on Friday where Sen Scott be campaign for Sens
      

		  </ul></marquee></h3>
        </p>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <p class="copyright font-alt">&copy; 2020&nbsp;ZEPHYRS, ALL RIGHTS RESERVED</p>
        </div>
        </div>
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<script src="dist/js/preloader.js"></script>
</body>
</html>

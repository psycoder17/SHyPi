<!--

=========================================================
* Argon Dashboard - v1.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard
* Copyright 2019 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md)

* Template originally coded by Creative Tim
* Adapted to Serenity by Alan Raff

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="refresh" content="300">
  <title>
    Serenity Monitor
  </title>
  <!-- Favicon -->
  <link href="./assets/img/brand/favicon.png" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link href="./assets/js/plugins/nucleo/css/nucleo.css" rel="stylesheet" />
  <link href="./assets/js/plugins/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="./assets/css/argon-dashboard.css?v=1.1.0" rel="stylesheet" />
</head>

<body class="">
  <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Brand -->
      <a class="navbar-brand pt-0" href="./index.html">
        <img src="./assets/img/brand/serenity-logo.png" class="navbar-brand-img" alt="...">
      </a>
      <!-- User -->
      <ul class="nav align-items-center d-md-none">
        <li class="nav-item dropdown">
          <a class="nav-link nav-link-icon" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="ni ni-bell-55"></i>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="media align-items-center">
              <span class="avatar avatar-sm rounded-circle">
                <img alt="Image placeholder" src="./assets/img/theme/alanraff.jpg">
              </span>
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
            <div class=" dropdown-header noti-title">
              <h6 class="text-overflow m-0">Welcome!</h6>
            </div>
            <a href="profile.php" class="dropdown-item">
              <i class="ni ni-single-02"></i>
              <span>My profile</span>
            </a>
            <a href="settings.php" class="dropdown-item">
              <i class="ni ni-settings-gear-65"></i>
              <span>Settings</span>
            </a>
            <a href="support.php" class="dropdown-item">
              <i class="ni ni-support-16"></i>
              <span>Support</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#!" class="dropdown-item">
              <i class="ni ni-user-run"></i>
              <span>Logout</span>
            </a>
          </div>
        </li>
      </ul>
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Collapse header -->
        <div class="navbar-collapse-header d-md-none">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="./index.html">
                <img src="./assets/img/brand/serenity-logo.png">
              </a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        <!-- Form -->
        <form class="mt-4 mb-3 d-md-none">
          <div class="input-group input-group-rounded input-group-merge">
            <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="Search" aria-label="Search">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <span class="fa fa-search"></span>
              </div>
            </div>
          </div>
        </form>
        <!-- Navigation -->
        <ul class="navbar-nav">
          <li class="nav-item">
          <a class=" nav-link" href="index.php">
            <i class="material-icons text-blue">dashboard</i>Dashboard
            </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link active" href="graphs.php">
              <i class="material-icons text-blue">bar_chart</i>Graphs
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="grows.php">
              <i class="material-icons text-blue">history</i>Grow History
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="images.php">
              <i class="material-icons text-blue">camera_alt</i>Images
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="notes.php">
              <i class="material-icons text-blue">note_add</i>Notes
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="timers.php">
              <i class="material-icons text-blue">timer</i>Timers
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="dosage.php">
              <i class="material-icons text-blue">format_list_numbered_rtl</i>Dosage
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="settings.php">
              <i class="material-icons text-blue">settings</i>Settings
            </a>
          </li>

        </ul>
      </div>
    </div>
  </nav>
  <div class="main-content">
    <!-- Navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
      <div class="container-fluid">
        <!-- Brand -->
        <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="graphs.php">Graphs</a>
        <!-- Form -->
        <form class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto">
          <div class="form-group mb-0">
            <div class="input-group input-group-alternative">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-search"></i></span>
              </div>
              <input class="form-control" placeholder="Search" type="text">
            </div>
          </div>
        </form>
        <!-- User -->
        <ul class="navbar-nav align-items-center d-none d-md-flex">
          <li class="nav-item dropdown">
            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="media align-items-center">
                <span class="avatar avatar-sm rounded-circle">
                  <img alt="Image placeholder" src="./assets/img/theme/alanraff.jpg">
                </span>
                <div class="media-body ml-2 d-none d-lg-block">
                  <span class="mb-0 text-sm  font-weight-bold">Alan Raff</span>
                </div>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
              <div class=" dropdown-header noti-title">
                <h6 class="text-overflow m-0">Welcome!</h6>
              </div>
              <a href="./examples/profile.html" class="dropdown-item">
                <i class="ni ni-single-02"></i>
                <span>My profile</span>
              </a>
              <a href="./examples/profile.html" class="dropdown-item">
                <i class="ni ni-settings-gear-65"></i>
                <span>Settings</span>
              </a>
              <a href="./examples/profile.html" class="dropdown-item">
                <i class="ni ni-calendar-grid-58"></i>
                <span>Activity</span>
              </a>
              <a href="./examples/profile.html" class="dropdown-item">
                <i class="ni ni-support-16"></i>
                <span>Support</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#!" class="dropdown-item">
                <i class="ni ni-user-run"></i>
                <span>Logout</span>
              </a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    <!-- End Navbar -->
    <!-- Header -->
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
      <div class="container-fluid">
        <div class="header-body">
        </div>
      </div>
    </div>
    <div class="container-fluid mt--7">
      <div class="row mt-5">
        <div class="col-xl-12 mb-5 mb-xl-0">
          <div class="card shadow">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0">Select Timeframe:</h3>
                </div>
              </div>
            </div>
            <center>
              <div>
                  <ul>
                      <li><a type="button" href="#" class="btn btn-sm btn-outline-primary" onclick="drawChart(1);">1 Day</a></li>
                      <li><a type="button" href="#" class="btn btn-sm btn-outline-primary" onclick="drawChart(7);">1 Week</a></li>
                      <li><a type="button" href="#" class="btn btn-sm btn-outline-primary" onclick="drawChart(30);">1 Month</a></li>
                      <li><a type="button" href="#" class="btn btn-sm btn-outline-primary" onclick="drawChart(90);">3 Months</a></li>
                      <li><a type="button" href="#" class="btn btn-sm btn-outline-primary" onclick="drawChart(180);">6 Months</a></li>
                      <li><a type="button" href="#" class="btn btn-sm btn-outline-primary" onclick="drawChart(365);">1 Year</a></li>
                  </ul>
              </div>
            </center>

            <div class="panel-group">
            <?php
                // Read the sensors that are connected from the database and create a panel for each graph
                include "php/sensor_col_names.php";
                foreach ($colnames as $title){
echo "                <div class=\"panel panel-info\">\n";
echo "                    <div class=\"panel-heading\">\n";
echo "                        <div class=\"panel-title text-center\" id=\"" .$title. "_name\">\n";
echo "                        </div>\n";
echo "                    </div>\n";
echo "                    <div class=\"panel-body\" id=\"" .$title. "_graph\" style=\"height:400px\" class=\"panel-body\">\n";
echo "                    </div>\n";
echo "                </div>\n";
echo "                <br>\n";
            }
            ?>
            <script>
                <?php
                    // populate the graph panel with webpage names
                    include "php/sensor_webpage_names.php";
                ?>
            </script>
            </div>

          </div>
        </div>
      </div>
      
      <!-- Footer -->
      <footer class="footer">
        <div class="row align-items-center justify-content-xl-between">
          <div class="col-xl-6">
            <div class="copyright text-center text-xl-left text-muted">
              &copy; 2019 <a href="#" class="font-weight-bold ml-1" target="_blank">Alan Raff</a>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core   -->
  <script src="./assets/js/plugins/jquery/dist/jquery.min.js"></script>
  <script src="./assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!--   Argon JS   -->
  <script src="./assets/js/argon-dashboard.min.js?v=1.1.0"></script>
  
</body>

<!-- Google Charts JavaScript
================================================== -->
<script src="https://www.google.com/jsapi"></script>

<!-- Custom JavaScript
================================================== -->
<script src="js/hydropi.js"></script>
<!-- When the page has loaded draw the graphs into each panel -->
<script>
  google.load("visualization", "1", {packages:["corechart"]});
  google.setOnLoadCallback(function(){drawChart(1)});
</script>
<!-- Redraw the graphs to fit when the window size changes -->
<script>
  var chart1 = "done";
  $(window).resize(function() {
      if(chart1=="done"){
          chart1 = "waiting";
          setTimeout(function(){drawChart(1);chart1 = "done"},1000);
      }
  });
</script>

</html>
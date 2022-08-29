<?php
session_start();
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    KONDISI UDARA
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/paper-dashboard.css?v=2.0.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
  <script>
  var refreshId = setInterval(function()
  {
      $('#responsecontainer').load('datagraph.php'); //manggil datagraph buat grafik
  }, 3000);
  var refreshId = setInterval(function()
  {
      $('#responsecontainercopy').load('datagrafikcopy.php'); //manggil datagraph buat grafik
  }, 3000);
  var refreshId = setInterval(function()
  {
      $('#responsecontainercopycopy').load('datagrafikcloning.php'); //manggil datagraph buat grafik
  }, 3000);
  </script>
</head>

<body class="">
  <div class="wrapper ">
   <div class="sidebar" data-color="black" data-active-color="danger">
      <div class="logo">
        
        <a href="dashboard.php" class="simple-text logo-normal">
         <i class="nc-icon nc-sun-fog-29"></i>
          <p>Kondisi Udara</p>
        </a>
      </div>
      <div class="sidebar-wrapper">
         <ul class="nav">
          <li>
            <a href="./dashboard.php">
              <i class="nc-icon nc-bank"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li>
            <a href="#">
             <!--  <i class="nc-icon nc-pin-3"></i> -->
              <p></p>
            </a>
          </li>
          <li>
            <a href="./tables.php">
              <i class="nc-icon nc-tile-56"></i>
              <p>Data Table</p>
            </a>
          </li>
          <li>
            <a href="#">
             <!--  <i class="nc-icon nc-pin-3"></i> -->
              <p></p>
            </a>
          </li>
          <li class="active">
            <a href="./grafik.php">
             <i class="nc-icon nc-sound-wave"></i>
              <p>Data Grafik</p>
            </a>
          </li>
          <li>
            <a href="#">
             <!--  <i class="nc-icon nc-pin-3"></i> -->
              <p></p>
            </a>
          </li>
          <br></br>
          <br></br>
          <br></br>
          <br></br>
          <br></br>
          <li class="active-pro">
            <a href="logout.php">
              <i class="nc-icon nc-circle-10"></i>
              <p>Log Out</p>
            </a>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" >MONITORING KONDISI UDARA</a>
          </div>
          
        </div>
      </nav>


        <div class="content">
          <div class="col-md-12">
            <div class="card ">
              <div class="card-header ">
                <h5 class="card-title">Air Monitoring</h5>
                <p class="card-category">24 Hours performance</p>
              </div>
              <div class="card-body ">
              <div id="responsecontainer">
               <!-- <canvas id=myChart width="400" height="100"></canvas>  -->
              </div>
              </div>
              <div class="card-body ">
              <div id="responsecontainercopy"> 
               <!-- <canvas id=myChart width="400" height="100"></canvas>  -->
              </div>
              </div>
              <div class="card-body ">
              <div id="responsecontainercopycopy">
               <!-- <canvas id=myChart width="400" height="100"></canvas>  -->
              </div>
              </div>
              </div>  
            </div>
          </div>
        </div>

  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/jquery-3.4.1.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/paper-dashboard.min.js?v=2.0.0" type="text/javascript"></script>
  <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
 
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
      demo.initChartsPages();
    });
  </script>
</body>

</html>

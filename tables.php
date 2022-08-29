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
  
  <style>
          #div1
          {
            height: 450px;
            /*width: ;*/
            /*padding: 0;
            margin: 0;*/
            overflow: auto;
            overflow-x: auto;
            overflow-y: auto;
          }

          #table1
          {
            /*text-align: center;*/
            font-family: arail;
            font-size: 15pt;
            /*width: 1150px;*/
            /*color: white;*/
            cellspacing: 0px;
            cellpadding: 0px;
            height: 100%
          }

          #div2
          {
            height: 50px;
            /*width: ;*/
            padding: 0;
            /*margin: 0;*/
            /*overflow: auto;
            overflow-x: auto;
            overflow-y: auto;*/
          }

          #table2
          {
            /*text-align: center;*/

            font-family: arail;
            font-size: 15pt;
            /*width: 1150px;*/
            /*color: white;*/
            cellspacing: 0px;
            cellpadding: 0px;
            height: 100%
          }

        </style>

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
          <li class="active">
            <a href="./refreshtable.php">
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
          <li>
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
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <!-- disini? kamu ada login nggak?. gak
                wait-->
              <div class="card-header">
                <h4 class="card-title">Data Table Kondisi Udara</h4>
              </div>
              <div class="card-body">
                <div class="table-responsible"> 
                  <div>
                  <div id="div2">
                  <table id="table2" class="table"> 
                 
                    <thead class="text-primary">
                      <th>
                        ID
                      </th>
                      <th></th>
                      <th></th>
                      <th>
                        Kadar CO
                      </th>
                      <th>
                        Status
                      </th>
                      <th></th>
                      <th></th>
                      <th></th>
                      <th>
                        Kadar CO2
                      </th>
                      <th>
                       Status
                      </th>
                      <th></th>
                      <th></th>
                      <th></th>
                      <th>
                        Waktu
                      </th>
                      <th>
                        
                      
                    </thead>
                    </table>
                      </div>

                      <div id="div1">
                     <table id="table1" class="table">
                    <tbody>
                    <script>
                      t0 = performance.now();



                      <?php
                      $no = 1;
                      $dev = "DEVICE 1";
                      $sql = "SELECT id, co, statusco, co2, statusco2, reading_time FROM data ORDER BY reading_time DESC LIMIT 20";
                      $result = $conn->query($sql);
                      ?>
                      t1 = performance.now();
                      var tee2 = (t1 - t0) ;
                      console.log("Waktu Proses database " + (t1 - t0) + " milliseconds.");
                    </script>
                      <?php
                      if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                          echo "<tr><td>" . $no++. "</td><td></td><td>" . $row["longitude"] . "</td><td></td><td></td><td>".$row["latitude"] . "</td><td></td><td></td><td>". $row["reading_time"]. "</td><td>". $row["temp"]. "</td><td></td><td></td><td></td><td></td><td>". $row["humid"]. "</td><td></td><td></td><td>". $row["co"]. "</td><td></td><td></td><td>". $row["co2"]. "</td></tr>";
                      }
                      }
                      ?>
                      
                      
                    </tbody>
                  </table>
    </div>
  
  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer footer-black  footer-white ">
        <div class="container-fluid">
          <div class="row">
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/paper-dashboard.min.js?v=2.0.0" type="text/javascript"></script>
  <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
</body>

</html>

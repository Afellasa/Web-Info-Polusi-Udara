<script>
var t0=0;
var t1=0;
t0 = performance.now();
<?php
include 'koneksi.php';

$co = mysqli_query($conn,"SELECT co FROM ( SELECT * FROM data ORDER BY reading_time DESC LIMIT 1) Var1 ORDER BY reading_time ASC");
$co2 = mysqli_query($conn,"SELECT co2 FROM ( SELECT * FROM data ORDER BY reading_time DESC LIMIT 1)Var1 ORDER BY reading_time ASC");
?>

<?php
$waktu = mysqli_query($conn,"SELECT reading_time FROM 
  ( SELECT * FROM data ORDER BY reading_time DESC LIMIT 20) 
  Var1 ORDER BY reading_time ASC");
$co1 = mysqli_query($conn,"SELECT co FROM 
  ( SELECT * FROM data ORDER BY reading_time DESC LIMIT 20) 
  Var1 ORDER BY reading_time ASC");
$co21 = mysqli_query($conn,"SELECT co2 FROM 
  ( SELECT * FROM data ORDER BY reading_time DESC LIMIT 20) 
  Var1 ORDER BY reading_time ASC");

?>
t1 = performance.now();
console.log("Waktu Proses " + (t1 - t0) + " milliseconds.");
</script>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Kondisi Udara
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/paper-dashboard.css" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  
  <script src="../assets/js/plugins/jquery-latest.js"></script> 
  <script type="text/javascript" src="../assets/js/plugins/mdb.min.js"></script>

</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="black" data-active-color="danger">
      <div class="logo">
      <!--   <a href="http://www.creative-tim.com" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="../assets/img/air.png">
          </div>
        </a> -->
        <a href="dashboard.php" class="simple-text logo-normal">
          <i class="nc-icon nc-sun-fog-29"></i>
          <p>Kondisi Udara</p>
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="active ">
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
            <a href="./logout.php">
              <i class="nc-icon nc-circle-10"></i>
              <p>Log Out</p>
            </a>
          </li>
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
          <div class="col-lg-6 col-md-11 col-sm-11">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-globe text-warning"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <h7 class="card-header">Karbon Monoksida</h7>
                      <h1 class="card-body text-left text-bold"><?php while ($b = mysqli_fetch_array($co)) { echo  $b['co'];}?></h1>
                    </div>
                  </div>
                </div>
              </div>
              <h5 class="card-footer ">PPM</h5>
              
            </div>
          </div>
          <div class="col-lg-6 col-md-11 col-sm-11">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-atom text-success"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                       <h7 class="card-header">Karbon Dioksida</h7>
                      <h1 class="card-body text-left text-bold"><?php while ($b = mysqli_fetch_array($co2)) { echo  $b['co2'];}?></h1>
                    </div>
                  </div>
                </div>
              </div>
              <h5 class="card-footer ">PPM</h5>
                
              </div>
            </div>
          </div>
        
          <div class="row justify-content-center">
          <div class="col-md-10">
            <div class="card ">
              <div class="card-header ">
                <h5 class="card-title">Grafik</h5>
                <p class="card-category">Monitoring Kondisi Udara</p>
              </div>
              <canvas id=myChart width="300" height="100" style="margin-left: -4%"></canvas>
                <div class="content">
                    <div class="row">
                        <div class="col-md-12"></div>
                    </div>
                        <div class="card-footer ">
                     <hr>
                         <div class="stats">
                     <!-- <i class="fa fa-history"></i> Updated 5 minutes ago -->
                  </div>
                </div>
                </div>
            </div>
          </div>
        </div>
        <br></br>
        <div class="row justify-content-center">
        <div class="col-lg-10 col-md-10 col-sm-10">
        <div class="table" text="text-center">
              <table class="table-striped table-bordered"align="left" border="1" cellspacing="4">
                <tbody>
                  <th colspan=2 class="text-center"> Karbon Monoksida (CO) </th>
                  <tr><th>Kadar Udara(dalam PPM)</th><th class="text-center">Keterangan</th></tr>
                  <tr><td>  0 - 50</td><td>Kategori Baik</td></tr>
                  <tr><td> 51 - 100</td><td>Kategori Sedang</td></tr>
                  <tr><td>101 - 199</td><td>Kategori Tidak Sehat</td></tr>
                  <tr><td>200 - 299</td><td>Kategori Sangat Tidak Sehat</td></tr>
                  <tr><td>300 - 500</td><td>Kategori Berbahaya</td></tr>
                </tbody>
              </table>

              <table class="table-striped table-bordered justify-content-right" align="Center" border="1" cellspacing="0">
                <tbody>
                <th colspan=2 class="text-center"> Karbon Dioksida (CO2) </th>
                <tr><th>Kadar Udara(dalam PPM)</th><th class="text-center">Keterangan</th></tr>
                <tr><td> 380 -  480</td><td>Kategori Baik</td></tr>
                <tr><td> 600 -  800</td><td>Kategori Sedang</td></tr>
                <tr><td>1000 - 1100</td><td>Kategori Tidak Sehat</td></tr>
                <tr><td>2000 - 5000</td><td>Kategori Sangat Tidak Sehat</td></tr>
                <tr><td>6000 - 8000</td><td>Kategori Berbahaya</td></tr>
                </tbody>
              </table>
        </div>
      </div>
      </div>

       <br></br>
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
  <!--  Notifications Plugin    -->
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

  <script>
  var canvas = document.getElementById('myChart');
        var data = {
            labels: [<?php while ($b = mysqli_fetch_array($waktu)) { echo '"' . $b['reading_time'] . '",';}?>],
            datasets: [
            
               {
                label: "CO", 
                backgroundColor: "rgba(255, 255, 255, 0)",
                borderColor: "rgba(255,9,9,1)",
                borderWidth: 1,
                pointBorderColor: "rgba(255, 99, 132, .7)",
                pointBackgroundColor: "#fff",
                pointBorderWidth: 1,
                pointHoverRadius: 5,
                pointHoverBackgroundColor: "rgba(200, 99, 132, .7)",
                pointHoverBorderColor: "rgba(200, 99, 132, .7)",
                pointHoverBorderWidth: 2,
                pointRadius: 5,
                pointHitRadius: 10,
                data: [<?php while ($b = mysqli_fetch_array($co1)) { echo  $b['co'] . ',';}?>],
            },
            {
                label: "CO2", 
                backgroundColor: "rgba(255, 255, 255, 0)",
                borderColor: "rgba(0,9,9,1)",
                borderWidth: 1,
                pointBorderColor: "rgba(255, 99, 132, .7)",
                pointBackgroundColor: "#fff",
                pointBorderWidth: 1,
                pointHoverRadius: 5,
                pointHoverBackgroundColor: "rgba(200, 99, 132, .7)",
                pointHoverBorderColor: "rgba(200, 99, 132, .7)",
                pointHoverBorderWidth: 2,
                pointRadius: 5,
                pointHitRadius: 10,
                data: [<?php while ($b = mysqli_fetch_array($co21)) { echo  $b['co2'] . ',';}?>],
            }
            ]
        };

        var option = 
        {
          showLines: true,
          animation: {duration: 0}
          ,
            scales: {
          yAxes: [{
            ticks: {
              beginAtZero: false
            },
            scaleLabel: {
              display: true,
              labelString: 'PPM' //ganti
            }
          }],
          xAxes: [{
            ticks: {
              beginAtZero: false
            },
            scaleLabel: {
              display: true,
              labelString: 'Waktu (Tahun-Bulan-Tanggal Jam:Menit:Detik)'
            }
          }]
        }
        };
        
        var myLineChart = Chart.Line(canvas,{
          data:data,
          options:option
        });
</script>
</body>

</html>

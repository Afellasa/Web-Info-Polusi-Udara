<script>
var t0=0;
var t1=0;
t0 = performance.now();
<?php
include 'koneksi.php';
?>

<?php
$waktu = mysqli_query($conn,"SELECT reading_time FROM 
  ( SELECT * FROM data ORDER BY reading_time DESC LIMIT 20) 
  Var1 ORDER BY reading_time ASC");
$co = mysqli_query($conn,"SELECT co FROM 
  ( SELECT * FROM data ORDER BY reading_time DESC LIMIT 20) 
  Var1 ORDER BY reading_time ASC");
$co2 = mysqli_query($conn,"SELECT co2 FROM 
  ( SELECT * FROM data ORDER BY reading_time DESC LIMIT 20) 
  Var1 ORDER BY reading_time ASC");
$waktu1 = mysqli_query($conn,"SELECT reading_time FROM 
  ( SELECT * FROM data ORDER BY reading_time DESC LIMIT 20) 
  Var1 ORDER BY reading_time ASC");

?>
t1 = performance.now();
var tee0 = (t1 - t0);
console.log("Waktu Proses database di datagraph.php " + (t1 - t0) + " milliseconds.");
</script>


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

  <canvas id=myChart1 width="300" height="100" style="margin-left: -4%"></canvas>
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



<footer class="footer footer-black  footer-white ">
        <div class="container-fluid">
          <div class="row">
  
          </div>
        </div>
      </footer>

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
                data: [<?php while ($b = mysqli_fetch_array($co)) { echo  $b['co'] . ',';}?>],
            },
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
<script>
  var canvas = document.getElementById('myChart1');
        var data = {
            labels: [<?php while ($b = mysqli_fetch_array($waktu1)) { echo '"' . $b['reading_time'] . '",';}?>],
            datasets: [
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
                data: [<?php while ($b = mysqli_fetch_array($co2)) { echo  $b['co2'] . ',';}?>],
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
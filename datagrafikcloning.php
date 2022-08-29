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
// $temp = mysqli_query($conn,"SELECT temp FROM 
//   ( SELECT * FROM data ORDER BY reading_time DESC LIMIT 20) 
//   Var1 ORDER BY reading_time ASC");
$humid = mysqli_query($conn,"SELECT humid FROM 
  ( SELECT * FROM data ORDER BY reading_time DESC LIMIT 20) 
  Var1 ORDER BY reading_time ASC");

?>
t1 = performance.now();
var tee2 = (t1 - t0) ;
console.log("Waktu Proses database datagrafikcloning.php " + (t1 - t0) + " milliseconds.");
</script>


<canvas id=myChartcopycopy width="300" height="100" style="margin-left: -4%"></canvas>
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
  var canvas = document.getElementById('myChartcopycopy');
        var data = {
            labels: [<?php while ($b = mysqli_fetch_array($waktu)) { echo '"' . $b['reading_time'] . '",';}?>],
            datasets: [

            {
                label: "Humidity", 
                backgroundColor: "rgba(255, 255, 255, 0)",
                borderColor: "rgba(255,0,255,1)",
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
                data: [<?php while ($b = mysqli_fetch_array($humid)) { echo  $b['humid'] . ',';}?>],
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
              labelString: 'RH' //GANTI
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
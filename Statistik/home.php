<!DOCTYPE html>
<html>
  
<head>
  
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../css/sidebar.css">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="../css/dashboard.css">
<script src="../js/sidebar.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="../js/main.js"></script>
<script src="style.css"></script>
<script src="style.js"></script>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <?php include '../halaman/header/header.php';?>
</head>
<body>
<!-- Tab links -->

<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'Beranda')">Beranda</button>
  <button class="tablinks" onclick="openCity(event, 'Index')">Index</button>
</div>

<!-- Tab content -->
<div id="Beranda" class="tabcontent">
  <h3>Beranda</h3>
  <p>Hallo Selamat Datang</p>
</div>
<div class="kotak">
<div id="Index" class="tabcontent">
  <h3>Statistik</h3>
  <p>Semarang Barat</p>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
<body>
<canvas id="myChart" style="width:100%;max-width:600px"></canvas>

<script>
var xValues = [50,60,70,80,90,100,110,120,130,140,150];
var yValues = [7,8,8,9,9,9,10,11,14,14,15];

new Chart("myChart", {
  type: "line",
  data: {
    labels: xValues,
    datasets: [{
      fill: false,
      lineTension: 0,
      backgroundColor: "rgba(0,0,255,1.0)",
      borderColor: "rgba(0,0,255,0.1)",
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    scales: {
      yAxes: [{ticks: {min: 6, max:16}}],
    }
  }
});
</script>
</div>

</body>
</html> 

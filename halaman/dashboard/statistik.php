<!DOCTYPE html>
<html>
<head>
<title>Statistik</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../../css/header.css">
<link rel="stylesheet" href="../../css/dashboard.css">
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="../../js/main.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
</head>
<body>

<!-- cek pesan notifikasi -->
<?php
  include '../header/header.php';
?>

<ul class="nav justify-content-center">
    <li class="nav-item">
        <a class="nav-link bg-light text-dark p-3 mb-2 fs-5" href="../dashboard/dashboard.php">Beranda</a>
    </li>
    <li class="nav-item">
        <a class="nav-link bg-light text-dark p-3 mb-2 fs-5 active" aria-current="page" href="../dashboard/statistik.php">Statistik</a>
    </li>
</ul>


<p class="atas">Statistik</p>
  <div class="bawah" style="margin-bottom:50px;">
  <form action="statistik.php" method="get">
    <div class="tabel">
        <p>Lokasi</p>
    <select class="form-select mb-3" aria-label="Default select example" name="lokasi" id="Lokasi" onchange="selectDaerah()">
          <option selected disabled >Pilih Lokasi</option>
          <option value="Semarang Timur">Semarang Timur</option>
          <option value="Semarang Selatan">Semarang Selatan</option>
          <option value="Semarang Barat">Semarang Barat</option>
          <option value="Semarang Utara">Semarang Utara</option>
          <option value="Semarang Tengah">Semarang Tengah</option>
        </select>
        <div class="row">
    <div class="col">
      <label for="Tanggal">Tanggal</label>
      <input type="date" class="form-control" id="Tanggal" min="2000-01-02" placeholder="" name="tanggal_cek">
    </div>
    <button type="submit" class="btn btn-primary" style="margin-top:30px; margin-left: 0.5%; width: 300px;; "name="tampilChart" onclick="ShowChart('myChart')">Cek Data Chart</button>
    </div>
    </form>
  </div>


 
  <!-- tabel menampilkan data statistik -->
  <p class="atas">Data Statistik</p>
  <div class="bawah"style="margin-bottom:50px;">
    <!-- Chart untuk menampilkan statistik -->
    <canvas id="myChart" class="canvaChart" style="max-width: 600px;margin-bottom:30px;"></canvas>
  </div>
 <script>
<?php 
include "../../kueri/koneksi.php";
if(isset($_GET['tampilChart'])){
  $lokasi = $_GET['lokasi'];
  $cek = $_GET['tanggal_cek'];

  $qry = mysqli_query($konek, "SELECT * FROM statistik WHERE asal = '$lokasi' AND tanggal = '$cek'");
  if(mysqli_num_rows($qry)>0){
    while($row = mysqli_fetch_assoc($qry)){
?>

var chr = document.getElementById("myChart").getContext("2d");
var myChart = new Chart(chr, {
  type: 'bar',
  data: {
    labels: ['KTP','Kartu Keluarga','Surat Kematian','Akta Kelahiran','KIA','Surat Pindah'],
    datasets: [{
      label: 'Reset',
      data: [
        <?php
        echo $row['ktp'];?>,
        <?php
        echo $row['kartu_keluarga'];?>,
        <?php 
        echo $row['surat_kematian'];?>,
        <?php 
        echo $row['akta_kelahiran'];?>,
        <?php 
        echo $row['kia'];?>,
        <?php 
        echo $row['surat_pindah'];?>
      ],
      backgroundColor: [
        'rgba(255, 99, 132, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(255, 206, 86, 0.2)',
        'rgba(75, 192, 192, 0.2)',
        'rgba(255, 41, 57, 0.5)',
        'rgba(23, 41, 57, 0.5)',
      ],
      borderColor: [
        'rgba(255,99,132,1)',
        'rgba(54, 162, 235, 1)',
        'rgba(255, 206, 86, 1)',
        'rgba(75, 192, 192, 1)',
        'rgba(23, 41, 162, 0.5)',
        'rgba(75, 205, 97, 0.5)',
      ],
      borderWidth: 1
    }]
  },
  options: {
    scales: {
      yAxes: [{
        ticks: {
          beginAtZero:true
        }
      }]
    }
  }
});

<?php } } }?>
</script>
</body>
</html> 
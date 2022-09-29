<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../../css/header.css">
<link rel="stylesheet" href="../../css/dashboard.css">
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="../../js/main.js"></script>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
</head>
<body>

<!-- cek pesan notifikasi -->
<?php
  include '../header/header.php';
  if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "keluar"){
			echo '
			<div class="alert alert-success" style="text-align: center;">
			<strong>Anda Berhasil Keluar</strong>
			</div>';
		}
  }
?>
<!-- Tab links -->
<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'Beranda')">Beranda</button>
  <button class="tablinks" onclick="openCity(event, 'Index')">Index</button>
  <a href="../login/login.php" class="fas login-bottom">&#xf2bd;</a>
</div>

<!-- Tab content -->
<div id="Beranda" class="tabcontent">
  <p class="atas">Jadwal Kegiatan dan Agenda Hari Ini</p>
  <div class="bawah">
    <div class="tabel">
      <?php include_once '../tabel/tabel.php';?>
    </div>
  </div>
</div>

<div id="Index" class="tabcontent">
  <h3>Statistik</h3>
  <form action="dashboard.php" method="get">
  <!-- pilih lokasi kecamatan untuk dicek grafiknya -->
  <select name="lokasi" id="Lokasi" onchange="selectDaerah()">
    <option selected disabled >Pilih Lokasi</option>
    <option value="Semarang Timur">Semarang Timur</option>
    <option value="Semarang Selatan">Semarang Selatan</option>
    <option value="Semarang Barat">Semarang Barat</option>
    <option value="Semarang Utara">Semarang Utara</option>
    <option value="Semarang Tengah">Semarang Tengah</option>
  </select>
  <!-- pilih tanggal untuk cek grafik -->
  <input type="date" name="tanggal_cek">
  <button type="submit" class="login-botton" name="tampilChart" onclick="ShowChart('myChart')">Cek Data Chart</button>
  </form>
  <a href="dashboard.php" class="login-botton">Refresh</a>
  <!-- Chart untuk menampilkan statistik -->
  <canvas id="myChart" class="canvaChart"></canvas>
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
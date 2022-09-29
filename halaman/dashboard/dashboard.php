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
  if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "keluar"){
			echo '
			<div class="alert alert-success" style="text-align: center;">
			<strong>Anda Berhasil Keluar</strong>
			</div>';
      header("Refresh:3; url=dashboard.php");
		}
  }
?>

<ul class="nav justify-content-center bg-light text-dark ">
  <li class="nav-item">
  <a class="nav-link  bg-light text-dark p-3 mb-2 fs-5 active" aria-current="page" href="../dashboard/dashboard.php">Beranda</a>
  </li>
  <li class="nav-item">
  <a class="nav-link  bg-light text-dark p-3 mb-2 fs-5" href="../dashboard/statistik.php">Statistik</a>
  </li>
</ul>
<ul class="nav justify-content-end">
    <li class="nav-item">
    <a href="../login/login.php" class="fas login-bottom">&#xf2bd;</a>
    </li>
  </ul>



  <p class="atas">Jadwal Kegiatan dan Agenda Hari Ini</p>
  <div class="bawah"style="margin-bottom:50px;">
    <div class="tabel">
      <?php include_once '../tabel/tabel.php';?>
    </div>
  </div>
  
</body>
</html> 
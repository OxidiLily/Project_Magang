<!DOCTYPE html>
<html>
<head>
<title>Dashboard Admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../../css/sidebar.css">
<link rel="stylesheet" href="../../css/dashboard_admin.css">
<script src="../../js/sidebar.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="../../js/main.js"></script>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>
<body>

<div id="mySidenav" class="sidenav">
  <div class="closebtn"> 
    <a href="javascript:void(0)" class='fas fa-angle-left' onclick="closeNav()" >&#xf104;</a>
  </div>

  <a href="dashboard.php">Dashboard</a>
  <a href="inputdata.php">Input Agenda</a>
  <a href="../statistik/input_statistik.php">Input Rekap</a>
  <a href="../../kueri/validasiLogout.php">Keluar</a>
  
</div>
<!-- cek pesan notifikasi -->

<div id="main">
  <div class="LogoMenu">
    <span onclick="openNav()">&#9776;</span>
    <a class='fas'href="dashboard.php" style='font-size:24px'>&#xf015;</a>
    <a class='fas'href="inputdata.php" style='font-size:24px'>&#xf11c;</a>
    <a class='fas'href="../statistik/input_statistik.php" style='font-size:24px'>&#xf02f;</a>
    <a class='fas'href="../../kueri/validasiLogout.php" style='font-size:24px'>&#xf011;</a>
  </div>
  <?php 

  session_start();
  if($_SESSION['status']!="login"){
    header("location:../login/login.php");
  }
  
  if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "good"){
			echo '
			<div class="alert alert-success" style="text-align: center;">
			Selamat Datang !!  <strong>' .$_SESSION['username'].'</strong>
			</div>';
		}
	}

  include '../header/header.php';
?>
  <p class="atas">Jadwal Kegiatan dan Agenda Hari Ini</p>

  <div class="bawah">
    <div class="tabel">
      <?php include '../tabel/tabel.php';?>
    </div>
    
  </div>
  

</div>

</body>
</html> 

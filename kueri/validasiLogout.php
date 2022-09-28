<!DOCTYPE html>
<html>
<head>
<title>Logout Admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../css/sidebar.css">
<link rel="stylesheet" href="../css/dashboard_admin.css">
<link rel="stylesheet" href="../css/header.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="../js/sidebar.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="../js/main.js"></script>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

</head>
<body>

<div id="mySidenav" class="sidenav">
  <div class="closebtn"> 
    <a href="javascript:void(0)" class='fas fa-angle-left' onclick="closeNav()" >&#xf104;</a>
  </div>

  <a href="../halaman/agenda/dashboard.php">Dashboard</a>
  <a href="../halaman/agenda/inputdata.php">Input Agenda</a>
  <a href="../halaman/statistik/input_statistik.php">Input Rekap</a>
  <a href="validasiLogout.php">Keluar</a>
  
</div>

<div id="main">
  <div class="header">
    <img class="logo" src="../gambar/logo.png" alt="CompanyLogo">
    
    <h2>INFORMASI KEGIATAN DAN AGENDA</h2><br><br>
    <h5>DINAS KEPENDUDUKAN DAN CATATAN SIPIL</h5>
    <br>
    <div class="header-right">
      <p class="tgl"><?php include '../halaman/waktu/jam.php';?></p>
      <p class="tgl"><?php include '../halaman/waktu/tgl.php';?></p>
    </div>
  </div>
  <div class="LogoMenu">
    <span onclick="openNav()">&#9776;</span>
    <a class='fas'href="../halaman/agenda/dashboard.php" style='font-size:24px'>&#xf015;</a>
    <a class='fas'href="../halaman/agenda/inputdata.php" style='font-size:24px'>&#xf11c;</a>
    <a class='fas'href="../halaman/statistik/input_statistik.php" style='font-size:24px'>&#xf02f;</a>
    <a  class='fas'href="validasiLogout.php" style='font-size:24px'>&#xf011;</a>
  </div>

  <div class="valkeluar">
      <h1>Anda Yakin Mau Keluar?</h1>
      <a href="../halaman/agenda/dashboard.php" class="btn btn-secondary"> Batal</a>
      <a href="../halaman/dashboard/dashboard.php?pesan=keluar" class="btn btn-danger"> Keluar </a>
      
  </div>
  

</div>

</body>
</html> 

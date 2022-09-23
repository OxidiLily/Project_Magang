<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../../css/sidebar.css">
<link rel="stylesheet" href="../../css/dashboard.css">
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
  <a href="#">Cetak Agenda</a>
  <a href="validasiLogout.php">Keluar</a>
  
</div>

<div id="main">
  <?php include '../header/header.php';?>

  <div class="LogoMenu">
    <span onclick="openNav()">&#9776;</span>
    <a class='fas'href="dashboard.php" style='font-size:24px'>&#xf015;</a>
    <a class='fas'href="inputdata.php" style='font-size:24px'>&#xf11c;</a>
    <a class='fas'href="#" style='font-size:24px'>&#xf02f;</a>
    <a  class='fas'href="validasiLogout.php" style='font-size:24px'>&#xf011;</a>
  </div>

  <div class="valkeluar">
      <h1>Anda Yakin Mau Keluar?</h1>
      <a href="dashboard.php" class="btn btn-secondary"> Batal</a>
      <a href="login/login.php" class="btn btn-danger"> Keluar</a>
  </div>
  

</div>

</body>
</html> 

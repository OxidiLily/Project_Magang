<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../../css/header.css">
<link rel="stylesheet" href="../../css/dashboard.css">
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="../../js/main.js"></script>
<script src="Statistik/style.css"></script>
<script src="Statistik/style.js"></script>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
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

  <a href="../admin/login/login.php" class="fas login-bottom">&#xf2bd;</a>

  <p class="atas">Jadwal Kegiatan dan Agenda Hari Ini</p>

  <div class="bawah">
    <div class="tabel">
      <?php include '../tabel/tabel.php'?>
    </div>
    
  </div>
  


</body>
</html> 

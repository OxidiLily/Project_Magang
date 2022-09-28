<!DOCTYPE html>
<html>
<head>
<title>Input Data</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../../css/sidebar.css">
<link rel="stylesheet" href="../../css/dashboard.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="../../css/ubahdata.css">
<script src="../../js/sidebar.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="../../js/main.js"></script>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

</head>
<body>

<div id="mySidenav" class="sidenav">
  <div class="closebtn"> 
    <a href="javascript:void(0)" class='fas fa-angle-left' onclick="closeNav()" >&#xf104;</a>
  </div>

  <a href="dashboard.php">Dashboard</a>
  <a href="inputdata.php">Input Agenda</a>
  <a href="input_statistik.php">Input Rekap</a>
  <a href="validasiLogout.php">Keluar</a>
  
</div>

<div id="main">
  <?php include '../header/header.php';?>

  <div class="LogoMenu">
    <span onclick="openNav()">&#9776;</span>
    <a class='fas'href="dashboard.php" style='font-size:24px'>&#xf015;</a>
    <a class='fas'href="inputdata.php" style='font-size:24px'>&#xf11c;</a>
    <a class='fas'href="input_statistik.php" style='font-size:24px'>&#xf02f;</a>
    <a class='fas'href="validasiLogout.php" style='font-size:24px'>&#xf011;</a>
  </div>

  <p class="atas">Jadwal Kegiatan dan Agenda Hari Ini</p>

  <div class="bawah">
    
    <div class="tabel">
        <div class="inputData">
            <p><button data-toggle="modal" data-target="#tambahData" class="w3-button w3-blue w3-round" ><i style='font-size:16px' class='fas'>&#xf067;</i>Tambah</button></p>
            <?php include "../command/tambahdata.php";?>
        </div> 

        <div class="hapusData">
            <p><a data-toggle="modal" data-target="#HapusData" href="#HapusData" class="w3-button w3-red w3-round" style="text-decoration:none ;">Hapus Semua</a></p>
        </div>

        <?php include '../tabel/tabeledit.php';?>

    </div>
    
  </div>
  

</div>
<!-- Modal/PopUp untuk hapus semua data di tabel -->  
<div class="modal fade" id="HapusData" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <form action="../../kueri/hapusSemua.php" method="post">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="JudulModalHapus">Hapus Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Anda Yakin Hapus Semua Data?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-danger" name="hapusSemuaData">Hapus</button>
      </div>
    </div>
    </form>
  </div>
</div>

</body>
</html> 

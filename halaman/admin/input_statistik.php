<!DOCTYPE html>
<html>
<head>
<title>Input Statistik</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../../css/sidebar.css">
<link rel="stylesheet" href="../../css/dashboard_admin.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
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
  <a href="input_statistik.php">Input Rekap</a>
  <a href="validasiLogout.php">Keluar</a>
  
</div>
<!-- cek pesan notifikasi -->

<div id="main">
  
  <?php 

  include '../header/header.php';

   ?>

    <div class="LogoMenu">
      <span onclick="openNav()">&#9776;</span>
      <a class='fas'href="dashboard.php" style='font-size:24px'>&#xf015;</a>
      <a class='fas'href="inputdata.php" style='font-size:24px'>&#xf11c;</a>
      <a class='fas'href="input_statistik.php" style='font-size:24px'>&#xf02f;</a>
      <a class='fas'href="validasiLogout.php" style='font-size:24px'>&#xf011;</a>
    </div>
  

    <div class="stat">
        <h1>Input Data</h1>
        <select class="form-select mb-3" aria-label="Default select example">
          <option selected>Pilih Lokasi</option>
          <option value="1">Semarang Timur</option>
          <option value="2">Semarang Selatan</option>
          <option value="3">Semarang Barat</option>
          <option value="4">Semarang Utara</option>
        </select>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="KTP">
            <label for="floatingInput">Kartu Tanda Penduduk</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="Kartu Keluarga">
            <label for="floatingInput">Kartu Keluarga</label>
        </div>

        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="Surat Kematian">
            <label for="floatingInput">Surat Kematian</label>
        </div>
        
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="Akta Kelahiran">
            <label for="floatingInput">Akta Kelahiran</label>
        </div>

        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="Kartu Identitas Anak">
            <label for="floatingInput">Kartu Identitas Anak</label>
        </div>
        
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="Surat Pindah">
            <label for="floatingInput">Surat Pindah</label>
        </div>
        
        <div class="d-grid gap-2 d-md-block">
            <button class="btn btn-primary" type="button">Tambah</button>
            <button class="btn btn-danger" type="button">Batal</button>
        </div>
        
      </div>

</div>

</body>
</html> 

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

  <a href="../agenda/dashboard.php">Dashboard</a>
  <a href="../agenda/inputdata.php">Input Agenda</a>
  <a href="input_statistik.php">Input Rekap</a>
  <a href="../../kueri/validasiLogout.php">Keluar</a>
  
</div>
<!-- cek pesan notifikasi -->

<div id="main">
  <?php include '../header/header.php'; ?>
    <div class="LogoMenu">
      <span onclick="openNav()">&#9776;</span>
      <a class='fas'href="../agenda/dashboard.php" style='font-size:24px'>&#xf015;</a>
      <a class='fas'href="../agenda/inputdata.php" style='font-size:24px'>&#xf11c;</a>
      <a class='fas'href="input_statistik.php" style='font-size:24px'>&#xf02f;</a>
      <a class='fas'href="../../kueri/validasiLogout.php" style='font-size:24px'>&#xf011;</a>
    </div>
  
    <form action="../../kueri/statistik/inputData.php" method="post">
    <div class="stat">

        <h1>Input Data</h1>

        <select class="form-select mb-3" aria-label="Default select example" name="asal">
          <option selected value="">Pilih Lokasi</option>
          <option value="Semarang Timur">Semarang Timur</option>
          <option value="Semarang Selatan">Semarang Selatan</option>
          <option value="Semarang Barat">Semarang Barat</option>
          <option value="Semarang Utara">Semarang Utara</option>
          <option value="Semarang Tengah">Semarang Tengah</option>
        </select>
        <input type="hidden" name="tanggal" value="<?php echo $_SESSION['tanggal_sekarang']; ?>">
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="KTP" name="ktp">
            <label for="floatingInput">Kartu Tanda Penduduk</label>
        </div>

        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="Kartu Keluarga" name="kartu_keluarga">
            <label for="floatingInput">Kartu Keluarga</label>
        </div>

        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="Surat Kematian" name="surat_kematian">
            <label for="floatingInput">Surat Kematian</label>
        </div>
        
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="Akta Kelahiran" name="akta_kelahiran">
            <label for="floatingInput">Akta Kelahiran</label>
        </div>

        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="Kartu Identitas Anak" name="kia">
            <label for="floatingInput">Kartu Identitas Anak</label>
        </div>
        
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="Surat Pindah" name="surat_pindah">
            <label for="floatingInput">Surat Pindah</label>
        </div>
        
        <div class="d-grid gap-2 d-md-block">
            <button class="btn btn-primary" type="submit" name="tambah_rekap">Tambah</button>
            <button class="btn btn-danger" type="button">Batal</button>
        </div>
        
    </div>
    </form>

</div>

</body>
</html> 

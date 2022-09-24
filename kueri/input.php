<?php
include '../koneksi/koneksi.php';
if(isset($_POST['tambahdata'])){
    $kegiatan = $_POST['kegiatan'];
    $tanggal = $_POST['tanggal'];
    $jam = $_POST['jam'];
    $tempat = $_POST['tempat'];
    $tanggung_jawab = $_POST['tanggung_jawab'];
    $keterangan = $_POST['keterangan'];
    
    $sql = "INSERT INTO agenda(kegiatan,tanggal,waktu,tempat,tanggung_jawab,keterangan) 
        VALUES('$kegiatan','$tanggal','$jam','$tempat','$tanggung_jawab','$keterangan')";
    
    if(mysqli_query($konek,$sql)){
        echo "data berhasil diinput";
        header('refresh: 3; url="../halaman/admin/inputdata.php"');
    }else{
        echo "gagal menambahkan data";
        header('refresh:3; url="../halaman/admin/inputdata.php"');
    }
}
?>
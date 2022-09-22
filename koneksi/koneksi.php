<?php 
$server = "localhost";
$user = "root";
$pass = "";
$db = "jadwal";

// kode koneksi
// $konek = new mysqli($server, $user, $pass, $db);
$konek = mysqli_connect($server, $user, $pass, $db);
// cek koneksi terhubung
if ($konek->connect_error){
    die("Gagal Konek" . $konek->connect_error);
}
?>
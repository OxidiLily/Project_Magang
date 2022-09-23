<?php
include '../koneksi/koneksi.php';

if(isset($_POST['login'])){
    $username = $_POST['user'];
    $password = $_POST['pass'];

    $qry = mysqli_query($konek, "SELECT * FROM users where username='$username' and password='$password'"); 
    // cek username
    if(mysqli_num_rows($qry) > 0){
        // cek password
        header("location:../halaman/admin/dashboard.php");
    }
    else{
        header("location:../halaman/admin/login/login.php?pesan=gagal");
    }
}
?>
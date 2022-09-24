<?php
session_start();
include '../koneksi/koneksi.php';

if(isset($_POST['login'])){
    
    $username = $_POST['user'];
    $password = $_POST['pass'];

    $qry = mysqli_query($konek, "SELECT * FROM users where username='$username' and password='$password'"); 
    // cek username
    if(mysqli_num_rows($qry) > 0){
        // cek password
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "login";
        header("location:../halaman/admin/dashboard.php?pesan=good");
    }
    else{
        $_SESSION['status'] = "logout";
        header("location:../halaman/admin/login/login.php?pesan=gagal");
    }
}
?>
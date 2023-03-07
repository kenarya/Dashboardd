<?php
session_start();
// include koneksi
include '../koneksi.php';

// menangkap data yang ada di form
$email = $_POST['email'];
$password = $_POST['password'];

// menginput database
$data = mysqli_query($koneksi, "select * from anggota where email='$email' and password='$password'");
 $cek_data = mysqli_num_rows($data);

 if($cek_data > 0 ){
    $_SESSION['email']=$email;
    $_SESSION['status']='login';

    header("location:index_anggota.php");
    
 }else{
 header("location:login_anggota.php?pesan=gagal");
}
?>
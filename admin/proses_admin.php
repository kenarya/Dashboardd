<?php
session_start();
// include koneksi
include '../koneksi.php';



// menangkap data yang ada di form
$username = $_POST['admin'];
$password = $_POST['password'];



// menginput database
$data = mysqli_query($koneksi,"select * from admin where username='$username' and password='$password'");
 $cek_data = mysqli_num_rows($data);


 if($cek_data > 0 ){
    $_SESSION['admin']=$username;
    $_SESSION['status']='login';

    header("location:index_admin.php");
    
    
 }else{
 header("location:login_admin.php?pesan=gagal");
}
?>
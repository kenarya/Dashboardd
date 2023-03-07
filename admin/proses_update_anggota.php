<?php
// include koneksi
include '../koneksi.php';

// menangkap data yang ada di form
$id_anggota = $_POST['id_anggota'];
$nama = $_POST['nama'];
$no_telp = $_POST['no_telp'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$password = $_POST['password'];

// menginput databases
$input = mysqli_query($koneksi,"update anggota set nama = '$nama', no_telp = '$no_telp', alamat = '$alamat', 
email = '$email', password = '$password' where id_anggota = $id_anggota");

// Mengembalikan ke halaman awall
if($input){
    ?>
    <script>
        alert('data berhasil dirubah');
        window.location = "index_admin.php";
    </script>
    <?php
}else{
    ?>
    <script>
         alert('data gagal dirubah');
        window.location = "index_admin.php";
    </script>
    <?php
}
?>
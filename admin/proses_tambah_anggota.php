<?php
// include koneksi
include '../koneksi.php';

// menangkap data yang ada di formm
$nama = $_POST['nama'];
$no_telp = $_POST['no_telp'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$password = $_POST['password'];

// menginput database
$input = mysqli_query($koneksi,"insert into anggota values('','$nama','$no_telp','$alamat','$email','$password')");

// Mengembalikan ke halaman awall
if($input){
    ?>
    <script>
        alert('data berhasil ditambahkan');
        window.location = "index_admin.php";
    </script>
}else{
    <script>
         alert('data gagal ditambahkan');
        window.location = "index_admin.php";
    </script>
    <?php
}
?>
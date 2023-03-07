<?php
// include koneksi
include '../koneksi.php';

// menangkap data yang ada di form
$id_anggota = $_POST['id_anggota'];
$nama = $_POST['nama'];
$no_telp = $_POST['no_telp'];
$alamat = $_POST['alamat'];


// menginput database
$input = mysqli_query($koneksi,"update anggota set id_anggota = '$id_anggota', nama = '$nama', no_telp = '$no_telp', 
alamat = '$alamat', email = '$email' where id_anggota = $id_anggota");

// Mengembalikan ke halaman awal
if($input){
    ?>
    <script>
        alert('data berhasil dirubah');
        window.location = "index_anggota.php";
    </script>
}else{
    <script>
         alert('data gagal dirubah');
        window.location = "index_anggota.php";
    </script>
    <?php
}
?>
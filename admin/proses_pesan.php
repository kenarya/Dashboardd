<?php
// include koneksi
include '../koneksi.php';

// menangkap data yang ada di formm 
$id = $_POST['id'];
$status = $_POST['status'];

$proses = "update orders set status = '$status' where id = $id";
$input = mysqli_query($koneksi,$proses);

// Mengembalikan ke halaman awall
if($input){
    ?>
    <script>
        alert('Status Telah Diubah');
        window.location = "pesan.php";
    </script>
    <?php
}else{
    ?>
    <script>
         alert('Status Gagal Diubah');
        window.location = "pesan.php";
    </script>
    <?php
}
?>
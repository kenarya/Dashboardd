<?php
// inlude koneksi
include '../koneksi.php';


// Menngkap data id yang di kirim dari url
$id_anggota = $_GET['id_anggota'];


// menghapus data dari table buku bang

mysqli_query($koneksi, "delete from anggota where id_anggota='$id_anggota'");

// mengalihkan ke tampilan awal yah 
header("location:index_admin.php");

?>
<?php
// include koneksi
include '../koneksi.php';

// menangkap data yang ada di form
$katalog = $_POST['id_katalog'];
$judul_buku = $_POST['judul_buku'];
$pengarang = $_POST['pengarang'];
$thn_terbit = $_POST['thn_terbit'];
$penerbit = $_POST['penerbit'];
$harga = $_POST['harga'];
$qty = $_POST['qty'];

// menginput databases
$input = mysqli_query($koneksi,"insert into buku values('','$katalog','$judul_buku','$pengarang','$thn_terbit','$penerbit','$harga','$qty')");

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
        window.location = "tambah_buku.php";
    </script>
    <?php
}
?>
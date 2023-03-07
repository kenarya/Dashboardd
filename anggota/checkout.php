<?php
session_start();
require '../koneksi.php';
require 'item.php';

$simpan = 'insert into orders (name, date_create, status, username) values ("New Order", "'.date('Y-m-d').'",0, "acc 2")';

mysqli_query($koneksi,$simpan);

$id_orders = mysqli_insert_id($koneksi);
$keranjang = unserialize(serialize($_SESSION['keranjang']));

for ($barang = 0; $barang<count($keranjang); $barang++){
    $detail = 'insert into oders_detail (id_product, id_order, price, qty) values ('.$keranjang[$barang]->id_buku.', '.$id_orders.', '.$keranjang[$barang]->harga.', '.$keranjang[$barang]->qty.')';

    mysqli_query($koneksi, $detail);
}

unset($_SESSION['keranjang'])
?>

<html>
<head>
    <title>Checkout Barang</title>
</head>
<body>
    <p>
        Thanks for buying product , click 
        <a href="index_anggota.php">here</a> to purchasing product
    </p>    
</body>
</html>
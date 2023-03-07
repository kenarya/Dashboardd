<html>
<head>
   <title>Pemesanan</title>
</head>
<body>
    <h1>Status Pemesanan Anda</h1>
    <h3>Silahkan Hubungi Admin Untuk Status Pemesanan</h3>
    <table border="1">
        <tr>
            <th>Resi</th>
            <th>Barang</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
        <?php
        require '../koneksi.php';
        $data = "select * from orders";
        $data_order = mysqli_query($koneksi, $data);
        foreach ($data_order as $list){
            echo "<tr>";
            echo "<td>".$list['id']."</td>";
            echo "<td>".$list['name']."</td>";
            echo "<td>";
            $status = $list['status'];
            if ($status == 0){
                echo "Pesanan dibuat";
            }else if ($status == 1){
                echo "Pesanan Terkirim";
            }else if ($status == 2){
                echo "Pesanan reject";
            }else{
                echo "Pesanan hilang";
            }
            "</td>";
            ?>
            <td><a href="cetak_struk.php?id=<?php echo $list['id'];?>">Cetak Struk</a></td>
        <?php
            echo "</tr>";
        }
        ?>
    </table>
    <a href="index_anggota.php">Lanjut Belanja</a>
</body>
</html>
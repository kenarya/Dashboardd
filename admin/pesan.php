<html>
    <head>
        <title>Pemesanan</title>
    </head>
    <body>
        <h1>List Pesanan</h1>
        <h3>Klik Valid Untuk Menyelesaikan Pemesanan</h3>
        <h3>Klik Not Valid Untuk Membatalkan Pemesanan</h3>
        <table border="1">
        <tr>
            <th>Resi</th>
            <th>Barang</th>
            <th>Status</th>
            <th>Username</th>
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
            echo "<td>".$list['status']."</td>";
            echo "<td>".$list['username']."</td>";
            ?>
            <td><a href="update_pesan.php?id=<?php echo $list['id'] ?>">Edit</a></td>
        <?php
            echo "</tr>";
        }
        ?>
        
    </table>
</body>
</html>
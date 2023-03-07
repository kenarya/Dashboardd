<html>

<head>
    <title>Update Data Buku</title>
    <link rel="stylesheet" href="style2.css">
</head>

<body>
    <div class="container">
        <h1>Merubah Data Buku</h1>

        <?php
        include "../koneksi.php";
        $id_buku = $_GET['id_buku'];
        $data = mysqli_query($koneksi, "select * from buku where id_buku = '$id_buku'");
        // data yang sudah dicocokan dengan id_buku di ledakkan dengan fetch array
        while($meledak = mysqli_fetch_array($data)){
        ?>

        <form action="proses_update_buku.php" method="post">
            <input type="hidden" name="id_buku" value="<?php echo $meledak['id_buku'];?>">
            <label>ID Katalog</label>
            <br>
            <input type="number" name="id_katalog" value="<?php echo $meledak['id_katalog'];?>">
            <br>
            <label>Judul Buku</label>
            <br>
            <input type="text" name="judul_buku" value="<?php echo $meledak['judul_buku'];?>">
            <br>
            <label>Pengarang</label>
            <br>
            <input type="text" name="pengarang" value="<?php echo $meledak['pengarang'];?>">
            <br>
            <label>Tahun Terbit</label>
            <br>
            <input type="date" name="thn_terbit" value="<?php echo $meledak['thn_terbit'];?>">
            <br>
            <label>Penerbit</label>
            <br>
            <input type="text" name="penerbit" value="<?php echo $meledak['penerbit'];?>">
            <br>
            <label>Harga</label>
            <br>
            <input type="number" name="harga" value="<?php echo $meledak['harga'];?>">
            <br>
            <label>Stok</label>
            <br>
            <input type="number" name="qty" value="<?php echo $meledak['qty'];?>">
            <br>
            <input type="submit" value="submit">
            <input type="reset" value="cancel">
            <button><a href="../logout.php">Logout</a></button>
        </form>
        <?php
        }
        ?>
    </div>
</body>

</html>
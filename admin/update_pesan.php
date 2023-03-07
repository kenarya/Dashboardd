<html>

<head>
    <title>Update Status Pemesanan</title>
    <link rel="stylesheet" href="style2.css">
</head>

<body>
    <div class="container">
        <h1>Memproses Pengiriman</h1>

        <?php
        include "../koneksi.php";
        $id = $_GET['id'];
        $data = mysqli_query($koneksi, "select * from orders where id = '$id'");
        // data yang sudah dicocokan dengan id_buku di ledakkan dengan fetch array
        while($meledak = mysqli_fetch_array($data)){
        ?>

        <form action="proses_pesan.php" method="post">
            <input type="hidden" name="id" value="<?php echo $meledak['id'];?>">
            <label>Status</label>
            <br>
            <input type="text" name="status" value="<?php echo $meledak['status'];?>">
            <br>
            <input type="submit" value="submit">
            <input type="reset" value="cancel">
            <button><a href="logout_admin.php">Logout</a></button>
        </form>
        <?php
        }
        ?>
    </div>
</body>

</html>
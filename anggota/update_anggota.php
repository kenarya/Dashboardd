<html>

<head>
    <title>Update Anggota</title>
    <link rel="stylesheet" href="style2.css">
</head>

<body>
    <div class="container">
        <h1>Customize Profile</h1>

        <?php
        include "../koneksi.php";
        $id_anggota = $_GET['id_anggota'];
        $data = mysqli_query($koneksi, "select * from anggota where id_anggota = '$id_anggota'");
        // data yang sudah dicocokan dengan id_anggota di ledakkan dengan fetch array
        while($meledak = mysqli_fetch_array($data)){
        ?>

        <form action="proses_update.php" method="post">
            <input type="hidden" name="id_anggota" value="<?php echo $meledak['id_anggota'];?>">
            <label>Nama</label>
            <br>
            <input type="text" name="nama" value="<?php echo $meledak['nama'];?>">
            <br>
            <label>No Telpon</label>
            <br>
            <input type="number" name="no_telp" value="<?php echo $meledak['no_telp'];?>">
            <br>
            <label>Alamat</label>
            <br>
            <input type="text" name="alamat" value="<?php echo $meledak['alamat'];?>">
            <br>
            <label>Password</label>
            <br>
            <input type="text" name="password" value="<?php echo $meledak['password'];?>" disabled>
            <br>
            <input type="submit" value="submit">
            <input type="reset" value="cancel">
            <button><a href="logout_anggota.php">Logout</a></button>
        </form>
        <?php
        }
        ?>
    </div>
</body>

</html>
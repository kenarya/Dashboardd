<html>

<head>
    <title>Update Data Anggota</title>
    <link rel="stylesheet" href="style2.css">
</head>

<body>
    <div class="container">
        <h1>Merubah Data Anggota</h1>

        <?php
        include "../koneksi.php";
        $id_anggota = $_GET['id_anggota'];
        $data = mysqli_query($koneksi, "select * from anggota where id_anggota = '$id_anggota'");
        // data yang sudah dicocokan dengan id_buku di ledakkan dengan fetch array
        while($meledak = mysqli_fetch_array($data)){
        ?>

        <form action="proses_update_anggota.php" method="post">
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
            <label>Email</label>
            <br>
            <input type="text" name="email" value="<?php echo $meledak['email'];?>">
            <br>
            <label>Password</label>
            <br>
            <input type="text" name="password" value="<?php echo $meledak['password'];?>">
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
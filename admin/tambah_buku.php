<html>

<head>
    <title>Tambah Data Buku</title>
    <link rel="stylesheet" href="style2.css">
</head>


<body>
    <div class="container">
        <h1>Tambah Data Buku</h1>
        <form action="proses_tambah_buku.php" method="post">
            <label>ID Katalog</label>
            <br>
            <input type="number" name="id_katalog">
            <br>
            <label>Judul Buku</label>
            <br>
            <input type="text" name="judul_buku">
            <br>
            <label>Pengarang</label>
            <br>
            <input type="text" name="pengarang">
            <br>
            <label>Tahun Terbit</label>
            <br>
            <input type="date" name="thn_terbit">
            <br>
            <label>Penerbit</label>
            <br>
            <input type="text" name="penerbit">
            <br>
            <label>Harga</label>
            <br>
            <input type="number" name="harga">
            <br>
            <label>Stok</label>
            <br>
            <input type="number" name="qty">
            <br>
            <input type="submit" value="submit">
            <input type="reset" value="cancel">
            <button><a href="logout_admin.php">Logout</a></button>
        </form>
    </div>
</body>

</html>
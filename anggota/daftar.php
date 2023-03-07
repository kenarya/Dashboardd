<html>

<head>
    <title>Tambah Data Anggota</title>
    <link rel="stylesheet" href="style2.css">
</head>

<body>
    <div class="container">
        <h1>Tambah Data Anggota</h1>
        <form action="proses_daftar.php" method="post">           
            <label>Nama</label>
            <br>
            <input type="text" name="nama">
            <br>
            <label>No Telpon</label>
            <br>
            <input type="number" name="no_telp">
            <br>
            <label>Alamat</label>
            <br>
            <input type="text" name="alamat">
            <br>
            <label>Email</label>
            <br>
            <input type="email" name="email">
            <br>
            <label>Password</label>
            <br>
            <input type="text" name="password">
            <br>
            <input type="submit" value="submit">
            <input type="reset" value="cancel">
            <tr> 
                <td>
                <h4>Sudah Buat Akun ?<a href="login_anggota.php">Login</a></button></h4> 
                </td>
            </tr> 
        </form>
    </div>
</body>

</html>
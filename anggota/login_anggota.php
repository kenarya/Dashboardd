<html>
    <head>
        <title>Login User</title>
    </head>
    <body>
        <h1>Login Aplikasi</h1>
        <h3>Anggota Access</h3>
        <form action="proses_anggota.php" method="post">
            <table>
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td><input type="email" name="email" id="email"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td>:</td>
                    <td><input type="password" name="password" id="password"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" value="Login"></td>
                </tr>
                <h4>Admin Klik <a href="../admin/login_admin.php">Disini</a></h4>
            </table>
            <h4>Belum Mempunyai Akun ?<a href="daftar.php">Daftar Disini</a></h4>
        </form>
    </body>
</html>
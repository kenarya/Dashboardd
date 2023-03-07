<html>
    <head>
        <title>Login Admin</title>
    </head>
    <body>
        <h1>Login Aplikasi</h1>
        <h3>Admin Access</h3>
        <form action="proses_admin.php" method="post">
            <table>
                <tr>
                    <td>Username</td>
                    <td>:</td>
                    <td><input type="text" name="admin" id="admin"></td>
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
                <h4>Anggota Klik <a href="../anggota/login_anggota.php">Disini</a></h4>
            </table>
        </form>
    </body>
</html>
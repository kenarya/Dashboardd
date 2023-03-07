<html>
    <head>
        <title>User Page</title>
    </head>
    <body>
        <h2>Halaman Anggota</h2>

        <!-- cek halaman apakah sudah login atau belum -->
        <?php
            session_start();
            if($_SESSION['status']!='login'){
                header("location:login_anggota.php?pesan=belum_login");
            }
            ?>
            
        <!-- END -->
        
        <h3>Welcome <?php 
        include '../koneksi.php';
        $email = $_SESSION['email'];
        $anggota = mysqli_query($koneksi, "select * from anggota where email = '$email'");
        foreach($anggota as $nama){
            echo $nama['nama'];
        }
        ?> Anda Telah login</h3>

        <button><a href="update_anggota.php?id_anggota=<?php echo $nama['id_anggota'];?>">Edit Profile</a></button>
        <button><a href="pesan.php">Pesanan Anda</a></button>
        <hr>
        <h3>Stok Buku Yang Tersedia :</h3>
        <div class="databuku">
        <table border="1">
            <tr>
            <th>ID Buku</th>
            <th>ID Katalog</th>
            <th>Judul</th>
            <th>Pengarang</th>
            <th>Tahun terbit</th>
            <th>Penerbit</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Aksi</th>
        </tr>
        <!-- menampilkan data buku -->
        <?php
        include '../koneksi.php';
        $buku = mysqli_query($koneksi, "SELECT * FROM buku");
        
        foreach ($buku as $row){
            echo "<tr>";
            echo "<td>".$id = $row['id_buku']."</td>";
            echo "<td>".$katalog = $row['id_katalog']."</td>";
            echo "<td>".$judul = $row['judul_buku']."</td>";
            echo "<td>".$pengarang = $row['pengarang']."</td>";
            echo "<td>".$thn_terbit = $row['thn_terbit']."</td>";
            echo "<td>".$penerbit = $row['penerbit']."</td>";
            echo "<td>"."Rp.".number_format($harga = $row['harga'])."</td>";
            echo "<td>".$qty = $row['qty']."</td>";
        ?>
        <td><a href="keranjang.php?id_buku=<?php echo $row['id_buku'];?> & action=add">Pesan</a></td>
        <?php
            echo "</tr>";
        }
        ?>
        </table>
        <br>
        <a href="logout_anggota.php">Logout</a>  
    </body>
</html>
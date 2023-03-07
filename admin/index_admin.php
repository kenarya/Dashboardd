<html>
    <head>
        <title>Admin Page</title>
    </head>
    <body>
        <h2>Halaman Adminn</h2>        
        <!-- cek halaman apakah sudah login atau belum -->
        
        <?php
        session_start();
        if($_SESSION['status']!='login'){
            header('location:login_admin.php?pesan=belum_login');
        }

        include '../koneksi.php';
        $buku = mysqli_query($koneksi, "SELECT * FROM buku");
        $anggota = mysqli_query($koneksi, "SELECT * FROM anggota");

        $jumlah_anggota = mysqli_num_rows($anggota);
        $jumlah_buku = mysqli_num_rows($buku);

        ?>
        <!-- end -->
        <h3>Welcome <?php echo $_SESSION['admin']?> Anda Telah Login </h3>
        <div class="databuku">
            <button onclick = "document.location = 'pesan.php'">Pesanan Anggota</button>
            <hr>
            <!-- data buku -->
            <h1>Data Buku</h1>
            <h3>Total Buku Tersedia : <?php echo $jumlah_buku; ?></h3>

            <button onclick = "document.location = 'tambah_buku.php'">Tambah Buku</button>
            <button onclick = "document.location = 'cetak_buku.php'">Cetak</button>
            <br>
            <br>
            <form action="index_admin.php" method="get">
            <label>Search</label>
            <input type="text" name="cari" placeholder="Cari Buku Disini">
            <input type="submit" value="Cari">
            </form>

            <?php
        if (isset($_GET['cari'])){
            $cari = $_GET['cari'];
        }
        ?>
            <table border="1">
                <tr>
                    <th>ID Buku</th>
                    <th>ID Katalog</th>
                    <th>Judul</th>
                    <th>Pengarang</th>
                    <th>Tahun Terbit</th>
                    <th>Penerbit</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Aksi</th>
                </tr>

        <?php
        include '../koneksi.php';
        if (isset($_GET['cari'])){
            $cari = $_GET['cari'];
            $data = mysqli_query($koneksi, "select * from buku where judul_buku like '%" . $cari . "%' ");
        }else{
            $data = mysqli_query($koneksi, "select * from buku");
        }
        while ($row = mysqli_fetch_array($data)){
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
            <td>
                <button onclick = "document.location = 'update_buku.php?id_buku=<?php echo $row['id_buku'] ?>'">Edit</button>
                <button onclick = "document.location = 'proses_hapus_buku.php?id_buku=<?php echo $row['id_buku'] ?>'">Hapus</button>
            </td>
            <?php
        echo "</tr>";
    }
    ?>
    </table>
    <h3>Total Harga Semua Buku :
    <?php
     $db = mysqli_query($koneksi, "SELECT * FROM buku");
     while($r = mysqli_fetch_array($db)){
        $totalharga[] = $r['harga'];
     }
     $total = array_sum($totalharga);
     echo "Rp. ".number_format($total)."";
    ?>
    </h3>
    
    <!-- Data Anggota -->
    <hr>
    <h1>Data Anggota</h1>
            <h3>Total Anggota Tersedia : <?php echo $jumlah_anggota; ?> </h3>
            <button onclick = "document.location = 'tambah_anggota.php'">Tambah Anggota</button>            
            <button onclick = "document.location = 'cetak_anggota.php'">Cetak</button>
            <br>
            <br>

            <form action="index_admin.php" method="get">
            <label>Search</label>
            <input type="text" name="cari2" placeholder="Cari Anggota Disini">
            <input type="submit" value="Cari">
            </form>

            <?php
            if (isset($_GET['cari2'])){
                $cari2 = $_GET['cari2'];
            }
            ?>
            <table border="1">
                <tr>
                    <th>ID Anggota</th>
                    <th>Nama</th>
                    <th>No Telpon</th>
                    <th>Alamat</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Aksi</th>
                </tr>
                <?php
        include '../koneksi.php';
        if (isset($_GET['cari2'])){
            $cari2 = $_GET['cari2'];
            $data2 = mysqli_query($koneksi, "select * from anggota where nama like '%" . $cari2 . "%' ");
        }else{
            $data2 = mysqli_query($koneksi, "select * from anggota");
        }
        while ($rou = mysqli_fetch_array($data2)){
            echo "<tr>";
            echo "<td>".$id = $rou['id_anggota']."</td>";
            echo "<td>".$nama = $rou['nama']."</td>";
            echo "<td>".$no_telp = $rou['no_telp']."</td>";
            echo "<td>".$alamat = $rou['alamat']."</td>";
            echo "<td>".$email = $rou['email']."</td>";
            echo "<td>".$password = $rou['password']."</td>";
            ?>
            <td>
                <button onclick = "document.location = 'update_anggota.php?id_anggota=<?php echo $rou['id_anggota'] ?>'">Edit</button>
                <button onclick = "document.location = 'proses_hapus_anggota.php?id_anggota=<?php echo $rou['id_anggota'] ?>'">Hapus</button>
            </td>
            <?php
        echo "</tr>";
    }
    ?>
    </table>
    <br>
    <button onclick = "document.location = 'logout_admin.php'">Logout</button>  
</body>
</html>
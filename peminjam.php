<html>

<head>
    <title>Peminjaman Sepeda Kota Lama</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <h2 align='center' line-height='50%'>Data Peminjam</h2>
    <table width='100%' border=1 class='table'>
        <tr>
            <th>ID PEMINJAM</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Nomor Telepon</th>
            <th>Waktu Pinjam</th>
            <th colspan="2">Aksi</th>
        </tr>

        <?php
        include_once("koneksi.php");
        $result = mysqli_query($mysqli, "SELECT * FROM peminjam ORDER BY id ASC");
        while ($user_data = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td align='center'>" . $user_data['id'] . "</td>";
            echo "<td>" . $user_data['nama'] . "</td>";
            echo "<td>" . $user_data['alamat'] . "</td>";
            echo "<td>" . $user_data['nomortelepon'] . "</td>";
            echo "<td>" . $user_data['waktu_pinjam'] . "</td>";
            echo "<td align='center'><a href='edit_user.php?id=$user_data[id]'>Edit</a></td>";
            echo "<td align='center'><a href='delete_user.php?id=$user_data[id]'>Delete</a></td></tr>";
        }
        ?>
    </table>
    <br>
    <button><a href="add_user.php">Tambah data Peminjam/Peminjam</a></button>
    <button><a href="sepeda.php">Lihat Sepeda</a></button>
    <button><a href="souvenir.php">Souvenir</a></button>
    <button><a href="join.php">Rincian Peminjam</a></button>
    <button><a href="cari.php">Cari</a></button>
    <button><a href="index.php">Logout</a></button>
</body>

</html>

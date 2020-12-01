<html>

<head>
    <title>Daftar Sepeda</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <h2 align='center' line-height='50%'>Daftar Peminjaman Sepeda</h2>
    <table width='100%' border=1 class='table'>
        <tr>
            <th>ID Peminjam</th>
            <th>ID Sepeda</th>
            <th>Warna Sepeda</th>
            <th>Jumlah</th>
            <th colspan="2">Aksi</th>
        </tr>

        <?php
        include_once("koneksi.php");
        $result = mysqli_query($mysqli, "SELECT * FROM sepeda ORDER BY id ASC");
        while ($user_data = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td align='center'>" . $user_data['id_peminjam'] . "</td>";
            echo "<td align='center'>" . $user_data['id_sepeda'] . "</td>";
            echo "<td align='center'>" . $user_data['warna_sepeda'] . "</td>";
            echo "<td align='center'>" . $user_data['jumlah'] . "</td>";
            echo "<td align='center'><a href='edit_sepeda.php?id=$user_data[id]'>Edit</a></td>";
            echo "<td align='center'><a href='delete_sepeda.php?id=$user_data[id]'>Delete</a></td></tr>";
        }
        ?>
    </table>
    <br>

    <button><a href="peminjam.php">Kembali</a></button>
    <button><a href="add_sepeda.php">Tambah Data Peminjaman Sepeda</a></button>
    <button><a href="join.php">Rincian Peminjam</a></button>
</body>

</html>

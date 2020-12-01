<html>

<head>
    <title>Daftar Souvenir</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <h2 align='center' line-height='50%'>Souvenir</h2>
    <table width='100%' border=1 class='table'>
        <tr>
            <th>id Peminjam</th>
            <th>id souvenir</th>
            <th>Nama Souvenir</th>
            <th>Harga Souvenir</th>
            <th>Jumlah Dibeli</th>
            <th colspan="2">Aksi</th>
        </tr>

        <?php
        include_once("koneksi.php");
        $result = mysqli_query($mysqli, "SELECT * FROM souvenir ORDER BY id ASC");
        while ($user_data = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td align='center'>" . $user_data["id_peminjam"] . "</td>";
            echo "<td align='center'>" . $user_data["idsouvenir"] . "</td>";
            echo "<td align='center'>" . $user_data['namasouvenir'] . "</td>";
            echo "<td align='center'>" . $user_data['hargasouvenir'] . "</td>";
            echo "<td align='center'>" . $user_data['jumlahsouvenir'] . "</td>";
            echo "<td align='center'><a href='edit_souvenir.php?id=$user_data[id]'>Edit</a></td>";
            echo "<td align='center'><a href='delete_souvenir.php?id=$user_data[id]'>Delete</a></td></tr>";

        }
        ?>
    </table>
    <br>

    <button><a href="peminjam.php">Kembali</a></button>
    <button><a href="add_souvenir.php">Tambah Souvenir</a></button>
    <button><a href="join2.php">Rincian Souvenir</a></button>
</body>

</html>

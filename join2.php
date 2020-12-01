<html>

<head>
    <title>Souvenir</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>    
    </table>
    <h2 allign='center' line-height='50%'>RINCIAN PEMBELIAN SOUVENIR</h2>
    <table width='100%' border=1 class='table'>
        <tr>
            <th>NAMA</th>
            <th>ALAMAT</th>
            <th>NAMA SOUVENIR</th>
            <th>HARGA SOUVENIR</th>
            <th>JUMLAH SOUVENIR</th>
        </tr>
        <?php
        include_once("koneksi.php");
        $result = mysqli_query($mysqli, "SELECT A.nama, A.alamat, B.namasouvenir, B.hargasouvenir, B.jumlahsouvenir FROM peminjam A INNER JOIN souvenir B
     ON A.id = B.id_peminjam ");
        while ($user_data = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $user_data['nama'] . "</td>";
            echo "<td>" . $user_data['alamat'] . "</td>";
            echo "<td>" . $user_data['namasouvenir'] . "</td>";
            echo "<td>" . $user_data['hargasouvenir'];
            echo "<td>" . $user_data['jumlahsouvenir'] . "</td>";
        }
        ?>
    </table>
    <br>
    <button><a weight='50px' href="souvenir.php">Kembali</a></button>

</body>

</html>

<html>

<head>
    <title>Rincian Peminjaman</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>    
    </table>
    <h2 allign='center' line-height='50%'>RINCIAN PEMINJAM SEPEDA KOTA LAMA</h2>
    <table width='100%' border=1 class='table'>
        <tr>
            <th>NAMA</th>
            <th>ALAMAT</th>
            <th>ID SEPEDA</th>
            <th>WARNA SEPEDA</th>
            <th>WAKTU PINJAM</th>
            <th>JUMLAH</th>
        </tr>
        <?php
        include_once("koneksi.php");
        $result = mysqli_query($mysqli, "SELECT A.nama, A.alamat, A.id, A.waktu_pinjam, B.warna_sepeda, B.jumlah FROM peminjam A INNER JOIN sepeda B
     ON A.id = B.id_peminjam ");
        while ($user_data = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $user_data['nama'] . "</td>";
            echo "<td>" . $user_data['alamat'] . "</td>";
            echo "<td>" . $user_data['id'];
            echo "<td>" . $user_data['warna_sepeda'] . "</td>";
            echo "<td>" . $user_data['waktu_pinjam'];
            echo "<td>" . $user_data['jumlah'] . "</td>";
        }
        ?>
    </table>
    <br>
    <button><a weight='50px' href="peminjam.php">Kembali</a></button>

</body>

</html>

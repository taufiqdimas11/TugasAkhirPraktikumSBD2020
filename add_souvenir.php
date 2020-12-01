<html>

<head>
    <title>Tambah Souvenir</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <h2 align='center' line-height='50%'>Tambah Data Pembelian Souvenir</h2>

    <div class="kotak">
        <form action="add_souvenir.php" method="post" class="form_login">
            <label>ID Peminjam</label>
            <input type="text" name="id_peminjam" class="form_login">
            <label>ID Souvenir</label>
            <input type="text" name="idsouvenir" class="form_login">
            <label>Nama Souvenir</label>
            <input type="text" name="namasouvenir" class="form_login">
            <label>Harga Souvenir</label>
            <input type="text" name="hargasouvenir" class="form_login">
            <label>Jumlah Dibeli</label>
            <input type="text" name="jumlahsouvenir" class="form_login">
            <input type="submit" name="Submit" class="submit" value="Simpan"></td>

        </form>

    </div>

    <?php

    // Check If form submitted, insert form data into users table.
    if (isset($_POST['Submit'])) {
        $id_peminjam = $_POST['id_peminjam'];
        $idsouvenir = $_POST['idsouvenir'];
        $namasouvenir = $_POST['namasouvenir'];
        $hargasouvenir = $_POST['hargasouvenir'];
        $jumlahsouvenir = $_POST['jumlahsouvenir'];

        // include database connection file
        include_once("koneksi.php");

        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO souvenir (id_peminjam, idsouvenir, namasouvenir,hargasouvenir, jumlahsouvenir ) VALUES('$id_peminjam','$idsouvenir', '$namasouvenir', '$hargasouvenir' , '$jumlahsouvenir')");

        // Show message when user added
        header("Location: souvenir.php");
    }
    ?>
</body>

</html>

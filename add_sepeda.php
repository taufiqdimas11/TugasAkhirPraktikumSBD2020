<html>

<head>
    <title>Tambah Data</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <h2 align='center' line-height='50%'>Tambah Data Peminjaman Sepeda</h2>

    <div class="kotak">
        <form action="add_sepeda.php" method="post" class="form_login">
            <label>ID SEPEDA</label>
            <input type="text" name="id" class="form_login">
            <label>ID PEMINJAM</label>
            <input type="text" name="id_peminjam" class="form_login">
            <label>WARNA SEPEDA</label>
            <input type="text" name="warna_sepeda" class="form_login">
            <label>JUMLAH</label>
            <input type="text" name="jumlah" class="form_login">
            <input type="submit" name="Submit" class="submit" value="Simpan"></td>

        </form>

    </div>

    <?php

    // Check If form submitted, insert form data into users table.
    if (isset($_POST['Submit'])) {
        $id = $_POST['id'];
        $id_peminjam = $_POST['id_peminjam'];
        $warna_sepeda = $_POST['warna_sepeda'];
        $jumlah = $_POST['jumlah'];

        // include database connection file
        include_once("koneksi.php");

        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO sepeda (id, id_peminjam, warna_sepeda, jumlah ) VALUES('$id','$id_peminjam', '$warna_sepeda','$jumlah')");

        // Show message when user added
        header("Location: sepeda.php");
    }
    ?>
</body>

</html>

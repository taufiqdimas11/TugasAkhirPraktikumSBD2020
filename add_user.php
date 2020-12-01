<html>

<head>
    <title>Tugas 1 Praktikum SBD</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <h2 align='center' line-height='50%'>Tambah Data Peminjam</h2>

    <div class="kotak">
        <form action="add_user.php" method="post" class="form_login">
            <label>ID PEMINJAM</label>
            <input type="text" name="id" class="form_login">
            <label>NAMA</label>
            <input type="text" name="nama" class="form_login">
            <label>ALAMAT</label>
            <input type="text" name="alamat" class="form_login">
            <label>NOMOR TELEPON</label>
            <input type="text" name="nomortelepon" class="form_login">
            <label>WAKTU PINJAM</label>
            <input type="text" name="waktu_pinjam" class="form_login">

            <input type="submit" name="Submit" class="submit" value="Simpan"></td>

        </form>

    </div>

    <?php

    // Check If form submitted, insert form data into users table.
    if (isset($_POST['Submit'])) {
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $nomortelepon = $_POST['nomortelepon'];
        $waktu_pinjam = $_POST['waktu_pinjam'];

        // include database connection file
        include_once("koneksi.php");

        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO peminjam(id, nama, alamat,nomortelepon, waktu_pinjam) VALUES('$id','$nama', '$alamat','$nomortelepon', '$waktu_pinjam')");

        // Show message when user added
        echo "User added successfully. <a href='peminjam.php'>View Users</a>";
        header("Location: peminjam.php");
    }
    ?>
    <button><a weight='50px' href="peminjam.php">Kembali</a></button>
</body>

</html>

<?php
// include database connection file
include_once("koneksi.php");

// Check if form is submitted for user update, then redirect to homepage after update
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $nomortelepon = $_POST['nomortelepon'];
    $waktu_pinjam = $_POST['waktu_pinjam'];


    // update user data
    $result = mysqli_query($mysqli, "UPDATE peminjam SET id='$id',nama='$nama',alamat='$alamat',nomortelepon = '$nomortelepon', waktu_pinjam='$waktu_pinjam' WHERE id=$id");

    // Redirect to homepage to display updated user in list
    header("Location: peminjam.php");
}
?>
<?php

$id = $_GET['id'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM peminjam WHERE id=$id");

while ($user_data = mysqli_fetch_array($result)) {
    $id = $user_data['id'];
    $nama = $user_data['nama'];
    $alamat = $user_data['alamat'];
    $nomortelepon = $user_data['nomortelepon'];
    $waktu_pinjam = $user_data['waktu_pinjam'];
}
?>
<html>

<head>
    <title>Edit User</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <h2 align='center' line-height='50%'>Edit Data Peminjam</h2>

    <div class="kotak">
        <form action="edit_user.php" method="post" class="form_login">
            <input type="hidden" name="id" class="form_login" value=<?php echo $id; ?>>
            <label>Nama</label>
            <input type="text" name="nama" class="form_login" value=<?php echo $nama; ?>>
            <label>Alamat</label>
            <input type="text" name="alamat" class="form_login" value=<?php echo $alamat; ?>>
            <label>Nomor Telepon</label>
            <input type="text" name="nomortelepon" class="form_login" value=<?php echo $nomortelepon; ?>>
            <label>Waktu Pinjam</label>
            <input type="text" name="waktu_pinjam" class="form_login" value=<?php echo $waktu_pinjam; ?>>

            <input type="submit" name="update" class="submit" value="update">



        </form>
    </div>
</body>

</html>

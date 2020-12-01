<?php
// include database connection file
include_once("koneksi.php");

// Check if form is submitted for user update, then redirect to homepage after update
if (isset($_POST['update_sepeda'])) {
    $id = $_POST['id'];
    $id_peminjam = $_POST['id_peminjam'];
    $id_sepeda = $_POST['id_sepeda'];
    $warna_sepeda = $_POST['warna_sepeda'];
    $jumlah = $_POST['jumlah'];

    // update user data
    $result = mysqli_query($mysqli, "UPDATE sepeda SET id='$id',id_peminjam='$id_peminjam',id_sepeda = '$id_sepeda',warna_sepeda='$warna_sepeda', jumlah='$jumlah' WHERE id=$id");

    // Redirect to homepage to display updated user in list
    header("Location: sepeda.php");
}
?>
<?php

$id = $_GET['id'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM sepeda WHERE id=$id");

while ($user_data = mysqli_fetch_array($result)) {
    $id = $user_data['id'];
    $id_peminjam = $user_data['id_peminjam'];
    $id_sepeda = $user_data['id_sepeda'];
    $warna_sepeda = $user_data['warna_sepeda'];
    $jumlah = $user_data['jumlah'];
}
?>
<html>

<head>
    <title>Edit Data</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <h2 align='center' line-height='50%'>Edit Data Peminjaman Sepeda</h2>

    <div class="kotak">
        <form action="edit_sepeda.php" method="post" class="form_login">
            <input type="hidden" name="id" class="form_login" value=<?php echo $id; ?>>
            <label>id peminjam</label>
            <input type="text" name="id_peminjam" class="form_login" value=<?php echo $id; ?>>
            <label>id sepeda</label>
            <input type="text" name="id_sepeda" class="form_login" value=<?php echo $id_sepeda; ?>>
            <label>Warna Sepeda</label>
            <input type="text" name="warna_sepeda" class="form_login" value=<?php echo $warna_sepeda; ?>>
            <label>Jumlah</label>
            <input type="text" name="jumlah" class="form_login" value=<?php echo $jumlah; ?>>
            <input type="submit" name="update_sepeda" class="submit" value="update sepeda">


        </form>
    </div>
</body>

</html>

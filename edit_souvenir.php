<?php
// include database connection file
include_once("koneksi.php");

// Check if form is submitted for user update, then redirect to homepage after update
if (isset($_POST['update_souvenir'])) {
    $idsouvenir = $_POST['idsouvenir'];
    $namasouvenir = $_POST['namasouvenir'];
    $hargasouvenir = $_POST['hargasouvenir'];
    $jumlahsouvenir = $_POST['jumlahsouvenir'];

    // update user data
    $result = mysqli_query($mysqli, "UPDATE souvenir SET idsouvenir='$idsouvenir',namasouvenir='$namasouvenir',hargasouvenir='$hargasouvenir', jumlahsouvenir='$jumlahsouvenir' WHERE id=$id");

    // Redirect to homepage to display updated user in list
    header("Location: souvenir.php");
}
?>
<?php

$id = $_GET['id'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM souvenir WHERE id=$id");

while ($user_data = mysqli_fetch_array($result)) {
    $idsouvenir = $user_data['idsouvenir'];
    $namasouvenir = $user_data['namasouvenir'];
    $hargasouvenir = $user_data['hargasouvenir'];
    $jumlahsouvenir = $user_data['jumlahsouvenir'];
}
?>
<html>

<head>
    <title>Edit Data</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <h2 align='center' line-height='50%'>Edit Souvenir</h2>

    <div class="kotak">
        <form action="edit_souvenir.php" method="post" class="form_login">
            <input type="hidden" name="id" class="form_login" value=<?php echo $id; ?>>
            <label>id souvenir</label>
            <input type="text" name="idsouvenir" class="form_login" value=<?php echo $idsouvenir; ?>>
            <label>Nama Souvenir</label>
            <input type="text" name="namasouvenir" class="form_login" value=<?php echo $namasouvenir; ?>>
            <label>Harga</label>
            <input type="text" name="hargasouvenir" class="form_login" value=<?php echo $hargasouvenir; ?>>
            <label>Jumlah</label>
            <input type="text" name="jumlahsouvenir" class="form_login" value=<?php echo $jumlahsouvenir; ?>>
            <input type="submit" name="update_souvenir" class="submit" value="update souvenir">


        </form>
    </div>
</body>

</html>

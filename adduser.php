<html>

<head>
    <title>Sign Up Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h2 align='center' line-height='50%'>Daftar Menjadi Anggota!</h2>

    <div class="kotak">
        <form action="adduser.php" method="post" class="form_login">
            <label>username</label>
            <input type="text" name="username" class="form_login">
            <label>password</label>
            <input type="text" name="password" class="form_login">
            <input type="submit" name="Submit" class="submit" value="Simpan"></td>
        </form>
    </div>
    <?php
    // Check If form submitted, insert form data into users table.
    if (isset($_POST['Submit'])) {
        $username = $_POST['username'];
        $password = md5($_POST['password']);

        // include database connection file
        include_once("koneksi.php");

        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO admin(username, password) VALUES('$username','$password')");

        // Show message when user added
        //echo "User added successfully. <a href='index.php'>View Users</a>";
        header("Location: index.php");
    }
    ?>
    <button><a weight='50px' href="index.php">Kembali</a></button>
</body>

</html>
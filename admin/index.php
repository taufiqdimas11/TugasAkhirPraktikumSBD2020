<!DOCTYPE html>
<html>
<head>
    <title>BikeShop Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h2>Halaman Admin</h2>
	
	<br/>
 
	<!-- cek apakah sudah login -->
	<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:../indexx.php?pesan=belum_login");
	}
	?>
 
	<h4>Selamat datang, <?php echo $_SESSION['username']; ?>! anda telah login.</h4>
 
	<br/>
	<br/>
 
	<a href="logout.php">LOGOUT</a>
 
 
</body>
</html>
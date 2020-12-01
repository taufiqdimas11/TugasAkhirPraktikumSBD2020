<!DOCTYPE html>
<html>
<head>
    <title>BikeShop Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<center><h2>Login to your account</h2><center>
	<br/>
	<!-- cek pesan notifikasi -->
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! username dan password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman admin";
		}
	}
	?>
	<br/>
	<br/>
	<form method="post" action="cek_login.php">
		<table>
			<tr>
				<td>Username</td>
				<td>:</td>
				<td><input type="text" name="username" placeholder="Masukkan username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="password" name="password" placeholder="Masukkan password"></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" value="LOGIN"></td>
			</tr>
		</table>			
    </form>
    <br/>
    <br/>
	<br/>
	<br/>
	<form method="post" action="adduser.php">
	<table>
	
	
	<table>
	<td><input type="submit" value="Add User"></td>
</body>

</html>
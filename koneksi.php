<?php 
$mysqli= mysqli_connect("localhost","root","","BikeShop");

 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>
<?php 
require_once'koneksi.php';
?>
    <link rel="stylesheet" type="text/css" href="style.css">
<form method="post">
<input type="text" name="nt" placeholder="cari ...">
<input type="submit" name="submit" value="cari">
<form>
<br/>
<br/>

<table border=1>
<tr> <td>NAMA</td>
<td>Nomor Telepon</td> </tr>
<?php
if(!ISSET($_POST['submit'])){

$sql = "SELECT * FROM peminjam";
$query = mysqli_query($mysqli, $sql);
while ($row = mysqli_fetch_array($query)){

?>
<tr>
 <td><?php echo $row['nama']; ?></td>
 <td><?php echo $row['nomortelepon']; ?></td>
</tr>

<?php } } ?>

<?php if (ISSET($_POST['submit'])){
 $cari = $_POST['nt'];
 $query2 = "SELECT * FROM peminjam WHERE nama LIKE '%$cari%'";
 
 $sql = mysqli_query($mysqli, $query2);
 while ($r = mysqli_fetch_array($sql)){
  ?>
<tr>
 <td><?php echo $r['nama']; ?></td>
 <td><?php echo $r['nomortelepon']; ?></td>
</tr>  
 <?php }} ?>

</table>
<button><a weight='50px' href="peminjam.php">Kembali</a></button>
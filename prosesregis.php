<?php 
include 'config.php';
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$nohp = $_POST['nohp'];
$password = $_POST['password'];

$insert = mysqli_query($mysqli, "INSERT INTO `user`(`nama`, `alamat`, `email`, `no_hp`, `password`) VALUES ('$nama','$alamat','$email','$nohp','$password')");
if ($insert) {
	header("location:login.php");
}
 ?>
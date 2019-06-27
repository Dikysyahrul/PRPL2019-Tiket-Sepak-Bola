<?php 
//mengaktifkan session pada php
session_start();

//menghubungkan oho dengan koneksi database
include 'config.php';

$username = $_POST['username'];
$password = $_POST['password'];

//menyeleksi data yg akan dikirim dari form login
$login = mysql_query($mysqli, "SELECT * from user where nama='$username' and password='$password'");
//menghitung jumlah data yg duitemukan
$cek = mysql_num_rows($login);

//cek user & password
if ($cek>0) {
	$data = mysql_fetch_assoc($login);

	//cek jika user admin
	if($data['level'] = "admin"){
		//buat session login
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "admin";
		//alihkan ke halaman dasborde admnin
		header("location:index.php");
	}else{
		header("location:login.php?login=gagal");
	}
}

 ?>
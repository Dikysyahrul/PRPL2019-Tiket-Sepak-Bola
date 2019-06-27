<?php 
$nama = $_POST['nama'];
$email = $_POST['email'];
$jumlahtiket = $_POST['jumlah_tiket'];
$kode_pertandingan = $_POST['kode'];
$kelas = $_POST['kelas'];
$harga = $_POST['ekonomi'];
$angka = rand(0000,9999);
if ($kelas=="Vip") {
	$totalharga = (($harga+100000)*$jumlahtiket);
}else if($kelas == "Ekonomi"){
	$totalharga = $harga*$jumlahtiket;
}

include 'config.php';
$masuk = mysqli_query($mysqli, "INSERT INTO `pemesanan`(`nama`, `email`, `kode_pertandingan`, `idpemesanan`, `kelas`, `totalharga`) VALUES ('$nama','$email','$kode_pertandingan','$angka','$kelas','$totalharga')");
if ($masuk) {
	header("location:index.php?Pesan=$kode_pertandingan");
}
 ?>
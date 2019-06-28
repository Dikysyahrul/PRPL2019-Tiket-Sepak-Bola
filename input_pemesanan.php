<?php
include "koneksi.php";

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $klub_b = $_POST['klub_b'];
    $tanggal = $_POST['tanggal'];
    $stadion = $_POST['stadion'];
    $kelas = $_POST['kelas'];
    $total = $_POST['total'];
    $pembayaran = $_POST['pembayaran'];
    $liga = $_POST['liga'];

    // if($kelas == 'ekonomi'){
    //     echo "ekonomi";
    // }else if($kelas == 'vip'){
    //     echo "vip";
    // }else{
    //     echo "tidak terbaca".$kelas;
    // }

$hehe =  "INSERT INTO pemesanan(id,nama,klub_b,tanggal,stadion,kelas,total,pembayaran,liga) VALUES ('$id','$nama','$klub_b','$tanggal','$stadion','$kelas','$total','$pembayaran','$liga')";

if($koneksi -> query($hehe)){
    echo "berhasil";
}
else{
    echo "gagal".$koneksi -> error();
}
    header('Location: tampil.php');
?>
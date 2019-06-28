<?php

include("koneksi.php");

if(isset($_POST['simpan'])){

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $klub_b = $_POST['klub_b'];
    $tanggal = $_POST['tanggal'];
    $stadion = $_POST['stadion'];
    $kelas = $_POST['kelas'];
    $total = $_POST['total'];
    $pembayaran = $_POST['pembayaran'];
    $liga = $_POST['liga'];

    $sql = "UPDATE pemesanan SET nama='$nama', klub_b='$klub_b', tanggal='$tanggal', stadion='$stadion', kelas='$kelas', total='$total', pembayaran='$pembayaran', liga='$liga' WHERE id='$id' ";
    $query = mysqli_query($koneksi, $sql);

    if( $query ) {
        header('Location: halaman_admin.php');
    } else {
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

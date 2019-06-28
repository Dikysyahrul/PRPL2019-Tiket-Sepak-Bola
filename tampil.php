<?php include "header.php"; ?>
<link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">
           
 <form style="margin-top:200px">  
    <h2 align="center">SELAMAT ANDA SUDAH BERHASIL</h2></br> 
   <!--  <?php if ($_GET) { 
        $id = $_GET['Pesan'];
        ?>
    <div class="alert alert-primary" role="alert">
        Tiket Anda Berhasil Terdaftar, <b style="color: #000">KODE PEMESANAN : <?= $id ?></b>
    </div>
    <?php } ?> -->
    <table align="center" class="pure-table pure-table-bordered">
        <thead>
            <tr align="center">
                <th>ID</th> 
                <th>Nama</th>
                <th>Klub yang bertanding</th> 
                <th>Tanggal & Waktu</th>
                <th>Stadion</th>
                <th>Kelas</th>
                <th>Total Harga</th>
                <th>Mode Pemayaran</th>
                <th>Liga</th>

                <!-- <th>opsi</th> -->    
            </tr>
        </thead>
</form>
        <tbody>

<?php
    include "koneksi.php";
    
    $koneksi = mysqli_query($koneksi, "SELECT * FROM pemesanan order by id "); // Query untuk menampilkan semua
    
    $data = mysqli_fetch_array($koneksi);// Ambil semua data dari hasil eksekusi $sql
        echo "<tr>";
        echo "<td>".$data['id']."</td>";
        echo "<td>".$data['nama']."</td>";
        echo "<td>".$data['klub_b']."</td>";
        echo "<td>".$data['tanggal']."</td>";
        echo "<td>".$data['stadion']."</td>";
        echo "<td>".$data['kelas']."</td>";
        echo "<td>".$data['total']."</td>";
        echo "<td>".$data['pembayaran']."</td>";
        echo "<td>".$data['liga']."</td>";

        //echo "<td><a href='#?id=".$data['id']."'>Ubah</a></td>";
        //echo "<td><a href='#?id=".$data['id']."'>Hapus</a></td>";
        echo "</tr>";
    
    ?>
    </tbody>
    </table>
    </br>  
<!-- <a href="halaman_costumer.php" class="pure-button pure-button-primary">HOME</a> -->
<div hidden="true">
<?php include "footer.php";  ?>
</div>
</body>
</html>
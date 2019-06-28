<?php include 'koneksi.php';
$key = $_POST['cari'];
// echo "Keyword pencarian = $key";
echo "<br>";
$result =mysqli_query($koneksi, "SELECT * FROM pemesanan WHERE nama LIKE '%$key%' ");
	// $SQL = mysqli_query($connect,$QueryString); 
?>

<!DOCTYPE html>
<html>
<link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<head>
    <title>admin</title>
</head>
<body>
<form method="post" action="cari.php">
 <nav>
    <div class="nav-wrapper">
      <a href="halaman_admin.php" class="brand-logo">ADMIN</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
       
        <!-- <li class="input-field"><input type="text" name="cari" required></li> -->
        <li><a href="halaman_admin1.php">liga 1</a></li>&emsp;
        <li><a href="halaman_admin2.php">liga 2</a></li>
        <li><a href="halaman_admin3.php">piala presiden</a></li>
        <i class="small material-icons left" >search</i>
         <li class="input-field"><input type="text" name="cari" required>
         </li>
      </ul>
    </div>
  </nav>
</form></br></br>

    <table class="striped">
    <thead>
    <tr>
        <th>id</th>
        <th>nama</th>
        <th>klub yang bertanding</th>
        <th>tanggal & waktu</th>
        <th>stadion</th>
        <th>kelas</th>
        <th>total harga</th>
        <th>mode pembayaran</th>
        <th>liga</th>
        <th>opsi</th>
    </tr>
    </thead>
    <tbody>
 		<?php
		while($data = mysqli_fetch_array($result)) {
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

            echo "<td>";
            echo "<a href='edit_admin.php?id=".$data['id']."'>Edit</a> | ";
            echo "<a href='hapus.php?id=".$data['id']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
			}
		?>	
	</table>
	<!-- <a href="halaman_admin.php">kembali</a> -->
                    </div></div></div></div></section></body></html>
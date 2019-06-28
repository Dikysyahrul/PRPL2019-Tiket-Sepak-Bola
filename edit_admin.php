<?php include 'koneksi.php'; ?>
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
</form>
<?php
if( !isset($_GET['id']) ){
    header('Location: halamam_admin.php');
}

$id = $_GET['id'];

$sql = "SELECT * FROM pemesanan WHERE id='$id' ";
$query = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_assoc($query);

if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>admin</title>
</head>
<body>
    <header>
        <h3>edit data costumer</h3>
    </header>
<div class="container">
    <form action="proses-edit.php" method="POST">

        <fieldset>

            <input type="hidden" name="id" value="<?php echo $data['id'] ?>" />

        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="nama" value="<?php echo $data['nama'] ?>" />
        </p>
        <p>
            <label for="klub_b">klub: </label>
            <input readonly="true" type="text" name="klub_b" placeholder="klub" value="<?php echo $data['klub_b'] ?>" />
        </p>
        <p>
            <label for="tanggal">tanngal: </label>
            <input readonly="true" type="text" name="tanggal" placeholder="tanggal" value="<?php echo $data['tanggal'] ?>" />
        </p>
        <p>
            <label for="stadion">stadion: </label>
            <input readonly="true" type="text" name="stadion" placeholder="stadion" value="<?php echo $data['stadion'] ?>" />
        </p>
        <p>
            <label for="kelas">kelas: </label>
            <input readonly="true" type="text" name="kelas" placeholder="kelas" value="<?php echo $data['kelas'] ?>" />
        </p>
        <p>
            <label for="total">total: </label>
            <input readonly="true" type="text" name="total" placeholder="total" value="<?php echo $data['total'] ?>" / >
        </p>
        <!-- <p>
            <label for="pembayaran">pembayaran: </label>
            <input type="text" name="pembayaran" placeholder="pembayaran" value="<?php echo $data['pembayaran'] ?>" />
        </p> -->
        <p>
            <input type="hidden" name="liga" placeholder="liga" value="<?php echo $data['liga'] ?>" />
        </p>
        <p>
            <label for="pembayaran">mode pembayaran: </label>
            <input type="text" name="pembayaran" placeholder="pembayaran" value="<?php echo $data['pembayaran'] ?>">
            
            <select name="pembayaran">
                <option <?php echo ($pembayaran == 'bca') ? "selected": "" ?>>bca</option>
                <option <?php echo ($pembayaran == 'bri') ? "selected": "" ?>>bri</option>
                <option <?php echo ($pembayaran == 'mandiri') ? "selected": "" ?>>mandiri</option>
            </select>
        </p>
        <p>
            <input type="submit" value="Simpan" class="btn btn-primary" name="simpan" />
        </p>

        </fieldset>


    </form>
</div>
       </div>
   </div>
</div>
</div>
    </body>
</html>
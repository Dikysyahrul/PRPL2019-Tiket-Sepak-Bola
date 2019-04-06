<?php 
include_once ("config.php"); 
$result = mysqli_query($mysqli, "SELECT * FROM tiketbolaa ORDER BY id ");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- <style>
            body{
                background-image: url(background.png);
                vertical-align: middle;
                width: 100%;
            }
        </style> -->
    <title>form pencarian liga 2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <center><h2>Pertandingan Liga 2</h2></center>
    <div class="topnav">
  <a href="#">Home</a>
  <a href="tampil.php">jadwal liga 2</a>
  <a href="#">pembelian tiket</a>
  <a href="#">cara pembelian</a><br>

    
<form method="post" action="pencarian.php" align='right'>
		<input type="text" name="cari">
		<input type="submit" name="kirim" value="cari">
</form>
</div>
    <h3><center><table border="1">
 <thead>
     <tr>
       <th>id</th>
            <th>Tanggal Pertandingan</th>
            <th>Jam Pertandingan</th>
            <th>Club 1</th>
            <th>Club 2</th>
            <th>Stadion</th>
    </tr>
 </thead>
 <?php  
while($user_data = mysqli_fetch_array($result)) {         
 echo "<tr>";
 echo "<td>".$user_data['id']."</td>";
 echo "<td>".$user_data['tanggal_pertandingan']."</td>";
 echo "<td>".$user_data['jam']."</td>";
 echo "<td>".$user_data['club1']."</td>";
 echo "<td>".$user_data['club2']."</td>";
 echo "<td>".$user_data['stadion']."</td>";    
 echo "</tr>";
 //echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";        
}

?>
 </tbody>
</table>
</center>
</h3>
</body>
</html>
<center>tampil.php
Displaying pencarian.php.</center>
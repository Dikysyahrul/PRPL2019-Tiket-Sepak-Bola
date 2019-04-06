<?php 
include_once ("config.php");
$key = $_POST['cari'];
// echo "Keyword pencarian = $key";
echo "<br>";
$result =mysqli_query($mysqli, "SELECT * FROM tiketbolaa WHERE stadion LIKE '%$key%' or tanggal_pertandingan LIKE '%$key%' or jam LIKE '%$key%' or club1 LIKE '%$key%' or club2 LIKE '%$key%'");
	// $SQL = mysqli_query($connect,$QueryString); 
?>
<style>
            body{
                background-image: url(background.png);
                vertical-align: middle;
                width: 100%;
            }
        </style>
<h3><center>
<table border="1">
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
 <tbody>
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
</h3></center>
 </tbody>
</table>








<?php
include "config.php";

$query="SELECT * FROM course";
$result=$conn->query($query);

echo ("<b><center>Senarai Nama Kursus</center></b><br><br>");

if ($result->num_rows>0) {
 	
 	echo "<center><table border='1'>
 	<tr>
 	<th bgcolor='green'>KOD KURSUS</th>
 	<th bgcolor='green'>NAMA KURSUS</th>
 	<th bgcolor='green'>TRAINER</th>
 	<th bgcolor='green'>TARIKH</th>
 	<th bgcolor='green'>STATUS</th>
 	<th bgcolor='green'>DELETE</th>
 	<th bgcolor='green'>UPDATE</th>
 	</tr></center>";

 	while ($row = $result->fetch_assoc()) {
 		 echo "<tr>";
 		 echo "<td>" . $row['kod_kursus'] . "</td>";
 		 echo "<td>" . $row['nama_kursus'] . "</td>";
 		 echo "<td>" . $row['trainer'] . "</td>";
 		 echo "<td>" . $row['tarikh_kursus'] . "</td>";
 		 echo "<td>" . $row['status'] . "</td>";
 		 echo "<td><a href= 'pros_delete.php?kod_kursus=" .$row['kod_kursus']."'>Delete</a></td>";
 		 echo "<td><a href= 'form_kemaskini.php?kod_kursus=" .$row['kod_kursus']."'>Update</a></td>";
 		 echo "</tr>";

     	} 
        echo "</table>";
}
echo '<br><center><a href = "form.php">Daftar Kursus</a></center> ' ;

$conn->close();
?>


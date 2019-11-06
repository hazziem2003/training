<?php
include 'config.php';

$kod_kursus=$_POST['kod_kursus'];
$nama_kursus=$_POST['nama_kursus'];
$trainer=$_POST['trainer'];
$tarikh_kursus=$_POST['tarikh_kursus'];
$status=$_POST['status'];


$sql="INSERT INTO course (kod_kursus,nama_kursus,trainer,tarikh_kursus,status)
      VALUES ('$kod_kursus','$nama_kursus','$trainer','$tarikh_kursus','$status')";

if(mysqli_query($conn, $sql)){
	echo " <br> Records inserted successfully. <br/><br/>";
}else{
	echo "ERROR: Could not able to execute $sql.<br/><br/>" . mysqli_error($conn);
}
echo'<a href="senarai_kursus.php">View Table</a>';

//Close connection
mysqli_close($conn);
?> 


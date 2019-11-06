<?php
include('config.php');
if (isset($_GET["kod_kursus"]))
{
	mysqli_query($conn, "DELETE from course where kod_kursus='$_GET[kod_kursus]'")or die (mysqli_error());


	echo "<script>alert('Delete Successfully'); window.location='senarai_kursus.php'</script>";
}
?>


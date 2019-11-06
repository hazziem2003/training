<?php
$conn = mysqli_connect('localhost','root','','training') or die('Unable to connect');
if(isset($_POST['save'])){
	$kod_kursus = $_POST['kod_kursus'];
    $nama_kursus = $_POST['nama_kursus'];
    $trainer = $_POST['trainer'];
    $tarikh_kursus = $_POST['tarikh_kursus'];
    $status = $_POST['status'];

    $sql = "UPDATE course SET nama_kursus='$nama_kursus', trainer='$trainer', tarikh_kursus='$tarikh_kursus', status='$status' WHERE
         kod_kursus='$kod_kursus'";

if (mysqli_query($conn, $sql)) {
	echo "Record update succesfully";
	header("Location:senarai_kursus.php");
}else{
	echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
}
?>


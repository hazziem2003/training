<?php
$conn = mysqli_connect('localhost', 'root','' ,'training');
if (!$conn){
	die("Connection failed: " . mysqli_connect_error());

}
echo "Connected Successfully";
?>
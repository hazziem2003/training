<?php

// connect to database
include 'config.php';

// vars
$id = $_POST['id'];
$name = $_POST['name'];
$type = $_POST['type'];
$price = $_POST['price'];

// update query DML
$update = mysqli_query($connect , "UPDATE items SET name='$name' , type='$type' , price='$price' WHERE id='$id'");


// prompt
if ($update) {
    echo "<script> window.location='../main.php'; </script>";
}

?>
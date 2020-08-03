<?php

// connect database
include 'config.php';

// declare vars
$name = $_POST['name'];
$type = $_POST['type'];
$price = $_POST['price'];

// insert into table
$insert = mysqli_query($connect , "INSERT INTO items VALUES (NULL,'$name','$type','$price')");

// prompt
if ($insert) {
    echo "<script> window.location='../main.php'; </script>";
}
else {
    echo "failed";
}

?>

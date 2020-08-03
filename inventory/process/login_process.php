<?php
include 'config.php';

// declare variables
$name = $_POST['name'];
$password = $_POST['password'];

// select from table
$select = mysqli_query($connect , "SELECT * FROM users WHERE name='$name' AND password='$password' limit 1");

// compare
if (mysqli_num_rows($select) == 1) {
    echo " <script> window.location='../main.php'; </script> ";
}
else {
    echo "failed";
}
?>
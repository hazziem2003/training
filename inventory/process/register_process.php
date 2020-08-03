<?php
include 'config.php';

// declare variables with post
$name = $_POST['name'];
$password = $_POST['password'];

// insert into database
$insert = mysqli_query($connect , "INSERT INTO users VALUES (NULL,'$name','$password')");

// prompt and go to next page
if ($insert) {
    echo "
        <script> window.location='../index.php'; </script>
    ";
}

else {
    echo "<script> alert('failed or wrong'); </script>";
}

?>
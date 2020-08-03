<?php

// connect to database
include 'config.php';

// when id is set, declare var and do a query
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $delete = mysqli_query($connect , "DELETE FROM items WHERE id = '$id'");
}

// prompt
if ($delete) {
    echo "<script> window.location='../main.php'; </script>";
}
?>
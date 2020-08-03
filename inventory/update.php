<?php

// connect to database
include './process/config.php';

// get id
$id = $_GET['id'];

// select query using id
$select = mysqli_query($connect , "SELECT * FROM items WHERE id='$id'");

// display the record using while fetch assoc
while ($row = $select->fetch_assoc()) {
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edit record</title>
    </head>
    <body>
        <form action="./process/update_process.php" method="post">
            <input name="id" type="hidden" value="<?php echo $row['id'] ?>">

            <p id="name">Name</p>
            <input type="text" name="name" value="<?php echo $row['name'] ?>">
            <br><br>

            <p id="type">Type</p>
            <input type="text" name="type" value="<?php echo $row['type'] ?>">
            <br><br>

            <p id="price">Price</p>
            <input type="number" name="price" value="<?php echo $row['price'] ?>">
            <br><br>

            <input type="submit" name="submit" value="submit">
        </form>
    </body>
</html>

<?php
                                    }
?>
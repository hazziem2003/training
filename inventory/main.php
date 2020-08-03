<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Table</title>
        <style>
            table,tr,td {
                border: solid 1px ; border-collapse: collapse; padding: 5px;
            }
        </style>
    </head>
    <body>
        <table>
            <tr>
                <td>num</td>
                <td>name</td>
                <td>type</td>
                <td>price</td>
                <td>update</td>
                <td>delete</td>
            </tr>

            <?php
                // connect to database
                include './process/config.php';

                // select query
                $select = mysqli_query($connect , "SELECT * FROM items ORDER BY id DESC");

                // show records in table
                if ($select->num_rows > 0) {
                    while ($row = $select->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>".$row['id']."</td>";
                        echo "<td>".$row['name']."</td>";
                        echo "<td>".$row['type']."</td>";
                        echo "<td>".$row['price']."</td>";
                        echo "<td> <a href='update.php?id=".$row['id']."'>update</a> </td>";
                        echo "<td> <a href='./process/delete_process.php?id=".$row['id']."'>delete</a> </td>";
                        echo "</tr>";
                    }
                }

            ?>
        </table>
        <br><br>
        <p id="insert">click <a href="items.php">here</a> to insert new items into inventory</p>
    </body>
</html>
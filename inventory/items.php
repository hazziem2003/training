<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Register new item</title>
    </head>

    <body>
        <form action="./process/item_process.php" method="post">
            <p id="name">insert name</p>
            <input type="text" name="name">
            <br><br>
            <p id="type">insert type</p>
            <input type="text" name="type">
            <br><br>
            <p id="price">insert price</p>
            <input type="number" name="price">
            <br><br>
            <input type="submit" values="submit">
        </form>    
    </body>
</html>
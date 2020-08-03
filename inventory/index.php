<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sistem Inventori</title>
    </head>

    <body>
        <form action="./process/login_process.php" method="post">
            <p id="name">User Name</p>
            <input type="text" name="name">

            <br><br>

            <p id="password">Password</p>
            <input type="text" name="password">

            <br><br>

            <input values="login" type="submit" name="submit">
            <br>
            <p id="register">if haven't register click <a href="register.php">here</a></p>
        </form>
    </body>
</html>
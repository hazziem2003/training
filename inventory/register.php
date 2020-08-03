<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Register</title>
    </head>

    <body>
        <form action="./process/register_process.php" method="post">
            <p id="name">Insert your name</p>
            <input type="text" name="name">

            <br><br>

            <p id="password">Insert your password</p>
            <input type="text" name="password">
            <br><br>

            <input type="submit" name="submit" values="register">
            <br>
            <p id="login">back to login click <a href="index.php">here</a></p>
        </form>
    </body>
</html>
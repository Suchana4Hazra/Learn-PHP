<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php document</title>
</head>
<body>
    <form action = "form.php" method = "post">
        <label>Enter Username</label>
        <input type="text" name="username" id="username"><br>
        <label>Enter Password</label>
        <input type="password" name="password" id="password"><br>
        <input type="submit" name = "submit" value="submit"><br>
    </form>
</body>
</html>

<?php
    if (isset($_POST["submit"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];

        if (empty($username)) {
            echo "Username is empty.<br>";
            $flag = 0;
        }
        elseif (empty($password)) {
            echo "Password is empty.<br>";
            $flag = 0;
        }
        else {
            echo "successfully submitted.<br>";
        }
    }   
?>
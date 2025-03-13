<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "sanitize%26variables.php" method = "post">
        <label>Enter Username</label>
        <input type="text" name="username" id="username"><br>
        <label>Enter Email</label>
        <input type="email" name="email" id="email"><br>
        <labeel>Enter age</label>
        <input type="number" name="age" id="age"><br>
        <label>Enter Password</label>
        <input type="password" name="password" id="password"><br>
        <input type="submit" name = "submit" value="submit"><br>
    </form>
</body>
</html>

<?php

  if(isset($_POST["submit"])) {

    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_NUMBER_INT);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL); // returns empty string if email is invalid
    $age = filter_input(INPUT_POST, 'age', FILTER_VALIDATE_INT);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

    if(empty($email)) {
        echo "Email is Invalid.<br>";
    } else {
        echo "Email is Valid.<br>";
    }
    if(empty($age)) {
        echo "Age is Invalid.<br>";
    } else {
        echo "Age is Valid.<br>";
    }
}
?>
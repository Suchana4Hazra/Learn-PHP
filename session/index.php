<?php

     session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
      <form action="index.php" method="post">
          <label>Enter Username</label>
          <input type="text" name="username" id="username"><br>
          <label>Enter Password</label>
          <input type="password" name="password" id="password"><br>
          <input type="submit" name = "Login" value="Login"><br>
      </form>
</body>
</html>

<?php

    if(isset($_POST["Login"])) {

        if(empty($_SESSION["username"]) && empty($_SESSION["password"])) {
            
            $_SESSION["username"] = $_POST["username"];
            $_SESSION["password"] = $_POST["password"];

            echo $_SESSION["username"]."<br>";
            echo $_SESSION["password"]."<br>";

            header("Location: home.php"); // redirect to home.php
        } else {

            echo "Missing username/password.<br>";
        }
    }
?>
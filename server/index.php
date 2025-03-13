<?php

   // $_Server is a php super global variable which holds information about headers, paths, and script locations.

   // It is an associative array containing key-value pairs.

   foreach($_SERVER as $key => $value) {
       echo "{$key} => {$value}<br>";
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <from action = "index.php" method = "post">
        <label>Enter Username</label>
        <input type="text" name="username" id="username"><br>
        <input type="submit" name = "submit" value = "submit">
    </form>
</body>
</html>

<?php
  
  if(isset($_POST["submit"])) {
   if($_SERVER["REQUEST_METHOD"] == "POST") {
       $username = $_POST["username"];
       echo "Username is: {$username}";
   }
}
?>
<?php
  include "database.php";

  $username = 'patrick';
  $password = 'rock3';
  $hash = password_hash($password, PASSWORD_DEFAULT);
  $sql_query = "INSERT INTO businessDB (username, password) VALUES ('$username', '$hash')";
  
  try{

    mysqli_query($conn, $sql_query);
    echo "<br> Data inserted successfully";
  } catch(mysqli_sql_exception $e) {
    echo "<br> Data insertion failed: " . $e->getMessage();
  }
  
  mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>MySQL Connection</h2>
</body>
</html>
<?php
    
     // 1. MySQLi Extension
     // 2. PDO(PHP Data Objects)

     // Declare the variables
     $db_server = "localhost";
     $db_user = "root";
     $db_pass = "";
     $db_name = "test";
     $conn = "";

     try{

        $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
     } catch(mysqli_sql_exception $e) {
        echo "Connection Failed: " . $e->getMessage();
     }
      
      if($conn) {
        echo "You are Connected";
      }
?>
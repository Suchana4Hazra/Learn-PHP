<?php

    include "database.php";
    
    $sql = "SELECT * FROM businessDB";
    $result = mysqli_query($conn, $sql); // returns rows


    if(mysqli_num_rows($result) > 0) { //check no of rows

        for($i = 0; $i < mysqli_num_rows($result); $i++) {
            $row = mysqli_fetch_assoc($result); //fetches a result row(next row) as an associative array
            echo "<br> Username: " . $row['username'] . "<br> Password: " . $row['password'];
            echo "<br>";
        }  
    } else {
        echo "No data found";
    }
?>
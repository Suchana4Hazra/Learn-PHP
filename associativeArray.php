<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "associativeArray.php" method = "post">
        <label for="country">Enter the country name:</label>
        <input type="text" name="country" id="country"><br>
        <input type="submit" value="submit"><br>
    </form>
</body>
</html>

<?php
    
    // associative array = key-value pairs
    
    $capitals = array("India"=>"New Delhi",
                       "Nepal"=>"Kathmandu", 
                       "China"=>"Beijing",
                       "Japan"=>"Tokyo");

     $country = $_POST["country"];
     $capital = $capitals["$country"];
     echo "The capital of {$country} is {$capital}.<br>"


    // foreach($capitals as $key => $value) {
    //     echo "The capital of {$key} is {$value} <br>";
    // }

    //Update key-value pair
   // $capitals["India"] = "Mumbai";
   /*
    array_pop($capitals);
    array_push($capitals, "Pakistan"=>"Islamabad");
    array_unshift($capitals, "Bangladesh"=>"Dhaka");
    array_shift($capitals);
    $reversed_capitals = array_reverse($capitals);
    sort($capitals);
    rsort($capitals);
    count($capitals);

    $keys = array_keys($capitals);
    $values = array_values($capitals);
    */

?>
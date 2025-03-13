<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "GetPost.php" method = "post">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name"><br>
        <label for="product">Product:</label>
        <input type="text" name="product" id="product"><br>
        <label for="quantity">Quantity:</label>
        <input type="text" name="quantity" id="quantity"><br>
        <input type="submit" value="order">
    </form>
</body>
</html>

<?php

$_GET, $_POST are super global variables

// $_GET => Data is appended to the url
            //NOT SECURE
            //char Limit
            //Bookmark is possible w/ values
            //GET request is cached
            //GET request remains in the browser history
            // Hence better for a search page

//$_POST => Data is packaged inside the body of the request
            //SECURE
            //No char limit
            //Bookmark is not possible w/ values
            //POST request is not cached
            //POST request does not remain in the browser history
            // Hence better for a login page(submitting credentials)

   $item = $_POST['product'];
    $quantity = $_POST['quantity'];
    $name = $_POST['name'];
    $price = 20.5;
    $hasDiscount = true;
    // bill payment logic
    echo "BILL<br>";
    echo "Name: $name<br>";
    echo "Product: $item<br>";
    echo "Price: $price<br>";
    echo "Quantity: $quantity<br>";
    echo "Total: " . $price * $quantity . "<br>";
?>

 
<?php

// variables : a container for storing data
// string, integer, float, boolean, array, object, null

$name = "suchana";
$product = "book";
$price = 20.5;
$quantity = 2;
$hasDiscount = true;


echo "BILL<br>";
echo "Name: $name<br>";
echo "Product: $product<br>";
echo "Price: $price<br>";
echo "Quantity: $quantity<br>";
echo "Total: " . $price * $quantity . "<br>";
// echo "Total: $price * $quantity<br>";
echo "Has Discount: $hasDiscount<br>";
echo "Has Discount: " . ($hasDiscount ? "Yes" : "No") . "<br>";
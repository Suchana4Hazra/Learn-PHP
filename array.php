<?php

  // array = "variable" that can hold multiple values

  $foods = array("Pizza", "Burger", "Pasta", "Fries");

  array_push($foods, "Garlic Bread"); // push at the end
  array_pop($foods); // remove from the end
  array_unshift($foods, "Pancakes"); // push at the start
  array_shift($foods); // remove from the start
  $reversed_foods = array_reverse($foods); // reverse the array
  sort($foods); // sort in ascending order
  rsort($foods); // sort in descending order



  foreach($foods as $food){
      echo $food . "<br>";
  }

    echo "no of food-items: ";
    echo count($foods) . "<br>";
?>
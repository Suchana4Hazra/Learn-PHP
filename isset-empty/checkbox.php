<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="checkbox.php" method="post">
        <input type="checkbox" name="pizza" value="Pizza">Pizza<br>
        <input type="checkbox" name="burger" value="Burger">Burger<br>
        <input type="checkbox" name="hotdog" value="Hotdog">Hotdog<br>
        <input type="checkbox" name="fries" value="Fries">Fries<br>
        <input type="checkbox" name="cake" value="Cake">Cake<br>
        <input type="checkbox" name="pepsi" value="Pepsi">Pepsi<br>
        <input type="submit" name="submit" value="submit"><br>
</body>
</html>

<?php

  if(isset($_POST["submit"])) {

    if(isset($_POST["pizza"])) {
        echo "You have selected Pizza.<br>";
    }
    if(isset($_POST["burger"])) {
        echo "You have selected Burger.<br>";
    }
    if(isset($_POST["hotdog"])) {
        echo "You have selected Hotdog.<br>";
    }
    if(isset($_POST["fries"])) {
        echo "You have selected Fries.<br>";
    }
    if(isset($_POST["cake"])) {
        echo "You have selected Cake.<br>";
    }
    if(isset($_POST["pepsi"])) {
        echo "You have selected Pepsi.<br>";
    }
  }
?>
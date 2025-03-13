<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "radio_button.php" method = "post">
        <input type="radio" name = "credit_card" value = "Visa">Visa<br>
        <input type="radio" name = "credit_card" value = "Mastercard">Mastercard<br>
        <input type="radio" name = "credit_card" value = "American_express">American Express<br>
        <input type="submit" name = "submit" value="submit"><br>
    </form>
</body>
</html>


<?php
   $credit_card = null;
   if(isset($_POST["submit"])) {
           
        $credit_card = null;
        if(isset($_POST["credit_card"])){
         $credit_card = $_POST["credit_card"];
        }
     }
     switch($credit_card) {

        case "Visa":
            echo "You have selected Visa.<br>";
            break;
        case "Mastercard":
            echo "You have selected Mastercard.<br>";
            break;
        case "American Express":
            echo "You have selected American Express.<br>";
            break;
        default:
            echo "Please select a credit card option.<br>";
            break;
     }
?>
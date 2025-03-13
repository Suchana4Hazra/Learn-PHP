<?php

//    Hashing = transforming sensitive data(password)
//              into a fixed-length string of characters like a message digest.
//              Hides the original data from 3rd parties(protection from sql injection)

 $password = "suchana123";
 $hash = password_hash($password, PASSWORD_DEFAULT);
 echo $hash . "<br>";

 if(password_verify("suchana123",$hash)) {
        echo "Password is correct";
    } else {
        echo "Password is incorrect";
 }

?>
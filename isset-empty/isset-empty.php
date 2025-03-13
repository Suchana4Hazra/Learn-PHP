<?php

  //isset() and empty() functions
    //isset() = return true if variable is declared and not null
    //empty() = return true if variable is not declared or null

    $name = "John";
    $city = "New York";
    $country = "USA";

    if(isset($name)){
        echo "Name is set.<br>";
    }else{
        echo "Name is not set.<br>";
    }

    if(isset($age)){
        echo "Age is set.<br>";
    }else{ 
        echo "Age is not set.<br>";
    }
?>
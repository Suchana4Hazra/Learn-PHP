<?php
  
//   cookie => Information about a user stored in web browser
//             targeted advertisements, browsing performances, and
//             other non-sensitive 

//   setcookie(name, value, expire(seconds), path);
     setcookie("fav_food", "pizza", time() + 86400, "/"); // 1 day
     setcookie("fav_color", "blue", time() + 86400, "/"); // 1 day
     setcookie("fav_movie", "The Dark Knight", time() + 86400 * 2, "/"); // 2 days
     setcookie("fav_sport", "Cricket", time() + 86400 * 4, "/"); // 4 days
     setcookie("fav_car", "Audi", time() - 0, "/"); // delete cookie

     foreach($_COOKIE as $key => $value) {

        echo "{$key} => {$value}<br>";
     }

     if(isset($_COOKIE["fav_food"])) {
         echo "<br> Your favourite food is {$_COOKIE["fav_food"]}.<br>";
     }
     else {
         echo "I don't know your favourite food.<br>";
     }
?>
<?php
  
    include "database.php";  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <h2>Registration Form</h2>
        <label>Username</label>
        <input type="text" name="username" placeholder="Enter your username">
        <br>
        <label>Password</label>
        <input type="password" name="password" placeholder="Enter your password">
        <br>
        <button type="submit">Register</button>
    </form>
</body>
</html>

<?php

   if($_SERVER['REQUEST_METHOD'] == 'POST') {
         $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
       $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);

       if(empty($username)) {
           echo "Username is required";
       } 
       elseif(empty($password)) {
           echo "Password is required";
       } else {
       // Hash the password
       $hash = password_hash($password, PASSWORD_DEFAULT);
       $sql_query = "INSERT INTO businessDB (username, password) VALUES ('$username', '$hash')";
       
       try{
     
         mysqli_query($conn, $sql_query);
         echo "<br> Data inserted successfully";
       } catch(mysqli_sql_exception $e) {
         echo "<br> Data insertion failed: " . $e->getMessage();
       }
       
       mysqli_close($conn);
   }
}
?>
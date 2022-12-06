<!DOCTYPE html>
<?php
require('functions.php');
//MySQL Source: https://www.w3schools.com/php/php_mysql_connect.asp
//Login Form Source: https://www.simplilearn.com/tutorials/php-tutorial/php-login-form

// Starts the PHP session, to allow persistence of variables between web pages.
session_start();

?> 
<head>

<title>Account Page</title>

<link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>

 <form action="laccount.php" method="post">

    <h2>Account</h2>
    <label>Account</label><br>

    <input type="text" name="username" placeholder="User Name"><br>

    <label>Password</label><br>

    <input type="password" name="password" placeholder="Password"><br> 
    <input type="submit" name = "submit" value="Login">
    <input type="submit" name = "submit" value="Forgot my password">


 </form>

</body>

<?php
echo(var_dump($_SESSION));

                

?>


<html>


</html>
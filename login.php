<!DOCTYPE html>
<?php
require('functions.php');
//MySQL Source: https://www.w3schools.com/php/php_mysql_connect.asp
//Login Form Source: https://www.simplilearn.com/tutorials/php-tutorial/php-login-form

// Starts the PHP session, to allow persistence of variables between web pages.
session_start();

?> 
<head>

<title>LOGIN</title>

<link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>

 <form action="login.php" method="post">

    <h2>LOGIN</h2>
    <label>User Name</label><br>

    <input type="text" name="username" placeholder="User Name"><br>

    <label>Password</label><br>

    <input type="password" name="password" placeholder="Password"><br> 
    <input type="submit" name = "submit" value="Login">
    <input type="submit" name = "submit" value="Forgot my password">


 </form>

</body>

<?php
    if (isset($_POST['submit']) AND $_POST['submit'] == 'Login'){
        //If Login Button is clicked
            login();

        } else if(isset($_POST['submit']) AND ($_POST['submit']) == 'Forgot my password'){
                        //If Reset Button is clicked
            $page = 'reset.php';
            header('location: '. $page); 
        }

                

?>


<html>


</html>
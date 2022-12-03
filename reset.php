<!DOCTYPE html>
<?php
require('functions.php');
//MySQL Source: https://www.w3schools.com/php/php_mysql_connect.asp
//Login Form Source: https://www.simplilearn.com/tutorials/php-tutorial/php-login-form

// Starts the PHP session, to allow persistence of variables between web pages.
session_start();

?> 
<head>

<title>Reset Password</title>

<link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>

 <form action="reset.php" method="post">

    <h2>Reset Password</h2>

    <?php if (isset($_GET['error'])) { ?>

        <p class="error"><?php echo $_GET['error']; ?></p>

    <?php } ?>

    <label>User Name</label><br>

    <input type="text" name="username" placeholder="User Name"><br> 
    <input type="submit" name = "submit" value="Back to Login">
    <input type="submit" name = "submit" value="Reset">


 </form>

</body>

<?php
        if (isset($_POST['submit']) AND $_POST['submit'] == 'Reset' AND isset($_POST['username'])){
            //If Login Button is clicked
                resetPasswordForm();
    
            } else if(isset($_POST['submit']) AND ($_POST['submit']) == 'Back to Login'){
                            //If Reset Button is clicked
                $page = 'login.php';
                header('location: '. $page); 
            }
?>


<html>


</html>
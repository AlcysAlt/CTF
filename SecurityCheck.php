<!DOCTYPE html>
<?php
require('functions.php');
//MySQL Source: https://www.w3schools.com/php/php_mysql_connect.asp
//Login Form Source: https://www.simplilearn.com/tutorials/php-tutorial/php-login-form

// Starts the PHP session, to allow persistence of variables between web pages.
session_start();

?> 
<head>

<title>Security Question 1</title>

<link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>

 <form action="SecurityCheck.php" method="post">

    <h2>Security Question 1</h2>

    <?php if (isset($_GET['error'])) { ?>

        <p class="error"><?php echo $_GET['error']; ?></p>

    <?php } ?>
    <label>New Password</label><br>
    <input type="text" name="password" placeholder="Please enter a new password"><br> 

    <label>What is your favourite colour?</label><br>
    <input type="text" name="answer1" placeholder="Answer"><br> 

    <label>Whare were you born?</label><br>
    <input type="text" name="answer2" placeholder="Answer"><br> 

    <label>What is your favourite movie?</label><br>
    <input type="text" name="answer3" placeholder="Answer"><br> 

    <input type="submit" name = "submit" value="Submit">
    <input type="submit" name = "submit" value="Back to Login"><br>


 </form>

</body>

<?php
        if (isset($_POST['submit']) AND $_POST['submit'] == 'Submit' AND isset($_SESSION['Username']) AND isset($_POST['password'])){
            if ($_SESSION['Q1'] == $_POST['answer1'] AND $_SESSION['Q2'] == $_POST['answer2'] AND $_SESSION['Q3'] == $_POST['answer3']){
                echo("PASSWORD RESET");
                changePassword($_POST['password'], $_SESSION['Username']);
                $_POST['password'] = '';
            } else {
                echo("Incorrect answers.");
                $_POST['answer1'] = '';
                $_POST['answer2'] = '';
                $_POST['answer3'] = '';
                $_POST['password'] = '';
                
            }
            } else if(isset($_POST['submit']) AND ($_POST['submit']) == 'Back to Login'){
                
                            //If Reset Button is clicked
                $page = 'login.php';
                header('location: '. $page); 
            }
?>


<html>


</html>
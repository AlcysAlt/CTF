<!DOCTYPE html>
<?php
require('functions.php');
//MySQL Source: https://www.w3schools.com/php/php_mysql_connect.asp
//Login Form Source: https://www.simplilearn.com/tutorials/php-tutorial/php-login-form

// Starts the PHP session, to allow persistence of variables between web pages.
session_start();

?> 
<head>

<title>Security Questions</title>

<link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>

    <!----------Title Table---------->
    <table align="center">
        <tr>
            <th>
            <form action="SecurityCheck.php" method="post">

<h2>Security Questions</h2>

<?php if (isset($_GET['error'])) { ?>

    <p class="error"><?php echo $_GET['error']; ?></p>

<?php } ?>
<label>New Password</label><br>
<input type="text" name="password" placeholder="Please enter a new password"><br><br>

<label>What is your favourite colour?</label><br>
<input type="text" name="answer1" placeholder="Security Answer 1"><br><br>

<label>Where were you born?</label><br>
<input type="text" name="answer2" placeholder="Security Answer 2"><br><br>

<label>What is your favourite movie?</label><br>
<input type="text" name="answer3" placeholder="Security Answer 3"><br><br>

<input type="submit" name = "submit" value="Submit">
<input type="submit" name = "submit" value="Back to Login"><br>


</form>

            <head>

</body>

<?php
 $_SESSION['secret'] = False;
        //When the submit button is clicked and the required fields are filled.
        if (isset($_POST['submit']) AND $_POST['submit'] == 'Submit' AND isset($_SESSION['Username']) AND isset($_POST['password'])){
           //if the required fields 
            if ($_SESSION['Q1'] == $_POST['answer1'] AND $_SESSION['Q2'] == $_POST['answer2'] AND $_SESSION['Q3'] == $_POST['answer3']){
                echo("Password Reset Successfully");
                echo"<br>";
                changePassword( $_SESSION['Username'], $_POST['password']);
                $_SESSION['task7flag2'] = 1;
                $_POST['password'] = '';
                task7();
                $_POST['answer1'] = '';
                $_POST['answer2'] = '';
                $_POST['answer3'] = '';
                $_POST['password'] = '';
                $_SESSION['task7flag1'] = 0;
                $_SESSION['task7flag2'] = 0;

            } else {
                echo("Incorrect answers.");
                $_POST['answer1'] = '';
                $_POST['answer2'] = '';
                $_POST['answer3'] = '';
                $_POST['password'] = '';
                
            }
            } else if(isset($_POST['submit']) AND ($_POST['submit']) == 'Back to Login'){
                
                //Redirect the user to the login page when the login button is clicked.
                $page = 'login.php';
                header('location: '. $page); 
            }
            $_SESSION['redirected'] = False;
           
?>


<html>


    <!----------Footer---------->
    <br>
    <footer>
        <table align="center">
        <tr>
            <td>
            <a href="http://bestsiteever.com/CTF/index.php"> Home </a>
            </td>
            <td>
            |
            </td>
            <td>
            <a href="http://bestsiteever.com/CTF/index.php?page=aboutUs.php"> About Us </a>
            </td>
            <td>
            |
            </td>
            <td>
                <a href="http://bestsiteever.com/CTF/account.php"> Account </a>
            </td>
            <td>
                |
            </td>
            <td>
                <a href="http://bestsiteever.com/CTF/index.php?page=login.php"> Log In </a>
            </td>
            <td>
            |
            </td>
            <td>
                <a href="http://bestsiteever.com/CTF/index.php?page=gallery.php"> Gallery</a>
            </td>
            <td>
            |
            </td>
            <td>
                <a href="http://bestsiteever.com/CTF/index.php?page=feedback.php"> Feedback </a>
            </td>
        </tr>

        </table>
        <table align="center">
            <tr>
                <th>
                    <p style="font-size:12px">Copyright &copy1833</p>
                </th>
            </tr>

        </table>

    </footer>

</html>
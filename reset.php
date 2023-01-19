<!DOCTYPE html>
<?php
require('functions.php');
// Starts the PHP session, to allow persistence of variables between web pages.
session_start();

?> 
<html>

    <!----------Title Table---------->
    <table align="center">
        <tr>
            <th>
            
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
    <input type="submit" name = "submit" value="Reset">
    <input type="submit" name = "submit" value="Back to Login"><br>


<?php
 $_SESSION['secret'] = False;
        if (isset($_POST['submit']) AND $_POST['submit'] == 'Reset' AND isset($_POST['username'])){
            if($_POST['username'] == 'JJohnson' OR $_POST['username'] == 'jjohnson'){
                $_SESSION['task7flag1'] = 1;
            }
            //If Reset Button is clicked
            if (checkIfUserExists($_POST['username']) == true){
                resetPasswordForm();
            } else {
                echo("User does not exist, please try again.");

            }
    
            } else if(isset($_POST['submit']) AND ($_POST['submit']) == 'Back to Login'){
                 //If Login Button is clicked
                $page = 'login.php';
                header('location: '. $page); 
            }
            $_SESSION['redirected'] = False;
            $_SESSION['secret'] = False;
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

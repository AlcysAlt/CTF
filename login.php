<!DOCTYPE html>
<html>
    
</html>




<?php
require('functions.php');
//MySQL Source: https://www.w3schools.com/php/php_mysql_connect.asp
//Login Form Source: https://www.simplilearn.com/tutorials/php-tutorial/php-login-form

// Starts the PHP session, to allow persistence of variables between web pages.
session_start();

?> 


<html>
<body>

    <!----------Title Table---------->
    <table align="center">
        <tr>
            <th>
            <title>LOGIN</title>
            <head>



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
    <br> <br> 
    
<?php
 $_SESSION['secret'] = False;
    if (isset($_POST['submit']) AND $_POST['submit'] == 'Login'){
        if($_POST['username'] == 'User' AND $_POST['password'] == 'SecurePa??word123'){
            $_SESSION['Logged In'] = 1;
            $_SESSION['redirected'] = True;
            $_SESSION['defaultAccount'] = True;
            $page = 'account.php';
            header('location: '. $page); 
        }
        //If Login Button is clicked
            login();
            $loggedIn = $_SESSION['Logged In'];
            if ($loggedIn == 1){
                $page = 'account.php';
                $_SESSION['redirected'] = True;
                header('location: '. $page); 
                
            } else if($loggedIn == 0){
                echo('<br>');
                
            } else {
                echo("Error");
            }

        } else if(isset($_POST['submit']) AND ($_POST['submit']) == 'Forgot my password'){
                        //If Reset Button is clicked
            $page = 'reset.php';
            header('location: '. $page); 
        }
     
        $_SESSION['secret'] = False;
                

?>



 </form>

</body>


            
            </th>
            <th>
        </tr>   
    </table>

    
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

</body>
</html>

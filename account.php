<!DOCTYPE html>
<html>

    <!----------Title Table---------->
    <table align="center">
        <tr>
            <th>
            <form action="account.php" method="post">
    <input type="hidden" name="funnyButton" value="Funny button that doesn't do anything"></html>
</form>
<?php
session_start();
 $_SESSION['secret'] = False;
error_reporting(0);
require('functions.php');
// Starts the PHP session, to allow persistence of variables between web pages.
session_start();
if (isset($_POST['funnyButton']) AND $_POST['funnyButton'] == "Funny button that doesn't do anything"){
    echo('Top Secret Information');
    echo('<br>');
    echo('!TheButtonWasALie!');
    echo('<br>');
    echo('<br>');

}
// //Checks if the the session variable 'redirected' is set, deny access if empty.
if (!isset($_SESSION['redirected']) or empty($_SESSION['redirected']) or $_SESSION['redirected'] == '') {
    die ('Access Denied');
    //Otherwise if redirected variable is set, empty the variable and display the web page.
  } else if(isset($_SESSION['defaultAccount']) AND $_SESSION['defaultAccount'] == True ){
    echo('!DefaultAccounts=FreeAccess!');
    $_SESSION['defaultAccount'] = False;
  } else if ($_SESSION['redirected'] == True){
    $_SESSION['info'] = getAccountInfo();
    displayQueryResults($_SESSION['info']);
    echo("<br>");

    if(isset($_COOKIE['User']) AND $_COOKIE['User'] == 'Admin'){
        echo("<br>");
        echo("!CookiesWithASideOfAdminPrivilages!");
    }
    if (isset($_POST['submit']) AND $_POST['submit'] == 'Log Out'){
        $_SESSION['redirected'] = '';
        $_SESSION['info'] = '';
        $_SESSION['Logged In'] = 0;
        setcookie("User", "", time()-999999999999999999999999999999999999);
        $page = 'login.php';
        header('location: '. $page); 
    }
    

    //If any issues occur, display an error message.
} else {
    $_SESSION['redirected'] = '';
    $_SESSION['secret'] = False;
    $page = 'index.php';
    header('location: '. $page); 
}

?> 
<br>
<form action="account.php" method="post">
<input type="submit" name = "submit" value="Log Out">

            </th>
            <th>
        </tr>   
    </table>




</form>

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

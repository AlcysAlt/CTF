<!DOCTYPE html>
<?php
// Starts the PHP session, to allow persistence of variables between web pages.
session_start();
// //Checks if the the session variable 'redirected' is set, deny access if empty.
if (!isset($_SESSION['redirected']) or empty($_SESSION['redirected']) or $_SESSION['redirected'] == '' or !isset($_SESSION['secret'])) {
    echo 'Access Denied';
    exit; 
    //Otherwise if redirected variable is set, empty the variable and display the web page.
  } else if ($_SESSION['redirected'] == True AND $_SESSION['secret'] == True){
    echo '!ThankYouWebServer:D!';
    echo(var_dump($_SESSION));
    //If any issues occur, display an error message.
} else {
    echo 'Error';
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
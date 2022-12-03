<!DOCTYPE html>
<?php
// Starts the PHP session, to allow persistence of variables between web pages.
session_start();
// //Checks if the the session variable 'redirected' is set, deny access if empty.
if (!isset($_SESSION['redirected']) or empty($_SESSION['redirected']) or $_SESSION['redirected'] == '') {
    echo 'Access Denied';
    exit; 
    //Otherwise if redirected variable is set, empty the variable and display the web page.
  } else if ($_SESSION['redirected'] == True){
    echo '!ThankYouWebServer:D!';
    $_SESSION['redirected'] = '';
    //If any issues occur, display an error message.
} else {
    echo 'Error';
}

?> 
<html>

</html>
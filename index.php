<!DOCTYPE html>
<?php
// Starts the PHP session, to allow persistence of variables between web pages.
session_start();
//Sets a session variable which allows a web page to identify that the user has been redirected from a web page on the same server.
$_SESSION['redirected'] = False;
//Checks if the the page variable from the address bar is set.
if (isset($_GET['page']) and !empty($_GET['page']) and $_GET['page'] !== ''){
    switch($_GET['page'])
    {
        case 1:
            $_SESSION['redirected'] = True;
            $page = 'page1.php'; 
            header('location: '. $page); 
            break;
        case 2:
            $_SESSION['redirected'] = True;
            $page = 'page2.php';
            header('location: '. $page); 
            break;
        case 'secret.php':
            echo 'Access Denied';
            break;
    
        default:
            $_SESSION['redirected'] = True;
            $page = $_GET['page'];
            header('location: '. $page); 
            break;
    };
    //If the page variable is empty, it shows an Access Denied Error
} else {
    $_SESSION['redirected'] = False;
    echo 'Access Denied';
}
?> 
<html>

</html>
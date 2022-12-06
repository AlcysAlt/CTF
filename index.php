<!DOCTYPE html>
<?php
// Starts the PHP session, to allow persistence of variables between web pages.
session_start();
//Sets a session variable which allows a web page to identify that the user has been redirected from a web page on the same server.
$_SESSION['redirected'] = False;
//Checks if the the page variable from the address bar is set.
if (isset($_GET['page']) and !empty($_GET['page']) and $_GET['page'] !== ''){
    //If the page variable is set, check what it's set to, and redirect to the appropriate page.
    switch($_GET['page'])
    {
        case 1:
            //Sets session variable 'Redirected' to True.
            $_SESSION['redirected'] = True;
            //Sets a page variable
            $page = 'page1.php'; 
            //Changes the HTTP Header to the location of the page, the user is trying to access. Redirecting them to it.
            header('location: '. $page); 
            break;
        case 2:
            $_SESSION['redirected'] = True;
            $page = 'page2.php';
            header('location: '. $page); 
            break;
        case 'secret.php':
            //Deny access if the user is trying to access the secret page.
            echo 'Access Denied';
            break;
    
        default:
        //By default, if the web page the user is trying to access isn't listed above, attempt to redirect them to the page they specify.
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
    <!--Remember to remove in final build!
//Best Default Credentials Ever//
username: User
password: SecurePa??word123 -->

</html>
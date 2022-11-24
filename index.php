<!DOCTYPE html>


<?php
// quesry string parameters are accessible through $_GET or $_REQUEST
session_start();
switch($_GET['page'])
{
    case 1:
        $_SESSION['redirected'] = true;
        $page = 'page1.php'; 
        header('location: '. $page); 
        break;
    case 2:
        $_SESSION['redirected'] = true;
        $page = 'page2.php';
        header('location: '. $page); 
        break;
    case 'secret.php':
        echo 'access denied';
        break;

    default:
        $_SESSION['redirected'] = true;
        $page = $_GET['page'];
        header('location: '. $page); 
        break;
};
?> 
<html>

</html>
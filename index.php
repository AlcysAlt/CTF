<!DOCTYPE html>
<?php
// quesry string parameters are accessible through $_GET or $_REQUEST
session_start();
$_SESSION['redirected'] = False;
if (isset($_GET['page'])){
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
} else {
    $_SESSION['redirected'] = False;
    echo 'Access Denied';
}

?> 
<html>

</html>
<!DOCTYPE html>


<?php
echo 'index page, remote address:';
echo $_SERVER['REMOTE_ADDR'];
echo 'server address:';
echo $_SERVER['SERVER_ADDR'];
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

    default:
        $_SESSION['redirected'] = true;
        $page = $_GET['page'];
        header('location: '. $page); 
        break;
};



/*
echo file_get_contents("http://bestsiteever.com/www/secret.php");
session_start();
$_SESSION['admin_access']='yes';
$firstName = 'John';
$lastName = 'Smith';
echo $firstName.$lastName;  

$enrolment = '30021114';
$forename = 'Mateusz';
$surname = 'Klocek';
$array = array(
    1 => array(
        "Forename" => $forename,
        "Surename" => $surname,
        "Enrollment" => $enrolment,
    )
);
foreach($array as $key => $data) {
    foreach($data as $value) {
        echo $value;
    }
    
}
*/
?> 
<html>
    
</html>
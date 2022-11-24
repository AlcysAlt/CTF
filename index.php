<!DOCTYPE html>
<html>

<?php
// quesry string parameters are accessible through $_GET or $_REQUEST
switch($_GET['page'])
{
    case 1: 
        $_SERVER['HTTP_REFERER'] = 'http://bestsiteever.com/';
        $page = 'page1.php'; // Save the redirection to a variable
        header('location: '. $page); 
        break;
    case 2:
        $_SERVER['HTTP_REFERER'] = 'http://bestsiteever.com/';
        $page = 'page2.php';
        header('location: '. $page); 
        break;
    default:
        $_SERVER['HTTP_REFERER'] = 'http://bestsiteever.com/';
        $page = $_GET['page'];
        header($page); 
        break;
};
echo 'index page, remote address:';
echo $_SERVER['REMOTE_ADDR'];
echo 'server address:';
echo $_SERVER['SERVER_ADDR'];
echo file_get_contents("http://bestsiteever.com/www/admin.php");
/*
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
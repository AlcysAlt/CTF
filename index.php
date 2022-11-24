<!DOCTYPE html>
<html>

<?php
// quesry string parameters are accessible through $_GET or $_REQUEST
switch($_GET['mid']) // Look only at mid parameter. Decide what to do based on value
{
    case 1: 
        $page = 'page1.php'; // Save the redirection to a variable
        break;
    case 2:
        $page = 'page2.php';
        break;
    default:
        $page = 'page3.php';
        break;
}

// redirect to correct page
header('location: '. $page); 

session_start();
$_SESSION['admin_access']='yes';
echo 'index page, remote address:';
echo $_SERVER['REMOTE_ADDR'];
echo 'server address:';
echo $_SERVER['SERVER_ADDR'];
echo file_get_contents("http://bestsiteever.com/www/admin.php");
/*
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
<!DOCTYPE html>
<html>

<?php
session_start();
$_SESSION['admin_access']='yes';
echo 'index page, remote address:';
echo $_SERVER['REMOTE_ADDR'];
echo 'server address:';
echo $_SERVER['SERVER_ADDR'];
echo file_get_contents("http://bestsiteever/www/admin.php");
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
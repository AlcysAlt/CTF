<!DOCTYPE html>
<html>

<?php
session_start();
echo 'index page';

$_SESSION['admin_access']='yes';


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
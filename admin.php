<!DOCTYPE html>
<html>

<?php
header("")
session_start();
if($_SESSION['loading']=='yes'){
echo 'all good';
}else{
echo 'bad, redirect back or whatever';
}
$_SESSION['loading']=''; // clear session var


?> 
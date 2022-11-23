<!DOCTYPE html>
<html>

<?php
echo 'admin page';
session_start();
if($_SESSION['admin_access']=='yes'){
    
echo 'all good';
}else{

echo 'bad, redirect back or whatever';
}

$_SESSION['admin_access']='';


?> 
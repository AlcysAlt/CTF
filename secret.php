<!DOCTYPE html>
<html>

<?php
 if($_SESSION['redirected'] !== true){
 die('Denied');
 }  else{
    //session_start();
    echo 'remote address:';
    echo $_SERVER['REMOTE_ADDR'];
    echo 'server address:';
    echo $_SERVER['SERVER_ADDR'];
    echo 'Welcome to the Secret Page';
};
/*$_SESSION['admin_access']='';
    session_start();
    $_SESSION['loading']='yes';
    */
?> 

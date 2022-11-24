<!DOCTYPE html>
<html>

<?php
session_start();
echo 'remote address:';
echo $_SERVER['REMOTE_ADDR'];
echo 'server address:';
echo $_SERVER['SERVER_ADDR'];
if($_SERVER['HTTP_REFERER']=='http://bestsiteever.com/'){
    echo 'Welcome to the Admin Page';
}else{
    die('denied');
};
/*$_SESSION['admin_access']='';
    session_start();
    $_SESSION['loading']='yes';
    */
?> 

<!DOCTYPE html>
<?php
session_start();
 if($_SESSION['redirected'] == true){
    //session_start();
    echo 'remote address:';
    echo $_SERVER['REMOTE_ADDR'];
    echo 'server address:';
    echo $_SERVER['SERVER_ADDR'];
    echo 'Welcome to the Secret Page';
    $_SESSION['redirected'] = '';
 }  else{

    die('Denied');
};
/*$_SESSION['admin_access']='';
    session_start();
    $_SESSION['loading']='yes';
    */
?> 
<html>

</html>
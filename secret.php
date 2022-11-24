<!DOCTYPE html>
<?php
session_start();
 if($_SESSION['redirected'] == true){
    echo 'Top Secret Page<br>';
    echo '!ThankYouWebServer:D!';
 }  else{

    die('Access Denied');
};

?> 
<html>

</html>
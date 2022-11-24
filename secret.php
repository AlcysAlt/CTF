<!DOCTYPE html>
<?php
session_start();
if (!isset($_SESSION['redirected']) or empty($_SESSION['redirected']) or $_SESSION['redirected'] == '') {
    echo 'Access Denied';
    exit; // do nothing if hit directly.
  } else if ($_SESSION['redirected'] == True){
    echo '!ThankYouWebServer:D!';
    $_SESSION['redirected'] = '';
} else {
    echo 'Error';
}

?> 
<html>

</html>
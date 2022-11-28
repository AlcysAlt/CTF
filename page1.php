<!DOCTYPE html>


<?php
// Starts the PHP session, to allow persistence of variables between web pages.
session_start();
// Resets the redirected variable to False.
$_SESSION['redirected'] = False;
echo 'page 1';
?> 

<html>

</html>
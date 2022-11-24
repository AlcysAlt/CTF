<!DOCTYPE html>
<html>

<?php
session_start();
echo 'emote address:';
echo $_SERVER['REMOTE_ADDR'];
echo 'server address:';
echo $_SERVER['SERVER_ADDR'];
if($_SERVER['REMOTE_ADDR']=='127.126.125.124'){
echo 'Welcome to the Admin Page';

}else{

echo 'Admin Page: Access Denied';
}

$_SESSION['admin_access']='';


?> 
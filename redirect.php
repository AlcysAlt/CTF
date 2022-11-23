<!DOCTYPE html>
<html>

<?php
$param = $_GET['a_param'];
header("Location: http://127.126.125.124/?b_param={$param}");
echo 'redirect page';
?> 
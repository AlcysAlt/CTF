<!DOCTYPE html>
<html>

<?php
$param = $_GET['a_param'];
header("Location: http://127.0.0.1/?b_param={$param}");
echo 'redirect page';
?> 
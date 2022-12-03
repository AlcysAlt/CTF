<!DOCTYPE html>
<?php
//Login Form Source: https://www.simplilearn.com/tutorials/php-tutorial/php-login-form

// Starts the PHP session, to allow persistence of variables between web pages.
session_start();
// //Checks if the the session variable 'redirected' is set, deny access if empty.
if (!isset($_SESSION['redirected']) or empty($_SESSION['redirected']) or $_SESSION['redirected'] == '') {
    echo 'Access Denied';
    exit; 
    //Otherwise if redirected variable is set, empty the variable and display the web page.
  } else if ($_SESSION['redirected'] == True){
    $_SESSION['redirected'] = '';

} else {
    echo 'Error';
}
?> 
<head>

<title>LOGIN</title>

<link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>

 <form action="login.php" method="post">

    <h2>LOGIN</h2>

    <?php if (isset($_GET['error'])) { ?>

        <p class="error"><?php echo $_GET['error']; ?></p>

    <?php } ?>

    <label>User Name</label>

    <input type="text" name="username" placeholder="User Name"><br>

    <label>Password</label>

    <input type="password" name="password" placeholder="Password"><br> 

    <button type="submit">Login</button>


 </form>

</body>

<?php
//Source: https://www.w3schools.com/php/php_mysql_connect.asp

// Database authentication credentials
$MySQLservername = "bestsiteever.com";
$MySQLusername = "root";
$MySQLpassword = "IncrediblySecurePassword1337";
$MySQLdbName = "BestDatabaseEver";

// Connect to MySQL Database
$conn = new mysqli($MySQLservername, $MySQLusername, $MySQLpassword);

// Check database connection
if ($conn->connect_error) {
  die("Connection to database failed.");
}
else{
    echo "Connected successfully";
}

$sqlQuery = 'SELECT * FROM LoginData WHERE Username ="' + $username + '" AND Password ="' + $password + '"';
$sqlResponse = $sqlQuery->query($sqlQuery);
//'SELECT UserID, Username, Password, Email FROM LoginData WHERE Username =' + $username + 'AND '; 


//Closes connection to the database.
$conn->close(); 



?>


<html>

</html>
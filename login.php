<!DOCTYPE html>
<?php
//Source: https://www.w3schools.com/php/php_mysql_connect.asp
//Login Form Source: https://www.simplilearn.com/tutorials/php-tutorial/php-login-form

// Starts the PHP session, to allow persistence of variables between web pages.
session_start();
// //Checks if the the session variable 'redirected' is set, deny access if empty.
/*if (!isset($_SESSION['redirected']) or empty($_SESSION['redirected']) or $_SESSION['redirected'] == '') {
    echo 'Access Denied';
    exit; 
    //Otherwise if redirected variable is set, empty the variable and display the web page.
  } else if ($_SESSION['redirected'] == True){
    $_SESSION['redirected'] = '';

} else {
    echo 'Error';
}
*/
//?> 
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
    <input type="submit" name = "submitButton" value="Login">


 </form>

</body>

<?php

// Connect to MySQL Database
function connectToDB(){
// Database authentication credentials
$MySQLservername = "bestsiteever.com";
$MySQLusername = "root";
$MySQLpassword = "IncrediblySecurePassword1337";
$MySQLdbName = "BestDatabaseEver";
$conn = new mysqli($MySQLservername, $MySQLusername, $MySQLpassword, $MySQLdbName);

// Check database connection
if ($conn->connect_error) {
    die("Connection to database failed.");
  }
  else{
      echo "Connected successfully";
      return $conn;
  }


}

function loginQuery($conn, $username, $password){
    $sql = 'SELECT Username, Password, Email FROM LoginData WHERE Username ="' . $username . '" AND Password ="' . $password . '"';
        //$sql = 'SELECT Username, Password, Email FROM LoginData';
        $query = mysqli_query($conn, $sql)
        or die ("Bad Query");
        return $query;
           

}

function loginForm($conn, $username, $password){
    $result = loginQuery($conn, $username, $password);
    $matchFound = mysqli_num_rows($result);
    if ($matchFound > 0){
        echo ("Login Successful");
        displayQueryResults($result);
        $cookieName = $username;
        $cookieValue = session_id();
        $time = time()+(86400 * 1); // 1 Day Expiration
        setcookie("$cookieName", "$cookieValue", $time);

    } else{
        echo ("Login Failed, please try again");

    }

   }

function displayQueryResults($results){
    while($row = mysqli_fetch_assoc($results)){
        echo"<br>";
        print_r($row);
    }

}

function validateLogin($cookieName){


}

function login()
{
// Connect to MySQL Database
$DBconn = connectToDB();
//Test User Data
$testUsername = 'bmcgauhy0';
$testPass = 'jgm1Ow0rm';	

//$result = loginQuery($DBconn, $testUsername, $testPass);

//$matchFound = mysqli_num_rows($result);
loginForm($DBconn, $testUsername, $testPass);

//var_dump($_POST);
//displayQueryResults($result);

}

/////////////
login();

?>


<html>

</html>
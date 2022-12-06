<?php
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
      return $conn;
  }


}

function loginQuery($conn, $username, $password){
    $sql = 'SELECT Username, Password, Email FROM LoginData WHERE Username ="' . $username . '" AND Password ="' . $password . '"';
        $query = mysqli_query($conn, $sql)
        or die ("Bad Query");
        echo($sql);
        echo('<br>');
        return $query;
           

}
function resetPasswordQuery($conn, $username){
    $sql = 'SELECT SecurityQ1, SecurityQ2, SecurityQ3 FROM LoginData WHERE Username ="' . $username . '"';
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
        $cookieName = 'User';
        $cookieValue = $username;
        $time = time()+(86400 * 1); // 1 Day Expiration
        setcookie("$cookieName", "$cookieValue", $time);
        $_SESSION['Logged In'] = 1;

    } else{
        echo ("Login Failed, please try again");
        $_SESSION['Logged In'] = 0;

    }

   }
function task7(){
    if (isset($_SESSION['task7flag1']) AND $_SESSION['task7flag1'] == 1 AND isset($_SESSION['task7flag2']) AND $_SESSION['task7flag2'] = 1){
        echo("Congratulations on resetting an admin password! Here's the flag: !TerribleAuthenticationSystems!");
    }

}

function checkIfUserExists($username){
    $conn = connectToDB();
    $result = mysqli_query($conn, 'SELECT Username FROM LoginData WHERE Username ="' . $username . '"');
    $matchFound = mysqli_num_rows($result);
    if ($matchFound > 0){
        return true;

    } else{
        return false;
}
$conn -> close();
}

function getAccountInfo(){
    if(validateLogin() == True){
        
        $conn = connectToDB();
        //print_r($_COOKIE);
        echo($_COOKIE['User']);
        $sql = 'SELECT Username, Email FROM LoginData WHERE Username ="' . $_COOKIE['User'] . '"';
        $query = mysqli_query($conn, $sql)
        or die ("Bad Query");
        return $query;

    } else {
        echo("Error: Bad Pass");
    }
    $conn -> close();
}

function changePassword($username, $newPass){
    $conn = connectToDB();
    $sql = "UPDATE LoginData SET Password ='$newPass' WHERE Username ='$username'";
    $result = mysqli_query($conn, $sql);
    $conn -> close();

}

function displayQueryResults($results){
    while($row = mysqli_fetch_assoc($results)){
        echo"<br>";
        print_r($row);
    }

}

function validateLogin(){
    if(isset($_COOKIE['User']) AND isset($_SESSION['Logged In']) AND $_SESSION['Logged In'] == 1){
        $value = $_COOKIE['User'];
        return True;

    } else {
        return False;
    }


}

//Takes and passes variables to the login form function.
function login(){
    $DBconn = connectToDB();    

    //Test User Data
    $tempUsername = $_POST['username'];
    $tempPass = $_POST['password'];	
    loginForm($DBconn, $tempUsername, $tempPass);
    $DBconn -> close();

}
function resetPasswordForm(){
    $testUsername = $_POST['username'];
    $_SESSION['Username'] = $testUsername;
    $conn = connectToDB();
    $resetResults = resetPasswordQuery($conn, $_SESSION['Username']);
    $array = mysqli_fetch_assoc($resetResults);
    var_dump ($array);
    if (isset($array)){
        $page = 'SecurityCheck.php';
        $_SESSION['Q1'] = $array['SecurityQ1'];
        $_SESSION['Q2'] = $array['SecurityQ2'];
        $_SESSION['Q3'] = $array['SecurityQ3'];
        header('location: '. $page); 
    };
    


    //displayQueryResults($resetResults);
    $conn -> close();


    
    
    
}


?>
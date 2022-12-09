<?php
// Connect to the MySQL database using provided authentication credentials
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

// Construct and execute a SQL query to retrieve user data based on a username and password
function loginQuery($conn, $username, $password){
  // Construct the SQL query
  $sql = 'SELECT Username, Password, Email FROM LoginData WHERE Username ="' . $username . '" AND Password ="' . $password . '"';
  // Execute the query
  $query = mysqli_query($conn, $sql)
  or die ("Bad Query");
  // Echo the query for debugging purposes
  echo('<br>');
  echo($sql);
  echo('<br>');
  return $query;
}

// Construct and execute a SQL query to retrieve security question data based on a username
function resetPasswordQuery($conn, $username){
  // Construct the SQL query
  $sql = 'SELECT SecurityQ1, SecurityQ2, SecurityQ3 FROM LoginData WHERE Username ="' . $username . '"';
  // Execute the query
  $query = mysqli_query($conn, $sql)
  or die ("Bad Query");
  return $query;
}

// Process a login request and display a message indicating the success or failure of the login
function loginForm($conn, $username, $password){
  // Retrieve the results of the login query
  $result = loginQuery($conn, $username, $password);
  // Count the number of matches found in the results
  $matchFound = mysqli_num_rows($result);
  //

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
        echo('<br>');
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
        $conn -> close();

    } else {
        echo('<br>');
        echo("Access Denied");
    }
   
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
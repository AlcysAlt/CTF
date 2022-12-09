<!DOCTYPE html>
<html>
<body>

    <!----------Title Table---------->
    <table align="center">
        <tr>
            <th>
            <h1>Best Site Ever</h1
            </th>
            <th>
        </tr>   
    </table>
 

    <!----------Content Table---------->
    <table align="center">
        <tr>
            <th>
                <article>
                    <p>Welcome to the best site ever!</p>
                </article>
                <section>
                    <p style="font-size:15px">  </p>
                </section>

            </th>

        </tr>
        <tr>
        </tr>
        
    </table>
  
    
<!--Remember to remove in final build!
//Best Default Credentials Ever//
username: User
password: SecurePa??word123 
-->
</body>
</html>




<html>
    

</html>
<?php
// Starts the PHP session, to allow persistence of variables between web pages.
session_start();
if (isset($_POST['submit']) AND $_POST['submit'] == 'Login'){
    
}
//Sets a session variable which allows a web page to identify that the user has been redirected from a web page on the same server.
$_SESSION['redirected'] = False;
//Checks if the the page variable from the address bar is set.
if (isset($_GET['page']) and !empty($_GET['page']) and $_GET['page'] !== ''){
    //If the page variable is set, check what it's set to, and redirect to the appropriate page.
    switch($_GET['page'])
    {
        case 1:
            //Sets session variable 'Redirected' to True.
            $_SESSION['redirected'] = True;
            //Sets a page variable
            $page = 'page1.php'; 
            //Changes the HTTP Header to the location of the page, the user is trying to access. Redirecting them to it.
            header('location: '. $page); 
            break;
        case 2:
            $_SESSION['redirected'] = True;
            $page = 'page2.php';
            header('location: '. $page); 
            break;
        case 'secret.php':
            //Deny access if the user is trying to access the secret page.
            echo 'Access Denied';
            break;
    
        default:
        //By default, if the web page the user is trying to access isn't listed above, attempt to redirect them to the page they specify.
            $_SESSION['redirected'] = True;
            $page = $_GET['page'];
            header('location: '. $page); 
            break;
    };
    //If the page variable is empty, it shows an Access Denied Error
} else {
    $_SESSION['redirected'] = False;
    echo ('<br>');

}
?>
<html>


    <!----------Footer---------->
    <br>
    <footer>
        <table align="center">
        <tr>
            <td>
            <a href="http://bestsiteever.com/CTF/index.php"> Home </a>
            </td>
            <td>
            |
            </td>
            <td>
            <a href="http://bestsiteever.com/CTF/index.php?page=aboutUs.php"> About Us </a>
            </td>
            <td>
            |
            </td>
            <td>
                <a href="http://bestsiteever.com/CTF/account.php"> Account </a>
            </td>
            <td>
                |
            </td>
            <td>
                <a href="http://bestsiteever.com/CTF/index.php?page=login.php"> Log In </a>
            </td>
            <td>
            |
            </td>
            <td>
                <a href="http://bestsiteever.com/CTF/index.php?page=gallery.php"> Gallery</a>
            </td>
            <td>
            |
            </td>
            <td>
                <a href="http://bestsiteever.com/CTF/index.php?page=feedback.php"> Feedback </a>
            </td>
        </tr>

        </table>
        <table align="center">
            <tr>
                <th>
                    <p style="font-size:12px">Copyright &copy1833</p>
                </th>
            </tr>

        </table>

    </footer>
</html>
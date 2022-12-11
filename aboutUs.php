<html>
<body>

    <!----------Title Table---------->
    <table align="center">
        <tr>
            <th>
            <h1>About Us</h1>
            <h2>Meet the team</h2>
            <h2>CEO: Jane Johnson</h2>
      <img src="imgs/red.png" alt="Image 1">
      <p>Email: jjohnson@bestdomain.biz</p>
      <p>Best Website Ever is proud to introduce our CEO, who was born and raised in New York and is a lifelong Star Wars fan. With her passion for technology and business, combined with her creative perspective inspired by science fiction, she brings a unique and valuable skillset to our company. As a New York native, she has an in-depth understanding of the city's tech scene and is dedicated to helping Best Website Ever thrive. We are confident in her leadership and are excited for the future of our company. Thank you for considering us for your website needs.</p>
    
    <h2>Technical Director: William Thompson</h2>
      <img src="imgs/green.png" alt="Image 2">
      <p>Email: wthompson@bestdomain.biz</p>
      <p>Best Website Ever is pleased to introduce our Technical Director, who was born and raised in Los Angeles. With his passion for technology and expertise in computer science, he brings a valuable perspective to our company. As a native of the city's vibrant tech scene, he is dedicated to helping Best Website Ever thrive. We are confident in his leadership and look forward to a successful future. Thank you for considering us for your website needs.</p>

    <h2>Marketing Manager: Stephen Anderson </h2>
      <img src="imgs/blue.png" alt="Image 4">
      <p>Email: sanderson@bestdomain.biz</p>
      <p>Best Website Ever is pleased to introduce our Marketing Manager, a Cleveland native with a passion for innovation and a strong background in marketing. He brings a valuable perspective to our company and is dedicated to helping us thrive in this market. With his leadership, we are confident in our future success. Thank you for considering us for your website needs.</p>
      
            </th>
            <th>
        </tr>   
    </table>
  
    
<?php
session_start();
$_SESSION['redirected'] = False;
$_SESSION['secret'] = False;
?>



    
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

</body>
</html>

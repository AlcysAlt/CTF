
<!DOCTYPE html>
<html>
<body>
  <!----------Title Table---------->
  <table align="center">
        <tr>
            <th>
            <h1>Best Gallery Ever</h1>
            <?php
            session_start();
             $_SESSION['secret'] = False;
error_reporting(E_ALL & ~E_NOTICE);
//Code source: https://www.w3schools.com/php/php_file_upload.asp
$files = glob("uploads/*.*");
for ($i = 0; $i < count($files); $i++) {
    $image = $files[$i];
    echo basename($image) . "<br />";
    echo '<img src="' . $image . '" alt="" />' . "<br /><br />";

}

//Code source: https://www.w3schools.com/php/php_file_upload.asp


if(isset($_POST["submit"]) AND isset($_FILES["fileToUpload"]) AND $_FILES["fileToUpload"]["error"] === UPLOAD_ERR_OK) {
    $target_dir = "./uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
      echo("<br />");
      echo "File is an image - " . $check["mime"] . ".";
      echo "<br />";
    } else {
      echo("<br />");
      echo "!ThatFileWasNotAnImage!";
      echo("<br />");
    }

// Check if file already exists
if (file_exists($target_file)) {
  echo("<br />");
  echo "Sorry, file already exists.";
  echo("<br />");
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo("<br />");
  echo "Sorry, your file is too large.";
  echo("<br />");
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo("<br />");
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  echo("<br />");
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo("<br />");
  echo "Sorry, your file was not uploaded.";
  echo("<br />");
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo("<br />");
    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
    echo("<br />");
  } else {
    echo("<br />");
    echo "Sorry, there was an error uploading your file.";
    echo("<br />");
  }
}


}
$_SESSION['redirected'] = '';
$_SESSION['secret'] = false;

?>
<form action="gallery.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">
</form>

            </th>
            <th>
        </tr>   
    </table>
</body>
</html>
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
            <a href="http://bestsiteever.com/CTF/aboutUs.php"> About Us </a>
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
                <a href="http://bestsiteever.com/CTF/gallery.php"> Gallery</a>
            </td>
            <td>
            |
            </td>
            <td>
                <a href="http://bestsiteever.com/CTF/feedback.php"> Feedback </a>
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







<form action="fb2.php" method="POST">
  <textarea name="comment" placeholder="Enter your comment"></textarea><br>
  <input type="submit" value="Submit">
</form>

<!-- Add a button to clear the comments file -->
<form action="fb2.php" method="POST">
  <input type="submit" name="clear_comments" value="Clear Comments">
</form>

<?php

// Check if the 'clear_comments' variable is set in the POST request
if (isset($_POST['clear_comments'])) {
  // Clear the contents of the comments file
  file_put_contents("comments.txt", "");
}

// Check if the 'comment' variable is set in the POST request
if (isset($_POST['comment'])) {
  $comment = $_POST['comment'];

  // Append the comment to the comments file, with a newline character at the end
  //file_put_contents("comments.txt", "$comment\n", FILE_APPEND);

  // This line is still vulnerable to OS command injection
  $output = system("echo $comment >> comments.txt");
  // Read the contents of the comments file

}
$comments = file_get_contents("comments.txt");

// Explode the comments into an array of lines
$lines = explode("\n", $comments);

// Display each comment on a separate line
foreach ($lines as $line) {
  echo "$line<br>";
}

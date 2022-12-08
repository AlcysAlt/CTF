<form action="add_comment.php" method="POST">
  <textarea name="comment" placeholder="Enter your comment"></textarea><br>
  <input type="submit" value="Submit">
</form>

<?php
$comment = $_POST['comment'];

// This line is vulnerable to OS command injection
system("echo $comment >> comments.txt");

$comments = file_get_contents("comments.txt");
echo $comments;

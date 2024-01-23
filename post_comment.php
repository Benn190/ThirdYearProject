<?php
require_once "connect_db.php";
session_start();
if (! isset($_SESSION["user_id"])){
    header('Location: '."./register.php");
  }
if (isset($_POST['comment']) && isset($_POST['post_id'])) {
    $user_id = $_SESSION['user_id'];
    $post_id = $_POST['post_id'];
    $comment = $_POST['comment'];

    //Add the comment to the database
    $add_commentsSTMT = pg_prepare($conn, "add_comment", "INSERT INTO comments (user_id, post_id, text) VALUES ($1, $2, $3)");
    $add_commentRESULT = pg_execute($conn, "add_comment", array($user_id, $post_id, $comment));

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <form action="post_comment.php" method="post"></form>
<?php
$post_id = 10;
echo("<input type='hidden' id='custId' name='custId' value=$post_id>");
?>
    <textarea name="comment" id="comment" cols="30" rows="10"></textarea>
    <button name="submit" type="submit"></button>
</body>
</html>
<?php
require_once "connect_db.php";
session_start();
if (! isset($_SESSION["user_id"])){
    header('Location: '."./register.php");
  }
if (isset($_POST['like']) && isset($_POST['post_id'])) {
    $user_id = $_SESSION['user_id'];
    $post_id = $_POST['post_id'];
    
        $remove_likeSTMT = pg_prepare($conn, "remove_like", "DELETE FROM posts WHERE user_id = $1 AND post_id = $2");
        $remove_likeRESULT = pg_execute($conn, "remove_like", array($user_id, $post_id));
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
<form method='post' action='delete_post.php'>
<?php
//hardcoded for testing
$post_id = 10;
echo "<input type='hidden' name='post_id' value='$post_id'>"
?>
<input type='submit' name='delete' value='delete'>
</form>
    
</body>
</html>
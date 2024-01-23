<?php
require_once "connect_db.php";
session_start();
if (! isset($_SESSION["user_id"])){
    header('Location: '."./register.php");
  }
if (isset($_POST['like']) && isset($_POST['post_id'])) {
    $user_id = $_SESSION['user_id'];
    $post_id = $_POST['post_id'];
    $check_likeSTMT = pg_prepare($conn, "check_like", "SELECT * FROM likes WHERE user_id = $1 AND post_id = $2");
    $check_likeRESULT = pg_execute($conn, "check_like", array($user_id, $post_id));
    $alreadyLiked = pg_num_rows($check_likeRESULT) > 0;

    if ( ! $alreadyLiked) {
        $add_likeSTMT = pg_prepare($conn, "add_like", "INSERT INTO likes (user_id, post_id) VALUES ($1, $2)");
        $add_likeRESULT = pg_execute($conn, "add_like", array($user_id, $post_id));
        echo "liking!";
    } else{
        $remove_likeSTMT = pg_prepare($conn, "remove_like", "DELETE FROM likes WHERE user_id = $1 AND post_id = $2");
        $remove_likeRESULT = pg_execute($conn, "remove_like", array($user_id, $post_id));
        echo "removing like";
    }
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
<form method='post' action='post_like.php'>
<?php
$post_id = 10;
echo "<input type='hidden' name='post_id' value='$post_id'>"
?>
<input type='submit' name='like' value='Like'>
</form>
    
</body>
</html>
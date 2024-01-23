<?php
require_once "connect_db.php";
session_start();
if (isset($_POST['like']) && isset($_POST['post_id'])) {
    $add_likeSTMT = pg_prepare($conn, "insert_user", "INSERT INTO likes (user_id, post_id) VALUES ($1, $2)");

    $user_id = $_SESSION['user_id'];
    $post_id = $_POST['post_id'];
    $add_likeRESULT = pg_execute($conn, array($user_id, $post_id));
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
echo "<input type='hidden' name='post_id' value='$postId'>"
?>
<input type='submit' name='like' value='Like'>
</form>
    
</body>
</html>
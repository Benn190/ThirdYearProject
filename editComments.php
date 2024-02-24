<?php
    session_id("userSession");
    session_start();
    if (!isset($_SESSION["username"])) {
        header('Location: ' . "register.php");
    }

    require_once "connect_db.php";


include 'comments.php';
date_default_timezone_set("Europe/London");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$id =  $_POST['id'];
$user_id =  $_POST['user_id'];
$date =  $_POST['date'];
$message =  $_POST['message'];

echo" <form method = 'POST' action = '".editComments($conn)."' >
    <input type='hidden' name='id' value= '".$id."'>
    <input type='hidden' name='user_id' value= '".$user_id."'>
    <input type='hidden' name='date' value= '".$date."'>
    <textarea name='message'> ".$message." </textarea> <br>
    <button type='submit' name = 'commentSubmit'>Edit</button>
</form>";

?>

</body>
</html>

<?php

session_id("userSession");
    session_start();
    if (!isset($_SESSION["username"])) {
        header('Location: ' . "register.php");
    }

    require_once "connect_db.php";
function setComments($conn){

    if (isset ($_POST['commentSubmit'])){
        $user_id =  $_POST['user_id'];
        $date =  $_POST['date'];
        $message =  $_POST['message'];

        $query = "INSERT INTO comments(user_id, date, message) VALUES($1, $2, $3)";
        $result = pg_query_params($conn, $query, array($user_id, $date, $message));

    }
    

}
?>

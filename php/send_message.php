<?php
session_start();
if (!isset($_SESSION["username"])) {
    header('Location: ' . "./login.php");
}

require_once "../php/connect_db.php";

$username = $_SESSION["username"];

$stmt = pg_prepare($conn, "sent_message", "INSERT INTO messages (username, recipient) VALUES ($1, $2) RETURNING messageID");
$username = $_SESSION['username'];
$recipient = $_POST['recipient'];
$result = pg_execute($conn, "sent_message", array($username, $recipient));
         if ($result) {
            echo "Post created successfully!";
            $postid = pg_fetch_result($result, 0, 'messageID');

        } else {
            echo "Error: " . pg_last_error($conn);
            die();
        }
        // Close the connection
        pg_close($conn);
        header('Location: '."../html/Messages.php");
        ?>
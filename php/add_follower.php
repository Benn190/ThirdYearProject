<?php

require_once "../php/connect_db.php";

session_id("userSession");
session_start();
if (!isset($_SESSION["username"])) {
    header('Location: ' . "./login.php");
    exit(); // Make sure to exit after redirecting
}
$login_username = $_SESSION["username"];
session_write_close();
session_id("groupSession");
session_start();
// Get passed product genre and assign it to a variable.
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $_SESSION["groupid"] = $id;
}
$groupid = $_SESSION["groupid"];

// Corrected variable names
$followee = $_GET['name'];
$group = $_SESSION['groupid']; // Using session variable directly

// Assuming $conn is properly initialized
$stmt = pg_prepare($conn, "followers", "INSERT INTO  follows (username, followee) VALUES ($1, $2)");
$result = pg_execute($conn, "followers", array( $login_username, $followee)); // Using $result instead of $result2
if ($result) {
   header ('Location: ../html/messages.php');
} else {
    echo "Error: " . pg_last_error($conn);
    die();
}
pg_close($conn);
?>


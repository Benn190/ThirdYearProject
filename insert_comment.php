<?php
session_start();
require_once "connect_db.php";
if (! isset($_SESSION["user_id"])){
    header('Location: '."./register.php");
}

require_once "../php/connect_db.php";

$name = $userDetails['user_name'];
$comments = $_REQUEST['comments'];

require("inc/database_connection.php");

// Assuming $conn is the PostgreSQL connection object
$query = "INSERT INTO comments(name, comments) VALUES($1, $2)";
$result = pg_query_params($conn, $query, array($name, $comments));

if (!$result) {
    // Handle error
    echo "Error inserting data: " . pg_last_error($conn);
} else {
    echo "Comment inserted";
}

pg_close($conn);
?>

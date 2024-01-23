<?php
# opening session
session_start();
# connect to database
require_once "connect_db.php";
# if user not logged in - display register.php page
if (!isset($_SESSION["user_id"])){
    header('Location: ' . './register.php');
    exit();
}
# display groups which contain user's id 
$user_id = (int)$_SESSION["user_id"]; // Cast to integer to prevent SQL injection

# display groups which contain user's id 
$q = "SELECT * FROM groups WHERE userID=$user_id";
$r = pg_query($conn, $q);

if ($r) {
    if (pg_num_rows($r) > 0) {
        while ($row = pg_fetch_assoc($r)) {
            $group = $row["group_name"];
            echo "<div>";
            echo "<h2>{$group}</h2>";
            echo "</div>";
        }
    } else {
        echo "No groups yet...";
    }
} else {
    echo "Error in query: " . pg_last_error($conn);
}

pg_close($conn);
?>

<?php
session_start();
if (! isset($_SESSION["user_id"])){
    header('Location: '."./register.php"); // redirect the user to the register page if they have not already logged in
}
// Assuming you have a database connection
if (isset($_POST['register'])) {
    // Connect to the database
    require_once "connect_db.php";

        $query = pg_prepare("SELECT * FROM posts ORDER BY id DESC");
        $result = pg_query($conn, $query);
}
// Check connection
if (pg_num_rows ($result) > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        $post = $row["post"];
        $text = $row["text"];
        $username = $row["username"];
        $name = $row["name"];
        $profile = $row["profile"];

        // Display the post on the home page
        echo "<div>";
        echo "<h2>{$post}</h2>";
        echo "<h2>Author: {$name} (@{$username})</h2>"; // Displaying author's name and username
        echo "<p>{$text}</p>";
        echo "<img src='{$profile}' alt='Profile Picture'>"; // Displaying author's profile picture
        echo "</div>";
    }

} else {
    echo "No posts found.";
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>

</body>
</html> -->

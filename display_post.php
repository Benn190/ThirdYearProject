<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts Display</title>
    <!-- Add any additional styles or meta tags as needed -->
</head>

<body>

    <?php
    session_start();
    if (!isset($_SESSION["user_id"])) {
        header('Location: ' . "./register.php"); // Redirect the user to the register page if they have not already logged in
    }

    // Assuming you have a database connection
    require_once "connect_db.php";

    $query = "SELECT * FROM posts ORDER BY id DESC";
    $result = pg_query($conn, $query);

    // Check connection
    if ($result) {
        // Output data of each row
        while ($row = pg_fetch_assoc($result)) {
            $postTitle = $row["post"];
            $text = $row["text"];
            $username = $row["username"];
            $name = $row["name"];
            $profile = $row["profile"];

            // Display the post on the page
            echo "<div>";
            echo "<h2>{$postTitle}</h2>";
            echo "<h2>Author: {$name} (@{$username})</h2>";
            echo "<p>{$text}</p>";
            echo "<img src='{$profile}' alt='Profile Picture'>";
            echo "</div>";
        }
    } else {
        echo "No posts found.";
    }

    // Close the database connection
    pg_close($conn);
    ?>

</body>

</html>

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

    $query = "SELECT post_id, text, users.user_id, username, full_name  FROM posts INNER JOIN users ON users.user_id = posts.user_id ORDER BY post_id DESC";
    $result = pg_query($conn, $query);

    // Check connection
    if ($result) {
        // Output data of each row
        while ($row = pg_fetch_assoc($result)) {
            $text = $row["text"];
            $username = $row["username"];
            $full_name = $row["full_name"];
            $post_id = $row["post_id"];
            $post_image_path = "../post_images/post_image" . $post_id . ".png";

            // Display the post on the page
            echo "<div>";
            echo "<h2>Author: {$full_name} (@{$username})</h2>";
            echo "<p>{$text}</p>";
            echo "<img src=$post_image_path alt='Post Image'>";
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

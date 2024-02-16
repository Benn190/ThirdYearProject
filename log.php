<?php
require("inc/database_connection.php");

$query = "SELECT * FROM comments ORDER BY id ASC";
$result = pg_query($conn, $query);

if (!$result) {
    echo "Error executing query: " . pg_last_error($conn);
} else {
    while ($row = pg_fetch_assoc($result)) {
        echo "<div class='chat'>";
        echo "<h4>" . $row['name'] . "</h4>";
        echo "<h5>" . $row['date_publish'] . "</h5>";
        echo "<p>" . $row['comments'] . "</p>";
        echo "</div><br></br>";
    }
}

pg_close($conn);
?>

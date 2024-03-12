<?php
$host = "kandula.db.elephantsql.com";
$port = "5432";
$dbname = "vfqjpwel";
$user = "vfqjpwel";
$password = "cFs0XFyubfNelPRIoab5EJcJX6XGA1Y5";

$conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");

if ($conn) {
    $query = "SELECT * FROM accounts";
    $result = pg_query($conn, $query);
    if (!$result) {
        echo "Error executing query: " . pg_last_error($conn);
    } else {
        while($row = pg_fetch_assoc($result)) {
            echo $row['username'];
        }
        echo "Data fetched successfully!";
    }
} else {
    echo "Cannot connect to database!";
}
 

// Close the connection
pg_close($conn);
?>

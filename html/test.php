<?php
$host = "kandula.db.elephantsql.com";
$port = "5432";
$dbname = "vfqjpwel";
$user = "vfqjpwel";
$password = "cFs0XFyubfNelPRIoab5EJcJX6XGA1Y5";

$conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");

if ($conn) {
    $query = pg_prepare($conn, "a", "SELECT * FROM accounts ");
    $result = pg_execute($conn, "a");
    while($row = pg_fetch_assoc($result))
    {
        echo $row['username'];

    }
    echo "Connection to database successful!";
} else {
    echo "Cannot connect to database!";
}

// Close the connection
pg_close($conn);
?>

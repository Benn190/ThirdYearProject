<?php
if (isset($_POST['register'])) {
    // Connect to the database
  require_once "connect_db.php";

    // Prepare and execute the SQL statement
    $stmt = pg_prepare($conn, "insert_user", "INSERT INTO users (username, email, password) VALUES ($1, $2, $3) RETURNING user_id");
    
    // Get the form data
    //$name = $_POST["name"];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Hash the password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // Execute the SQL statement
    $result = pg_execute($conn, "insert_user", array($username, $email, $password));

    // Check the result
    if ($result) {
        echo "New account created successfully!";
        $user_id = pg_fetch_result($result, 0, 'user_id');
        session_start();
        $_SESSION['user_id'] = $user_id;
        $_SESSION['username'] = $username;
        header('Location: '."./create_group.php");
    } else {
        echo "Error: " . pg_last_error($conn);
    }

    // Close the connection
    pg_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="register.php" method="post">
<label for="name">Full name:</label> 
  <input id="name" name="name" type="text"/>
  <label for="username">Username:</label> 
  <input id="username" name="username" required="" type="text"/>
  <label for="email">Email:</label>
  <input id="email" name="email" required="" type="email" />
  <label for="password">Password:</label>
  <input id="password" name="password" required="" type="password" />
  <input name="register" type="submit" value="Register" />
</form>
</body>
</html>
<?php
require_once "connect_db";
$stmt = pg_prepare($pg_conn, "insert_user", "INSERT INTO users (username, email, password) VALUES ($1, $2, $3)");






pg_close($conn);
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
  <label for="username">Username:</label> 
  <input id="username" name="username" required="" type="text" />
  <label for="email">Email:</label>
  <input id="email" name="email" required="" type="email" />
  <label for="password">Password:</label>
  <input id="password" name="password" required="" type="password" />
  <input name="register" type="submit" value="Register" />
</form>
</body>
</html>
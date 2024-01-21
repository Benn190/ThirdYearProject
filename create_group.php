<?php
require_once "connect_db";
if (isset($_POST['listValues'])) {
    $inputUsers = $_POST['listValues'];
    $usersArray = explode(', ', $inputUsers); // Seperate the user's inputted comma seperated list of users and break them apart into an array
    foreach($usersArray as $user){
    pg_query("SELECT * FROM users WHERE username =" . "'" . $user . "';");
    }

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
<form action="create_group.php" method="post">
<label for="group_name">Group name:</label> 
  <input id="group_name" name="name" type="text"/>
  <label for="listValues">Enter a list of initial group member usernames (not including yourself) separated by commas with a space after each comma:</label>
  <input type="text" id="listValues" name="listValues">
  <br>
  <input type="submit" value="Submit">
</form>
</body>
</html>
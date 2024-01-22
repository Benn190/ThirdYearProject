<?php
session_start();
require_once "connect_db.php";
if (! isset($_SESSION["user_id"])){
  header('Location: '."./register.php");
}
if (isset($_POST['listValues']) && isset($_POST["name"])) {
    $inputUsers = $_POST['listValues'];
    $groupName = $_POST['name'];
    $usersArray = explode(', ', $inputUsers); // Seperate the user's inputted comma seperated list of users and break them apart into an array

    $createGroupSTMT = pg_prepare($conn, "createGroup", "INSERT INTO groups (group_name, managerID) VALUES ($1, $2) RETURNING groupID"); // add the group to the database
    $createGroupRESULT = pg_execute($conn, "createGroup", array($groupName, $_SESSION["user_id"]));
    $groupID = pg_fetch_assoc($createGroupRESULT)['groupid']; // Get the group id of the newly created group to be used when adding members to the group

    $usernameQuerySTMT = pg_prepare($conn, "usernameQuery", "SELECT * FROM users WHERE username = $1");
    $addGroupMemberSTMT = pg_prepare($conn, "addGroupMember", "INSERT INTO groupMembers (groupID, userID) VALUES ($1, $2)");

    foreach($usersArray as $user){
      $usernameQueryRESULT = pg_execute($conn, "usernameQuery", array($user));
      $numRows = pg_num_rows($usernameQueryRESULT); // Check if there are any users with that username
      if ($numRows == 0){
        echo ("No users with that name!");
      } else{
        $userID = pg_fetch_assoc($usernameQueryRESULT)["user_id"]; // Grab the user_id of the user with the queried username if they do exist
        $addGroupMemberRESULT = pg_execute($conn, "addGroupMember", array($groupID, $userID)); // Add them to the database as a member of the created group
      }
    }

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
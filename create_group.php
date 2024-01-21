<?php
require_once "connect_db.php";
if (isset($_POST['listValues']) && isset($_POST["name"])) {
    $inputUsers = $_POST['listValues'];
    $groupName = $_POST['name'];
    $usersArray = explode(', ', $inputUsers); // Seperate the user's inputted comma seperated list of users and break them apart into an array

    $createGroupSTMT = pg_prepare($conn, "createGroup", "INSERT INTO groups (group_name, managerID) VALUES ($1, $2) RETURNING groupID");
    $createGroupRESULT = pg_execute($conn, "createGroup", array($groupName, $_SESSION["username"]));
    $groupID = pg_fetch_assoc($result)['groupID'];

    $usernameQuerySTMT = pg_prepare($conn, "usernameQuery", "SELECT * FROM users WHERE username = '$1'");
    $addGroupMemberSTMT = pg_prepare($conn, "addGroupMember", "INSERT INTO groupMembers (groupID, userID) VALUES ($1, $2)");

    foreach($usersArray as $user){
      $usernameQueryRESULT = pg_execute($conn, "usernameQuery", array($user));
      $numRows = pg_num_rows($usernameQueryRESULT);
      if ($numRows == 0){
        echo ("No users with that name!");
      } else{
        $userID = pg_fetch_assoc($result)["userID"];
        $addGroupMemberRESULT = pg_execute($conn, "addGroupMember", array($groupID, $userID));
      }
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
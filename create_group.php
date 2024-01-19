<?php
if (isset($_POST['listValues'])) {
    $inputValues = $_POST['listValues'];
    $valuesArray = explode(', ', $inputValues);
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
  <label for="listValues">Enter a list of initial group member usernames (not including yourself) separated by commas:</label>
  <input type="text" id="listValues" name="listValues">
  <br>
  <input type="submit" value="Submit">
</form>
</body>
</html>
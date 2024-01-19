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
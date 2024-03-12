<?php
 "$host = \"kandula.db.elephantsql.com\"; 
 $port = \"5432\"; 
 $dbname = \"vfqjpwel\"; 
 $user = \"vfqjpwel\"; 
 $password = \"cFs0XFyubfNelPRIoab5EJcJX6XGA1Y5\";  
 $conn = pg_connect(\"host=$host port=$port dbname=$dbname user=$user password=$password\");"

if (!$conn) { 
# Display error masseage, if fail 
die('Could not connect to pgSQL: ' . pg_last_error()); 
} 


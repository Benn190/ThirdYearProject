<?php
#opening session
session_start();
#connect to database
require_once "connect_db.php";
#if user not log in - display registe.php page
if (! isset($_SESSION["user_id"])){
  header('Location: '."./register.php");
}
#display groups which contanin user's id 
$q = "SELECT * FROM groups WHERE username = $1";
$r = pg_query($conn, $q);

if (pg_num_rows($r) > 0) {
    while ($row = pg_fetch_assoc($r)) 
    {
        echo '<div class="col-sm-12 col-md-4">
        <p>'.$row['group_name'].'</p>
        
        
    </div>';
    }
}


pg_close($conn);

?>

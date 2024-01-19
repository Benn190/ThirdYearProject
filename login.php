<?php
  include "connect_db.php";
?>

<!DOCTYPE html>
<html>
<head>

  <title>User Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<section>
  <div>
    <br>
    <div>
        <h1>ShareSync</h1>
        <h1>User Login Form</h1><br>
      <form  name="login" action="" method="post">
        <b><p style ="padding-left: 50px ; font-size :15px; font-weight :700;"> Login as </p></b>
        
        <div class="login">
          <input type="text" name="username" placeholder="Username" required=""> <br>
          <input type="password" name="password" placeholder="Password" required=""> <br>
          <input type="submit" name="submit" value="Login"> 
        </div>
      
      <p>
        <br><br>
        <a href="update_password.php">Forgot password?</a>
        New to this website?<a href="registration.php">Sign Up</a>
      </p>
    </form>
    </div>
  </div>
</section>
<?php

    if(isset($_POST['submit'])){
      $username = isset($_POST['username']) ? trim($_POST['username']) : '';
      $password = isset($_POST['password']) ? $_POST['password'] : '';
      
      if ($_POST['user']=='admin')
      {
      $count=0;
      $res=pg_query($db,"SELECT * FROM `admin` WHERE username='$_POST[username]' && password='$_POST[password]';");

      $row= pg_fetch_assoc($res);

      $count=pg_num_rows($res);

      if($count==0)
      {
        ?>
              <!--
              <script type="text/javascript">
                alert("The username and password doesn't match.");
              </script>
              -->
          <div class="alert alert-danger" style="width: 600px; margin-left: 370px; background-color: #de1313; color: white">
            <strong>The username and password doesn't match</strong>
          </div>
        <?php
      }
      else
      {
        /*-------------if username & password matches---*/

        $_SESSION['login_user'] = $_POST['username'];
        $_SESSION['pic']= $row['pic'];

        ?>
          <script type="text/javascript">
            window.location="Admin/profile.php"
          </script>
        <?php
      }
      }


      else
      {
        $count=0;
         $res=pg_query($db,"SELECT * FROM `user` WHERE username='$_POST[username]' && password='$_POST[password]';");

          $row= pg_fetch_assoc($res);
          $count=pg_num_rows($res);

          if($count==0)
            {
              ?>

          <div class="alert alert-danger" style="width: 600px; margin-left: 370px; background-color: #de1313; color: white">
            <strong>The username and password doesn't match</strong>
          </div>
          <?php
            }
          else
            {
            $_SESSION['login_user'] = $_POST['username'];
            $_SESSION['pic']= $row['pic'];

            ?>
          <script type="text/javascript">
            window.location="User/profile.php"
          </script>
          <?php
            }

      }
  }


  ?>
</body>
</html>

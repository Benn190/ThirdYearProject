    <?php

    if(isset($_POST['submit']))
  {
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

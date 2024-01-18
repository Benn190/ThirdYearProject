
<?php
 #DISPLAY COMPLETE LOGIN PAGE
	#Display any error messages if present
	if(isset($errors) && !empty($errors))
	{
		echo'<div class ="alert alert-secondary" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		
		</button><h4 class="alert-heading">Oops! There was a problem:';
		foreach ($errors as $msg) {echo " - $msg<br>";}
		echo 'Please try again or <a class = "alert-link" href="register.php">Rgister</a></h4>
		</div>';
			
	}
	
	?>
	<!--Login form just for tests .-->

	<form action="login_action.php" METHOD = "POST">

  <div class = "form-group">
  
  <label for = "inputEmail">Email </label>
  <input type="text" class = "form-control" placeholder="e.g.aar@example.com" name = "email" required>  
  </div>
  <div class= "form-group">
  <label for="inputPassword">Password </label>
  <input type="password" class="form-control" placeholder = "Password" name= "pass" required>
  </div>
 <input type = "submit" class= "btn btn-dark btn-lg btn-block" value = "Login">


  </form>
  <div class="container text-center">
	<div class="col align-self-center">
	<div class = "col"  >
 <div class="alert" role="alert">
</div>
		</div>
		</div>

	</div>
	</div>
	</div>
	</div>
	</div>
	 </div>
	
	
    
 

	<div class = "col"  >
 <div class="alert" role="alert">
<a href="register.php">	<button type="button" class="btn btn-dark btn-lg" role="button" data-toggle="modal" data-target="#rev">Register </button></a>
	</div>
	</div>
	</div>
	</div>
	</div>
	
	

	
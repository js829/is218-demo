<?php include ('view/header.php'); ?> 


      <div class="masthead">
        
       
      </div>

      <hr>

      <div class="jumbotron">
        <h1>To-do List App</h1>
		
		
		<form action="verify.php" method="post" class="form-signin">
        <h2 class="form-signin-heading">Please sign in</h2>
        <input name="username" type="text" class="input-block-level" placeholder="Username">
        <input name="password" type="password" class="input-block-level" placeholder="Password"> 	
        <button class="btn btn-large btn-primary" type="submit">Log in</button>
      </form>
	  
	  
        <a class="btn btn-large btn-success" href="register.php">Register Now</a>
      </div>

<?php include ('view/footer.php'); ?> 



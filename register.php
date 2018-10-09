<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration</title>
 	<link rel="stylesheet" href="stylesRegister.css">

	<link rel="stylesheet" href="bootstrap1.min.css">
	
</head>
<body>
	<section>
		<div class="container ">
			<div class="row">
				<div class="col-md-3">
				</div>
				<div class="col-md-6">
					<form  method="post" action="register.php" class="form_register">
						<?php include('errors.php'); ?>
						<br><br>
						<h2>Register</h2>
						
						<label>Username</label><br>
						<input type="text" name="username" placeholder="Username"><br>
						
						<label>Password</label><br>
						<input type="password" name="password_1" placeholder="Password"><br>
						
						<label>Confirm password</label><br>
						<input type="password" name="password_2" placeholder="Confirm Password"><br>
						
						 <button type="submit" class="btn" name="reg_user">Register</button><br>
						<p>Already a member? <a href="file:///D:/DoAnWed/Login.html">Sign in</a></p> <br>
						
					</form>
				</div>
				<div class="col-md-3">
				</div>
				
			</div>
		</div>
	</section>
		
	
</body>
</html>
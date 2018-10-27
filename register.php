<?php include('serverLogin_Register.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration</title>
 <link rel="stylesheet"  type="text/css" href="css/stylesRegister.css"
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	<section>
		<div class="container ">
			<div class="row">
				<div class="col-md-3">
				</div>
				<div class="col-md-6">
					<form  method="post" action="serverLogin_Register.php" class="form_register">
						<?php include('errors.php'); ?><!----de bao ------>
						<br><br>
						<h2>Register</h2>
						
						<label>Username</label><br>
						<input type="text" name="username" placeholder="Username" required><br>
						
						<label>Password</label><br>
						<input type="password" name="password_1" placeholder="Password" required><br>
						
						<label>Confirm password</label><br>
						<input type="password" name="password_2" placeholder="Confirm Password" required><br>
						
						 <button type="submit" class="btn" name="reg_user">Register</button><br>
						<p>Already a member? <a href="/login.php">Sign in</a></p> <br>
						
					</form>
				</div>
				<div class="col-md-3">
				</div>
				
			</div>
		</div>
	</section>
		
	
</body>
</html>
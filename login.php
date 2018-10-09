<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<link rel="stylesheet" href="stylesLogin.css">

	<link rel="stylesheet" href="bootstrap1.min.css">
</head>
<body>
	<section>
		<div class="container">
			<div class="row"> 
				<div class="col-md-3">
				</div>
				<div class="col-md-6">
					<form method="post" action="login.php" class="form_login">
						<?php include('errors.php'); ?>
						<h1>Đăng Nhập</h1>
						
						<label><h3>Username</h3></label><br>
						<input type="text" placeholder="Username" name="username"><br>
						
						<label><h3>Password</h3></label><br>
						<input type="password" placeholder="Password" name="password" ><br><br>
						
						<!--<label><input type="checkbox" checked="checked" name="remember"> Remember me</label><br>--->
						<button type="submit" class="btn" name="login_user" ><h3>Login</h3></button><br><br>
						
						<div class="col-md-6">
							<span class="psw"> <a href="#"><h4>Forgot password?</h4></a></span>
						</div>
						<div class="col-md-6">
						
							<span class="psw"><a href="http://doanwed.test/Registration/register.php"><h4>Register</h4></a></span>
						</div>	
						
					</form>
				</div>
				<div class="col-md-3">
				</div>
				
				
			</div>
		</div>
	</section>
	
	
	
	
</body>
</html>

<?php include('serverDoiMatKhau.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Đổi Mật Khẩu</title>
	<link rel="stylesheet"  type="text/css" href="css/stylesDoiMatKhau.css" />
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	<section>
		<div class="container">
			<div class="row"> 
				<div class="col-md-3">
				</div>
				<div class="col-md-6  ">
					<form method="post" action="DoMatKhau.php" class="form_login">
						
						<h1>Đổi Mật Khẩu</h1>
						<h3 style="color:red"><?php include('errors.php'); ?></h3>
						<label><h3>Tài Khoản</h3></label><br>
						<input type="text" placeholder="Tài Khoản" name="username" required><
						
						<label><h3>Mật Khẩu Cũ</h3></label><br>
						<input type="password" placeholder="Mật Khẩu Cũ" name="password" required >
						
						<label><h3>Mật Khẩu Cũ</h3></label><br>
						<input type="password" placeholder="Nhập Lại Mật Khẩu" name="password_1" required ><br>
						
						<!--<label><input type="checkbox" checked="checked" name="remember"> Remember me</label><br>--->
						<button type="submit" class="btn" name="login_user" ><h3>Đổi Mật Khẩu</h3></button><br>
						<div class="col-md-6">
							<span class="psw" ><a href="/login.php"><h4 style="color:white">Đăng Nhập</h4></a></span>
						</div>
						<!---<div class="col-md-6">
							<span class="psw"><a href=""><h4 style="color:white">Đổi Mật Khẩu</h4></a></span>
						</div>--->
					</form>
				</div>
				<div class="col-md-3">
				</div>
				
				
			</div>
		</div>
	</section>
	
	
	
	
</body>
</html>

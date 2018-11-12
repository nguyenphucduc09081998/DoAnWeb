<?php include('serverLogin_Register.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration</title>
 <link rel="stylesheet"  type="text/css" href="css/stylesRegister.css"
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
	
	
	
	
<script type="text/javascript">
$(document).ready(function() {

	// Sự kiện khi focus vào user_name
	$("#username").blur(function() { 
		
		if($(this).val() != ''){
			// Gán text cho class thongbao trước khi AJAX response
			$(".thongbao").html('checking username...'); 
		}
		// Dữ liệu sẽ gởi đi
		var form_data = {action: 'check_user',	username: $(this).val()};
		$.ajax({
			type: "POST",				// Phương thức gởi đi
			url: "checkuser.php",			// File xử lý dữ liệu được gởi
			data: form_data,			// Dữ liệu gởi đến cho url 
			success: function(result) { // Hàm chạy khi dữ liệu gởi thành công
				$(".thongbao").html(result);	
			}
		});
		
	});

});
</script>
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
						<input type="text" name="username" id="username" placeholder="Username" required><br>
						<div class="thongbao" style="color:red;"></div>
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









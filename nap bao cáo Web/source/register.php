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
		<div class="container register_con">
			<div class="row">
				
				<div class="col-md-6">
					<form  method="post" action="register.php" class="form_register">
						
						<br><br>
						
						<h2 style="font-family: 'Open Sans Condensed', sans-serif; font-size:60px">Đăng Kí </h2>
						<h3 style="color:red;"><?php include('errors.php'); ?></h3>
						<label>Tài Khoản </label><br>
						<input type="text" name="username" id="username" placeholder="Tài Khoản " required><br>
						<div class="thongbao" style="color:red;"></div>
						<label>Mật Khẩu </label><br>
						<input type="password" name="password_1" placeholder="Mật Khẩu " required><br>
					
						<label>Nhập Lại Mật Khẩu</label><br>
						<input type="password" name="password_2" placeholder="Nhập Lại Mật Khẩu" required><br>
						
						 <button type="submit" class="btn" name="reg_user">Đăng Kí</button><br>
						<p>Bạn có thể đăng nhập:  <a href="/login.php">Đăng Nhập</a></p> <br>
						
					</form>
				</div>
				
			</div>
		</div>
	</section>
		
	
</body>
</html>









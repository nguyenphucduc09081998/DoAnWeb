<?php
session_start();
// initializing variables
$errors = array(); 
// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'dataweb');
// REGISTER USER
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_1']); 
 
  if (empty($username)) { array_push($errors, "Nhập Tài Khoản"); }
  if (empty($password_1)) { array_push($errors, "Nhập Mật Khẩu Cũ"); }
  if (empty($password_2)) { array_push($errors, "Nhập Mật Khẩu Mới"); }
  

  // first check the database to make sure 
  $user_check_query = "SELECT * FROM user WHERE Username='$username' ";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    $password_1 = md5($password_1);
	
	if ($user['Password'] === $password_1) {
		$password_2 = md5($password_2);
      $query1 = "UPDATE user SET password='$password_2' WHERE username='$username'";
	
		if(mysqli_query($db, $query1)){
			array_push($errors, "Đổi Mật Khẩu Thành Công");
		}else{
			array_push($errors, "Đổi Mật Khẩu Không Thành Công");
		}
	  //header('location: /register.php');
    }else{
		array_push($errors, "Mật Khẩu Cũ Không Đúng");
	}
  }else{
	  array_push($errors, "Tài Khoản Này Không Tồn Tại");
  }

}

?>


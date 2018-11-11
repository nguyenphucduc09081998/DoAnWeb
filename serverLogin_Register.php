<?php
session_start();

// initializing variables

$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'dataweb');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);

  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  
  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }

  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "Password nhập lại không đúng");

  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM user WHERE Username='$username' ";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['Username'] === $username) {
      array_push($errors, "Username đã tồn tại");
	  //header('location: /register.php');
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO user (username,  password) 
  			  VALUES('$username', '$password')";
			  
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	//$_SESSION['success'] = "You are now logged in";
	
	array_push($errors, "Đăng kí thành công và bạn có thể đăng nhập");
	sleep(1);
	/*header('location: index.php');*/
  }
}
// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  if (empty($username)) {// rong
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
	
	
	
  	if (mysqli_num_rows($results) == 1) {
		
		$row = mysqli_fetch_array($results);
		$MaUser= $row['MaUser'];
		
		
		$_SESSION['mauser'] = $MaUser;
  	  $_SESSION['username'] = $username;
	  
  	  $_SESSION['success'] = "You are now logged in";
	
	  header('location: /DoAn.php');
  	}else {
  		array_push($errors, "Mật Khẩu hoặc tài khoản không đúng");
		//echo"Login ko thanh cong";
  	}
  }
}

?>















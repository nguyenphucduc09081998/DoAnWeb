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
 // if (empty($username)) { array_push($errors, "Username is required"); }

  
 // if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "2 password không trùng nhau");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM user WHERE Username='$username' LIMIT 1 ";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
   

   if ($user) { // if user exists
    if ($user['Username'] === $username) {
      array_push($errors, "Username đã tồn tại");
    }
   }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO user (Username,  Password) 
  			  VALUES('$username', '$password')";
			  
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
	
	?>
		<h2></h2>
	<?php
	header('location: login.php');
  }
}
// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  if (empty($username)) {// rong
  	array_push($errors, "Username bạn chưa nhập");
  }
  if (empty($password)) {
  	array_push($errors, "Password bạn chưa nhập");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM user WHERE Username='$username' AND Password='$password'";
  	$results = mysqli_query($db, $query);
	$row =mysqli_fetch_array($results);
  	if (mysqli_num_rows($results) == 1) {
  	  //$_SESSION['username'] = $username;
	  
	  //
	   $_SESSION['username'] = $username;
	  
	  //
  	  //$_SESSION['success'] = "You are now logged in";
			
	 header('location: /DoAn.php');
  	}else {
  		array_push($errors, "username/password Sai");
		
  	}
  }

}

?>















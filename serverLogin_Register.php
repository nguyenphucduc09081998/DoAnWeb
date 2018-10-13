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
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT COUNT(*) FROM user WHERE Username='$username' ";

  $result = mysqli_query($db, $user_check_query);
  $data= mysqli_fetch_array($result, MYSQLI_NUM);
  var_dump($data[0]);
  die();

  if ($data[0] > 1) { // if user exists
      array_push($errors, "Username already exists");
  }

  if(count($errors) == 0){
      $password = md5($password_1);//encrypt the password before saving in the database

      $query = "INSERT INTO user (Username,  Password) 
  			  VALUES('$username', '$password')";

      mysqli_query($db, $query);
      $_SESSION['username'] = $username;
      $_SESSION['success'] = "You are now logged in";

      echo "dang ki thanh cong";
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
        session_register(username);
        session_register(password);

        $_SESSION['username'] = $_POST['username']; // store username
        $_SESSION['password'] = $_POST['password']; // store password
			
	  header('location: /DoAn.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
		echo"Login khong thanh cong";
  	}
  }
}

?>















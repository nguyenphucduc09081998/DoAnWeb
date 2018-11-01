<?php


// initializing variables

$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'dataweb');

// REGISTER USER
if (isset($_POST['NapHoSo'])) {
  // receive all input values from the form
	$Ten =  $_POST['Ten'];
	$Email = $_POST['Email'];
	$SoDienThoai =  $_POST['SoDienThoai'];
	$KinhNghiem = $_POST['KinhNghiem'];
	$TrinhDo =  $_POST['TrinhDo'];
	$MaCongViec = $_POST['MaCongViec'];
  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($Ten)) { array_push($errors, "chua nhap ten"); }
 // if (empty($SoDienThoai)) { array_push($errors, "chua nhap sdt"); }
  if (empty($KinhNghiem)) { array_push($errors, "chua nhap kinhnghiem"); }
  if (empty($TrinhDo)) { array_push($errors, "chua nhap trinhdo"); }
  
 
$pattern = '#^[a-z][a-z0-9\._]{2,31}@[a-z0-9\-]{3,}(\.[a-z]{2,4}){1,2}$#';
	if(preg_match($pattern, $Email, $match) == 0){
		array_push($errors, " Email nhap khong hơp lệ");
}

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM nguoixinviec WHERE EmailNguoiXinViec= '$Email' ";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['EmailNguoiXinViec'] === $Email) {
      array_push($errors, "Email da ton tai");
    }
  }
mysqli_set_charset($db, "utf8");
  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	//$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO nguoixinviec (TenNguoiXinViec,  EmailNguoiXinViec, SDTNguoiXinViec, TrinhDoNguoiXinViec, KinhNghiemNguoiXinViec, MaCongViec) 
  			  VALUES('$Ten', '$Email', '$SoDienThoai','$TrinhDo','$KinhNghiem', '$MaCongViec')";
			  
  	mysqli_query($db, $query);
  	//$_SESSION['username'] = $username;
  	//$_SESSION['success'] = "You are now logged in";
	
	//echo "nap  thanh cong";
	?>
	
	
	
	<?php
	array_push($errors, " Nạp Hồ sơ thành công");
	sleep(5);
	header('location: /DoAn.php');
	
  }
}

?>
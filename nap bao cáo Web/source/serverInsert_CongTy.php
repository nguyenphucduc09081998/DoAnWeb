<?php
/**
 * Created by PhpStorm.
 * User: HieuUit
 * Date: 10/19/2018
 * Time: 11:44 AM
 */
	
	$MaUser = $_SESSION['mauser'];
	$Username = $_SESSION['username'];

	// initializing variables

	$errors = array();
	$db = mysqli_connect('localhost', 'root', '', 'dataweb');
	mysqli_set_charset($db, "utf8");
	// connect to the database
		// REGISTER USER
	
		
		if (isset($_POST['Insert_CongTy'])) {
		// receive all input values from the form
		$TenCty =  $_POST['ten_cty'];
		$DiaChi = $_POST['dia_chi'];
		$TGLamViec =  $_POST['tg'];
		$DaiNgo =  $_POST['dai_ngo'];
		//xu ly logo cong ty
		$logoname = $_FILES['logo_congty']['name'];	
		$logotmp_name = $_FILES['logo_congty']['tmp_name'];
		$folder = 'images/';
		
		//xu ly logo cong ty
		$Ctyname = $_FILES['anh_congty']['name'];
		$Ctytmp_name = $_FILES['anh_congty']['tmp_name'];
	
		
		// Finally, register user if there are no errors in the form
		
		//get the id congty
		if (file_exists($_FILES['logo_congty']['tmp_name'])) {
		
			move_uploaded_file($logotmp_name, $folder.$logoname);
			
		}
		if (file_exists($_FILES['anh_congty']['tmp_name'])) {
		
			move_uploaded_file($Ctytmp_name, $folder.$Ctyname);
			
		}

        $query = "INSERT INTO congty (TenCongTy,DiaChiCongTy, TGLamViecCongTy, DaiNgoCongTy, IconCongTy, AnhCongTy, IDuser) 
  			  VALUES('$TenCty', '$DiaChi', '$TGLamViec','$DaiNgo', '/images/$logoname', '/images/$Ctyname', '$MaUser')";
		
			
			
			if(	mysqli_query($db, $query)){
				array_push($errors, "Thêm Công Ty Thành Công");
			}else{
				array_push($errors, "Thêm Công Thất Bại");
			}
		


		
	}
	
        ?>

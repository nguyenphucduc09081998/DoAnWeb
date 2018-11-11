<?php


// initializing variables

$errors = array();

$mauser = $_SESSION['mauser'];

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'dataweb');
mysqli_set_charset($db, "utf8");
// REGISTER USER
if (isset($_POST['Update_CongTy'])) {
    // receive all input values from the form
    $ten_cty =$_POST['ten_cty_update'];
	$DiaChi_CongTy =$_POST['dia_chi_update'];
	$ThoiGianLamViecCT =$_POST['thoigian_lamviec_update'];
	$DiaNgoCongTy =$_POST['dai_ngo_update'];
	
	//lay icon cong ty ra
	$filename = $_FILES['icon_congty_udate']['name'];
	$filetmpname = $_FILES['icon_congty_udate']['tmp_name'];
	

	////lay anh cong ty ra
	$filename1 = $_FILES['Edit_AnhCongTy']['name'];
	$filetmpname1 = $_FILES['Edit_AnhCongTy']['tmp_name'];
	$folder = 'images/';
	
	 $a = 0;
	
	$sql = "UPDATE congty SET";
	
	if (file_exists($_FILES['icon_congty_udate']['tmp_name'])) {
		$sql .= " IconCongTy = '/images/$filename'";
		$a+=1;	
		move_uploaded_file($filetmpname, $folder.$filename);
	}
	
	
	if (file_exists($_FILES['Edit_AnhCongTy']['tmp_name'])) {
		if(($a != 0)){
			$sql .= ", AnhCongTy = '/images/$filename1'";
			move_uploaded_file($filetmpname1, $folder.$filename1);
		}
		else{
			$sql .= " AnhCongTy = '/images/$filename1'";
			move_uploaded_file($filetmpname1, $folder.$filename1);
			$a++;
		}
	}
	
    if(!empty($ten_cty) ) 
    {
		if(($a != 0)){
			 $sql .= ", TenCongTy = '$ten_cty'";
		}
		else{
		   $sql .= " TenCongTy = '$ten_cty'";
		   $a++;
		}
		
    }
	
	 if(!empty($DiaChi_CongTy))
    {
		if($a != 0){
			$sql .= ", DiaChiCongTy = '$DiaChi_CongTy'";
		}
		else{
			 $sql .= " DiaChiCongTy = '$DiaChi_CongTy'";
			 $a++;
		} 
	}

	if(!empty($ThoiGianLamViecCT))
    {
		if($a != 0)
			$sql .= ", TGLamViecCongTy = '$ThoiGianLamViecCT'";

        
		else{
			$a++;
		 $sql .= " TGLamViecCongTy = '$ThoiGianLamViecCT'";
		}
	}

	if(!empty($DiaNgoCongTy))
    {
		if($a != 0)
			$sql .= ", DaiNgoCongTy = '$DiaNgoCongTy'";
		
		else{
		  $sql .= " DaiNgoCongTy = '$DiaNgoCongTy'";
		  $a++;
		}
	}


	
	
	$sql .=" WHERE IDuser= '$mauser'";


	if(mysqli_query($db, $sql)){

		array_push($errors, "Update thành công");
	}else{
		array_push($errors, "Update thất bại");
	}
	

	

  
   
}


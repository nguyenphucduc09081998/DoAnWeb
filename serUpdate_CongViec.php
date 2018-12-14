<?php


// initializing variables

$errors = array();

$macongviectamthoi = $_SESSION['macongviectamthoi'];
	//var_dump($macongviectamthoi);
// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'dataweb');
mysqli_set_charset($db, "utf8");
// REGISTER USER
if (isset($_POST['Update_CongViec'])) {
    // receive all input values from the form
    $ten_cviec =$_POST['ten_cviec_update'];
	$MoTa_CongViec =$_POST['mota_update'];
	$YeuCauCongViec =$_POST['yeucau_update'];
	$MucLuongCongViec =$_POST['mucluong_update'];
	$SoLuong =$_POST['Soluong_update'];
	
	//
	$LinhVuc = (int)$_POST['linh_vuc'];
	$TinhChat = (int)$_POST['tinhchat'];
	//lay anh cong viec
	
	
	$filename1 = $_FILES['Edit_AnhCongViec']['name'];
	$filetmpname1 = $_FILES['Edit_AnhCongViec']['tmp_name'];
	$folder = 'images/';
	

	
	 
	
	////lay anh cong ty ra
//	$filename1 = $_FILES['Edit_AnhCongTy']['name'];
/////	$filetmpname1 = $_FILES['Edit_AnhCongTy']['tmp_name'];
//	$folder = 'images/';
	
 $a = 0;
	
	$sql = "UPDATE congviec SET";
	
	//if (file_exists($_FILES['icon_congty_udate']['tmp_name'])) {
	//	$sql .= " IconCongTy = '/images/$filename'";
	//	$a+=1;	
	//	move_uploaded_file($filetmpname, $folder.$filename);
	//}
	
	
	//if (file_exists($_FILES['Edit_AnhCongTy']['tmp_name'])) {
	//	if(($a != 0)){
	//		$sql .= ", AnhCongTy = '/images/$filename1'";
	//		move_uploaded_file($filetmpname1, $folder.$filename1);
	//	}
	//	else{
	//		$sql .= " AnhCongTy = '/images/$filename1'";
	//		move_uploaded_file($filetmpname1, $folder.$filename1);
	//		$a++;
	//	}
	//}
	if (file_exists($_FILES['Edit_AnhCongViec']['tmp_name'])) {
		$sql .= " AnhCongViec = '/images/$filename1'";
		$a+=1;	
		move_uploaded_file($filetmpname1, $folder.$filename1);
	}
	
    if(!empty($ten_cviec) ) 
    {
		if(($a != 0)){
			 $sql .= ", TenCongViec = '$ten_cviec'";
		}
		else{
		   $sql .= " TenCongViec = '$ten_cviec'";
		   $a++;
		}
		
    }
	
	 if(!empty($MoTa_CongViec))
    {
		if($a != 0){
			$sql .= ", MoTaCongViec = '$MoTa_CongViec'";
		}
		else{
			 $sql .= " MoTaCongViec = '$MoTa_CongViec'";
			 $a++;
		} 
	}

	if(!empty($YeuCauCongViec))
    {
		if($a != 0)
			$sql .= ", YeuCauCongViec = '$YeuCauCongViec'";

        
		else{
			$a++;
		 $sql .= " YeuCauCongViec = '$YeuCauCongViec'";
		}
	}

	if(!empty($MucLuongCongViec))
    {
		if($a != 0)
			$sql .= ", MucLuongCongViec = '$MucLuongCongViec'";
		
		else{
		  $sql .= " MucLuongCongViec = '$MucLuongCongViec'";
		  $a++;
		}
	}
	
	if(!empty($SoLuong))
    {
		if($a != 0)
			$sql .= ", SoLuongCongViec = '$SoLuong'";
		
		else{
		  $sql .= " SoLuongCongViec = '$SoLuong'";
		  $a++;
		}
	}
	///////
	if(!empty($LinhVuc))
    {
		if($a != 0)
			$sql .= ", NganhCongViec = '$LinhVuc'";
		
		else{
		  $sql .= " NganhCongViec = '$LinhVuc'";
		  $a++;
		}
	}
	if(!empty($TinhChat))
    {
		if($a != 0)
			$sql .= ", TinhChatCongViec = '$TinhChat'";
		
		else{
		  $sql .= " TinhChatCongViec = '$TinhChat'";
		  $a++;
		}
	}

	
	
	$sql .=" WHERE MaCongViec= '$macongviectamthoi'";

	if(mysqli_query($db, $sql)){

		array_push($errors, "Update thành công");
	}else{
		array_push($errors, "Update thất bại");
	}
	

	

  
   
}


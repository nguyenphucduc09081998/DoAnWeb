<?php
/**
 * Created by PhpStorm.
 * User: HieuUit
 * Date: 10/14/2018
 * Time: 10:31 AM
 */
// connect to the database
	$db = mysqli_connect('localhost', 'root', '', 'dataweb');
	mysqli_set_charset($db, "utf8");

	$MaUser = $_SESSION['mauser'];
	
	$a ="select MaCongTy from congty where IDuser = '$MaUser'";
	
					$result = mysqli_query($db,$a);
				//	$b = $result['MaCongTy'];
				$b = mysqli_fetch_array($result);
					$c = $b['MaCongTy'];
					
	//var_dump($MaUser);
$errors = array();
    if (isset($_POST['ThemCongViec'])) {

	
	
        $TenCV =  $_POST['ten_cv'];

        $MoTa = $_POST['FDT_mo_ta'];
        $YeuCau =  $_POST['FDT_yeu_cau'];
        $MucLuong = $_POST['muc_luong'];
        $TinhChat = (int)$_POST['TC'];
        $LinhVuc = (int)$_POST['linh_vuc'];
        $SoLuong = (int)$_POST['SL'];
//get nameimage
        $filename = $_FILES['nameimage']['name'];
        $filetmpname = $_FILES['nameimage']['tmp_name'];
        $folder = 'images/';
	
        //$MaCongTy = (int)$result['MaCongTy'];

        // form validation: ensure that the form is correctly filled ...
        // by adding (array_push()) corresponding error unto $errors array
        //if (empty($TenCV)) { array_push($errors, "chưa có tên công việc"); }
       // if (empty($MoTa)) { array_push($errors, "chưa có mô tả công việc"); }
        //if (empty($YeuCau)) { array_push($errors, "chưa có yêu cầu công việc"); }
        //if (empty($MucLuong)) { array_push($errors, "chưa có mức lương công việc"); }
        //if (empty($TinhChat)) { array_push($errors, "chưa có  công việc"); }
        //if (empty($MucLuong)) { array_push($errors, "chưa có số lượng công việc"); }

        // first check the database to make sure
		if (file_exists($_FILES['nameimage']['tmp_name'])) {
		
			move_uploaded_file($filetmpname, $folder.$filename);
		}
		
		
			$query = "INSERT INTO congviec (TenCongViec, MoTaCongViec, MucLuongCongViec, YeuCauCongViec, TinhChatCongViec, SoLuongCongViec, NganhCongViec, AnhCongViec, MaCongTy) 
  			  VALUES('$TenCV', '$MoTa', '$MucLuong','$YeuCau','$TinhChat', '$SoLuong','$LinhVuc','/images/$filename','$c')";
			  
			
		
		
		if(mysqli_query($db, $query)){
			array_push($errors, "Thêm Công Việc thành công");
		}else{
			array_push($errors, "Thêm Công Việc Thất Bại");
		}
		
		


}
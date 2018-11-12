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
// REGISTER USER
    $user = $_SESSION['username'];

//lay thong tin user
    $conn = mysqli_query($db,"select * from user where Username = '$user'");
    $arrUser = mysqli_fetch_array($conn);
//lay ma user
    $MaUser = (int)$arrUser['MaUser'];
	
    $cty = mysqli_query($db,"select * from congty where IDuser = '$MaUser' ");
	
    $result = mysqli_fetch_array($cty);
	
	
    if(($result) == null){
        header('location:TaoCongTy.php');
    }


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
  			  VALUES('$TenCV', '$MoTa', '$MucLuong','$YeuCau','$TinhChat', '$SoLuong','$LinhVuc','/images/$filename','$MaUser')";
			  
			
		var_dump($query);
		
		if(mysqli_query($db, $query)){
			echo"Bạn Thêm Công Ty Thành Công";
		}else{
			echo"Bạn Thêm Công Ty Không Thành Công";
		}
		
		


}
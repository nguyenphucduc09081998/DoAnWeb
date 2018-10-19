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

if (isset($_POST['updatecongviec'])) {
	$TenCV =  $_POST['ten_cv'];

    $MoTa = $_POST['FDT_mo_ta'];
    $YeuCau =  $_POST['FDT_yeu_cau'];
    $MucLuong = $_POST['muc_luong'];
    $TinhChat = (int)$_POST['TC'];
    $LinhVuc = (int)$_POST['linh_vuc'];
    $SoLuong = (int)$_POST['SL'];

  
    // form validation: ensure that the form is correctly filled ...
    // by adding (array_push()) corresponding error unto $errors array
    if (empty($TenCV)) { array_push($errors, "chưa có tên công việc"); }
     if (empty($MoTa)) { array_push($errors, "chưa có mô tả công việc"); }
    if (empty($YeuCau)) { array_push($errors, "chưa có yêu cầu công việc"); }
    if (empty($MucLuong)) { array_push($errors, "chưa có mức lương công việc"); }
    if (empty($TinhChat)) { array_push($errors, "chưa có  công việc"); }
    if (empty($MucLuong)) { array_push($errors, "chưa có số lượng công việc"); }

    // first check the database to make sure

   
   

    if (count($errors) == 0) {
		
	//move_uploaded_file($filetmpname, $folder.$filename);
 
		
        //$password = md5($password_1);//encrypt the password before saving in the database
 
        $query = "INSERT INTO `congviec` (`TenCongViec`, `MoTaCongViec`, `MucLuongCongViec`, `YeuCauCongViec`, `TinhChatCongViec`, `SoLuongCongViec`, `NganhCongViec`) 
  			  VALUES('$TenCV', '$MoTa', '$MucLuong','$YeuCau','$TinhChat', '$SoLuong','$LinhVuc')";
	
        mysqli_query($db, $query);
        //$_SESSION['username'] = $username;
        //$_SESSION['success'] = "You are now logged in";

        //echo "nap  thanh cong";
        ?>

        <h2 style="font-size: 30px; margin:auto;">
            <?php echo "Nạp Hồ sơ thành công"; ?>
        </h2>

        <?php
        sleep(3);
        header('location: /DoAn.php');

    }else{
		echo 'ko dk';
	}
}

?>
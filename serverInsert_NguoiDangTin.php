<?php
session_start();

// initializing variables

$errors = array();

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'dataweb');

// REGISTER USER
if (isset($_POST['DangTin'])) {
    // receive all input values from the form
    $TenCV =  $_POST['ten_cv'];
    $MoTa = $_POST['FDT_mo_ta'];
    $YeuCau =  $_POST['FDT_yeu_cau'];
    $TinhChat = $_POST['FDT_tinh_chat'];
    $MucLuong =  $_POST['muc_luong'];
    $SL =  $_POST['SL'];
    $HinhThuc =  $_POST['hinh_thuc'];
    $LinhVuc =  $_POST['linh_vuc'];

    //get the id of company
    $result = mysqli_query("select id from Users where username ='".$_SESSION['username']."'");
    $row = mysqli_fetch_array($result);

    $id = $row['id'];


    // form validation: ensure that the form is correctly filled ...
    // by adding (array_push()) corresponding error unto $errors array
    if (empty($TenCV)) { array_push($errors, "chưa có tên công việc"); }
     if (empty($MoTa)) { array_push($errors, "chưa có mô tả công việc"); }
    if (empty($YeuCau)) { array_push($errors, "chưa nhập yêu cầu công việc"); }
    if (empty($MucLuong)) { array_push($errors, "chưa có mức lương"); }
    if (empty($SL)) { array_push($errors, "chưa có số lượng tuyển"); }


    // first check the database to make sure
    // a user does not already exist with the same username and/or email
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

        <h2 style="font-size: 30px; margin:auto;">
            <?php echo "Nạp Hồ sơ thành công"; ?>
        </h2>

        <?php
        sleep(3);
        header('location: /DoAn.php');

    }
}

?>
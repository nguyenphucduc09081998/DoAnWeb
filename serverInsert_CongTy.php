<?php
/**
 * Created by PhpStorm.
 * User: HieuUit
 * Date: 10/19/2018
 * Time: 11:44 AM
 */
session_start();

// initializing variables

$errors = array();

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'dataweb');
$user = $_SESSION['username'];
// REGISTER USER
if (isset($_POST['Upload'])) {
    // receive all input values from the form
    $TenCty =  $_POST['ten_cty'];
    $DiaChi = $_POST['dia_chi'];
    $TGLamViec =  $_POST['tg'];
    $DaiNgo =  $_POST['dai_ngo'];



    // form validation: ensure that the form is correctly filled ...
    // by adding (array_push()) corresponding error unto $errors array
    if (empty($TenCty)) { array_push($errors, "chưa có tên công ty"); }
    if (empty($DiaChi)) { array_push($errors, "chưa có địa chỉ"); }
    if (empty($TGLamViec)) { array_push($errors, "chưa có thời gian hoạt động"); }
    if (empty($DaiNgo)) { array_push($errors, "chưa có đãi ngộ"); }

    // first check the database to make sure

    mysqli_set_charset($db, "utf8");
    // Finally, register user if there are no errors in the form

    //get the id congty
    $conn = mysqli_query($db,"select * from user where Username = '$user'");
    $arrUser = mysqli_fetch_array($conn);
    //lay ma user
    $MaUser = (int)$arrUser['MaUser'];

        $query = "INSERT INTO congty (TenCongTy,DiaChiCongTy, TGLamViecCongTy, DaiNgoCongTy, IDuser, , IConCongTy, AnhCongTy) 
  			  VALUES('$TenCty', '$DiaChi', '$TGLamViec','$DaiNgo','$', '$MaUser','$LinhVuc','$MaCongTy')";

        mysqli_query($db, $query);

        ?>

        <h2 style="font-size: 30px; margin:auto;">
            <?php echo "Nạp Hồ sơ thành công"; ?>
        </h2>

        <?php
        sleep(3);
        header('location: /DoAn.php');
}

<?php
include('header.php');

session_start();
//lấy thông tin đăng nhập
$user = $_SESSION['username'];
//ket noi database
$db = mysqli_connect('localhost', 'root', '', 'dataweb');
mysqli_set_charset($db, "utf8");
$conn = mysqli_query($db,"select * from user where Username = '$user'");
$arrUser = mysqli_fetch_array($conn);
//lay ma user
$MaUser = (int)$arrUser['MaUser'];
?>
<script type="text/javascript" src="js/NhaTuyenDung.js"></script>
<link rel="stylesheet" type="text/css" href="css/slideShow.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<section>
    <div class="container">
        <div class="row">
            <?php
            $getCty = mysqli_query($db,"SELECT MaCongTy FROM congty WHERE  IDuser = $MaUser");
            $arrCty = mysqli_fetch_array($getCty);

            //2 dong nay de lay du lieu don gian
            $res =  mysqli_query($db,"SELECT * FROM congty WHERE  MaCongTy = $MaUser");
            $res1 = mysqli_fetch_array($res);


            $Macty = (int)$arrCty['MaCongTy'];

            $result = mysqli_query($db,"SELECT DISTINCT TenCongViec,MaCongViec,MucLuongCongViec,YeuCauCongViec FROM congviec WHERE  MaCongTy = $Macty ");
            ?>
                </div>
            </div>
        </div>

        <?php
            if($Macty !=0){
                ?>
                <h3 class="ten_congty"> Những Công Việc Đang Tuyển Của Công Ty <?php  echo $res1['TenCongTy'];?></h3>
                <?php
            }
            else{
                echo '<script language="javascript">';
                echo 'alert("Bạn chưa có tin tuyển dụng")';
                echo '</script>';
               
            }
        ?>

        <div class="row show_congviec">

            <?php

            while($row = mysqli_fetch_array($result))
            {
                ?>
                <div class="container">
                    <div class="col-md-8 congty_chung ">
                        <div class="tencongviec_tencongty">
                            <a class="tencongviec" href="/congviec.php?idCongViec= <?php echo $row['MaCongViec']; ?>">
                                <h5><?php echo $row["TenCongViec"]; ?> </h5>
                            </a>
                            <a class="chitietcongviec">
                                <h6><?php echo $row['MucLuongCongViec'];?></h6><!------cai nay khong can xuat hien ten cong ty, xuat hien chi tiet cong viec thui--------->
                                <h6><?php echo $row['YeuCauCongViec'];?></h6>
                            </a>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>

        </div>

    </div>
</section>
<?php
include('footer.php');
?>

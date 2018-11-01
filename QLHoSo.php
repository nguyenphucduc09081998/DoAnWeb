<?php
/**
 * Created by PhpStorm.
 * User: HieuUit
 * Date: 10/14/2018
 * Time: 1:25 PM
 */

include('header.php');

$db = mysqli_connect("localhost","root","","dataweb");//ket noi data
mysqli_set_charset($db, "utf8");
	
	if(isset($_SESSION['username'])) {	
	
	$user = $_SESSION['username'];

    //lay thong tin user
    $conn = mysqli_query($db,"select * from user where Username = '$user'");
    $arrUser = mysqli_fetch_array($conn);
    //lay ma user
    $MaUser = (int)$arrUser['MaUser'];
    $cty = mysqli_query($db,"select * from congty where IDuser = $MaUser");
    $result = mysqli_fetch_array($cty);

?>
    <link rel="stylesheet" type="text/css" href="css/stylesQLHoSo.css"/>
    <div class="container QLHS_thongtin">
        <h1>Thông tin hồ sơ</h1>
        <form method="post" action="serverUpdate_CongTy.php" >
            <div class="QLHS_img">
                <a class="edit_AnhCongty" href="#">Edit
                    <span class="screen-render-text"></span>
                </a>
                <div class="QLHS_AnhCongTy">
                    <?php
                     $link =$result['AnhCongTy'];
                    ?>
                    <img class="QLHS_AnhCongTy" src= "<?php echo $link;?>"/>
                </div><!--end class QLHS_AnhCongTy-->
            <div class="QLHS_user">
                 <?php
                        $IDuser =(int)$result['IDuser'];
                        $arrUsername = mysqli_query($db,"select * from user where MaUser = $IDuser");
                        $changearr = mysqli_fetch_array($arrUsername);
                        $Username = $changearr['Username'];
                  ?>
				   
                <h3 class="QLHS_header"> Thông tin tài khoản</h3><br>
                Tên tài khoản:
                <input type="text" name="ten_TK_update" placeholder="<?php echo $Username; ?>" value=""/>
                <input type="button" name="changePass" value="Đổi mật khẩu"/>
            </div><!--end QLHS_user-->

                <div class="QLHS_IconCongTy col-md-4">
                    <a class="edit_AnhCongty" href="#">Edit
                        <span class="screen-render-text"></span>
                    </a>
                    <img src="<?php echo $result['IconCongTy']; ?>"/>
                </div><!--end class QLHS_IConCongTy-->
            </div><!--end class QLHS_img-->

            <div class="QLHS_chitiet col-md-8">

                <table class="QLHS_table">
                    <tr>
                        <th>Tên công ty</th>
                        <td>
                            <?php
                            $tencty = $result['TenCongTy'];
                            ?>
                            <input class="QLHS_TenCty" type="text" name ="ten_cty_update" placeholder="<?php echo $tencty;?>" value =""/>
                        </td>

                    </tr>
                    <tr>
                        <th>Địa chỉ công ty</th>
                        <td>
                            <?php
                            $DiaChi = $result['DiaChiCongTy'];
                            ?>
                            <textarea class="text" name="dia_chi_update" rows="4" cols="50" placeholder="<?php echo $DiaChi; ?>" ></textarea>

                        </td>
                    </tr>
                    <tr>
                        <th>Thời gian làm việc</th>
                        <td>
                            <textarea class="text" name=yg_update rows="4" cols="50" placeholder="<?php echo $result['TGLamViecCongTy']; ?>"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <th>Đãi ngộ</th>
                        <td>
                            <textarea class="text" name="dai_ngo_update" rows="4" cols="50" placeholder="<?php echo $result['DaiNgoCongTy']; ?>"></textarea>
                        </td>
                    </tr>
                </table>
            </div><!--end class QLHS_chitiet-->
            <div class="QLHS_submit">
                <input class="submit" type ="submit" name ="update" value ="update">
            </div>
        </form>

    </div><!--end class QLHS_thongtin-->
	<?php
	}else{
		?>
		<div class="container">
			<h2 style="font-family: 'Poor Story', cursive; color:red;">Bạn Cần Đăng Nhập </h2>
			<a href="/login.php">Đăng Nhập</a>
			
		</div>
	<?php
	} 
   

?>
	<?php
    include('footer.php')
?>
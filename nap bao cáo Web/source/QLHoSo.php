<?php
/**
 * Created by PhpStorm.
 * User: HieuUit
 * Date: 10/14/2018
 * Time: 1:25 PM
 */

	include('header.php');	
	include('serverUpdate_CongTy.php');
	$db = mysqli_connect("localhost","root","","dataweb");//ket noi data
	mysqli_set_charset($db, "utf8");	
	
	
	//$MaUserr = $_SESSION['mauser'];
	$user = $_SESSION['username'];
//var_dump($MaUserr);
    //lay thong tin user
    $conn = mysqli_query($db,"select * from user where Username = '$user'");
    $arrUser = mysqli_fetch_array($conn);
    //lay ma user
    $MaUser = (int)$arrUser['MaUser'];
	//var_dump($MaUser);
    $cty = mysqli_query($db,"select * from congty where IDuser = $MaUser");
    $result = mysqli_fetch_array($cty);
	
	
	?>
    <link rel="stylesheet" type="text/css" href="css/stylesQLHoSo.css"/>
	
	
			<div class="container QLHS_thongtin">
        <h1 style="font-family: 'Unlock', cursive;">Thông tin hồ sơ</h1>
        <form method="post" action=""  enctype="multipart/form-data">
		
			
            <div class="QLHS_img">
             
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
				   
                <h3 class="QLHS_header" style="font-family: 'Unlock', cursive;"> Thông tin tài khoản</h3><br>
                Tên tài khoản:
                <input type="text" name="ten_TK_update" placeholder="<?php echo $Username; ?>" value="" disabled />
              <!---  <input type="button" name="changePass" value="Đổi mật khẩu"/>--->
            </div><!--end QLHS_user-->

                <div class="QLHS_IconCongTy col-md-4">
					<br><br>
					<p style="font-family: 'Unlock', cursive;"><b>Icon Công Ty</b></p>
                    <img src="<?php echo $result['IconCongTy']; ?>" style="border: 1px solid red; height:200px; width: 200px;"  />
					<h5 style="font-family: 'Unlock', cursive;">Edit Icon</h5><input type="file" name="icon_congty_udate">
                </div><!--end class QLHS_IConCongTy-->
            </div><!--end class QLHS_img-->

            <div class="QLHS_chitiet col-md-8">

                <table class="QLHS_table">
				<h1 color="red"><?php include('errors.php'); ?></h1>
                    <tr>
                        <th style="font-family: 'Unlock', cursive;">Tên công ty</th>
                        <td>
                            <?php
                            $tencty = $result['TenCongTy'];
                            ?>
                            <input class="QLHS_TenCty" type="text" name ="ten_cty_update" placeholder="<?php echo $tencty;?>" value =""/>
                        </td>

                    </tr>
                    <tr>
                        <th style="font-family: 'Unlock', cursive;">Địa chỉ công ty</th>
                        <td>
                            <?php
                            $DiaChi = $result['DiaChiCongTy'];
                            ?>
                            <textarea class="text" name="dia_chi_update" rows="4" cols="50" placeholder="<?php echo $DiaChi; ?>" ></textarea>

                        </td>
                    </tr>
                    <tr>
                        <th style="font-family: 'Unlock', cursive;">Thời gian làm việc</th>
                        <td>
                            <textarea class="text" name="thoigian_lamviec_update" rows="4" cols="50" placeholder="<?php echo $result['TGLamViecCongTy']; ?>"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <th style="font-family: 'Unlock', cursive;">Đãi ngộ</th>
                        <td>
                            <textarea class="text" name="dai_ngo_update" rows="4" cols="50" placeholder="<?php echo $result['DaiNgoCongTy']; ?>"></textarea>
                        </td>
                    </tr>
					
					
					 <tr>
                        <th style="font-family: 'Unlock', cursive;">Ảnh Công Ty</th>
                        <td>
							<img src="<?php echo $result['AnhCongTy']; ?>" style="width:350px; height: 200px;">
							<input type="file" name="Edit_AnhCongTy" style="margin:10px 0;">
                        </td>
                    </tr>
					
					
		
					
                </table>
            </div><!--end class QLHS_chitiet-->
 

 
            <div class="QLHS_submit">          
				 <button type="submit" class="btn btn_QLHS_update" name="Update_CongTy" >Sửa Công Ty</button><br>
            </div>
        </form>

    </div><!--end class QLHS_thongtin-->
		
	
    

   


	<?php
    include('footer.php')
?>
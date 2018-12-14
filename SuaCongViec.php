<?php
/**
 * Created by PhpStorm.
 * User: HieuUit
 * Date: 10/14/2018
 * Time: 1:25 PM
 */

	include('header.php');	
	
	include('serUpdate_CongViec.php');
	$db = mysqli_connect("localhost","root","","dataweb");//ket noi data
	mysqli_set_charset($db, "utf8");	
	$a = $_GET['idEditCongViec'];
	$_SESSION['macongviectamthoi'] = $a;
	
	//$MaUserr = $_SESSION['mauser'];
	//$user = $_SESSION['username'];
//var_dump($MaUserr);
    //lay thong tin user
    //$conn = mysqli_query($db,"select * from user where Username = '$user'");
    //$arrUser = mysqli_fetch_array($conn);
    //lay ma user
   // $MaUser = (int)$arrUser['MaUser'];
	//var_dump($MaUser);
    $cviec = mysqli_query($db,"select * from congviec where MaCongViec = '$a'");
    $result = mysqli_fetch_array($cviec);
	
	//
	?>
    <link rel="stylesheet" type="text/css" href="css/stylesQLHoSo.css"/>
	

			<div class="container QLHS_thongtin">
        <h1>Thông tin Công Việc</h1>
		
		
        <form method="post" action=""  enctype="multipart/form-data">
            <div class="QLHS_img">             
                <div class="QLHS_AnhCongTy">
                    <?php
                     $link =$result['AnhCongViec'];
                    ?>
                    <img class="QLHS_AnhCongTy" src= "<?php echo $link;?>"/>
                </div><!--end class QLHS_AnhCongTy-->
			</div>
			<div class="QLHS_user">               
             <h3 class="QLHS_header"> Thông Tin Công Việc</h3><br>
            <div class="QLHS_chitiet col-md-8">
                <table class="QLHS_table" style="width:100%">
				<h1 color="red"><?php include('errors.php'); ?></h1>
                    <tr>
                        <th>Tên Công Việc</th>
                        <td>
                            <?php
                            $tencviec = $result['TenCongViec'];
                            ?>
                            <input class="QLHS_TenCty" type="text" name ="ten_cviec_update" placeholder="<?php echo $tencviec;?>" value =""/>
                        </td>
                    </tr>
                    <tr>
                        <th>Mô Tả</th>
                        <td>
                            <?php
                            $DiaChi = $result['MoTaCongViec'];
                            ?>
                            <textarea class="text" name="mota_update" rows="4" cols="50" placeholder="<?php echo $DiaChi; ?>" ></textarea>

                        </td>
                    </tr>
                    <tr>
                        <th>Yêu Cầu</th>
                        <td>
                            <textarea class="text" name="yeucau_update" rows="4" cols="50" placeholder="<?php echo $result['YeuCauCongViec']; ?>"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <th>Mức Lương</th>
                        <td>
                            <textarea class="text" name="mucluong_update" rows="4" cols="50" placeholder="<?php echo $result['MucLuongCongViec']; ?>"></textarea>
                        </td>
                    </tr>
					<tr>
                        <th>Số Lượng</th>
                        <td>
                            <textarea class="text" name="Soluong_update" rows="4" cols="50" placeholder="<?php echo $result['SoLuongCongViec']; ?>"></textarea>
                        </td>
                    </tr>
					 <tr>
                      <th>Tính chất</th>
                      <td class="combo_box">
                          <select class="nhap" name="tinhchat">
                              <option value="0">Part Time</option>
                              <option value="1">Full Time</option>
                          </select>
                      </td>
                      
                  </tr>
			
			
                  <tr class="Nganh">
                      <th>Lĩnh vực</th>
                      <td class="combo_box">
                          <select  name="linh_vuc">
                              <option value="1">Công nghệ thông tin</option>
                              <option value="2">Điện tử - kĩ thuật</option>
                              <option value="3">Ngân hàng - tài chính</option>
                              <option value="4">Kinh tế</option>
                          </select>
                      </td>
                  </tr>
					
					<tr>
                        <th>Ảnh Công Việc</th>
                        <td>
							<img src="<?php echo $result['AnhCongViec']; ?>" style="width:350px; height: 200px;">
							<input type="file" name="Edit_AnhCongViec" style="margin:10px 0;">
                        </td>
                    </tr>
					
					<!---
					<div class="QLHS_submit">          
				 <button type="submit" class="btn" name="Update_CongTy">Sửa Công Ty</button><br>
				</div>--->	
                </table>
			</div><!--end class QLHS_chitiet-->	
			</div>
			<div class="QLHS_submit_UpdateCongViec">          
				 <button type="submit" class="btn suacongviec_updatecongviec" name="Update_CongViec">Sửa Công Ty</button><br>
				</div>
        </form>

    </div><!--end class QLHS_thongtin-->

	<?php
    include('footer.php')
?>
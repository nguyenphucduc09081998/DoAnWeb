<?php
/**
 * Created by PhpStorm.
 * User: HieuUit
 * Date: 10/18/2018
 * Time: 3:34 PM
 */

    include ('header.php');
    include ('serverInsert_CongTy.php');
	$username = $_SESSION['username'];
	
?>
<link rel="stylesheet" href="css/stylesTaoCongTy.css">


	
	<div class="container form_dangki">
  
        <form class="TCT_dang_tin" method ="post" action="" enctype="multipart/form-data">
        <div class="TCT_dang_tin" >
			<h1 class="TCP_TAOCONGTY">Bạn Cần Tạo Công Ty</h1>
			<h1 color="red"><?php include('errors.php'); ?></h1>
            <h3 class="TCT_title">Thông tin tài khoản</h3>
            <table>
                <tr>
                    <th>Tên tài khoản:</th>
                    <td>
                        <input class="text TCT_form_text" type="text" name="ten_tk" placeholder="<?php echo $username;?>" disabled  />
                    
                    </td>
                </tr>
               
            </table>

            <h3 class="TCT_title">Thông tin công ty</h3>
            <table class="FDT_table">
                <tr>
                    <th>
                        Tên công ty:
                    </th>
                    <td>
                        <input class="text TCT_form_text" type="text" name="ten_cty"  required />
                    </td>
                    <th>
                        <span class ="FDT_feedback"></span>
                    </th>
                </tr>
                <tr>
                    <th>
                        Địa chỉ công ty:
                    </th>
                    <td>
                        <textarea class="text" name="dia_chi" rows="4" cols="83" required></textarea>
                    </td>
                    <th>
                        <span class ="TCT_feedback"></span>
                    </th>
                </tr>
            </table><!--thông tin công ty-->

            <h3 class="TCT_title">Một số hình ảnh về công ty</h3>
            <table>
                <tr>
                    <th>
                        Logo Công ty:
                    </th>
                    <th>
                        <input class="TCT_up_img" type="file" name="logo_congty" required />
                    </th>
                </tr>
                <tr>
                    <th>
                        Ảnh công ty:
                    </th>
                    <th>
                        <input class="TCT_up_img" type="file" name="anh_congty" required />
                    </th>
                </tr>
            </table>

            <h3 class="TCT_title"> hoạt động công ty</h3>
            <table>
                <tr>
                    <th>
                        Thời gian làm việc:
                    </th>
                    <td>
                              <textarea class="text" name="tg" rows="4" cols="83" required></textarea>
                    </td>
                    <th>
                        <span class ="TCT_feedback"></span>
                    </th>
                </tr>
                <tr>
                    <th>
                        Đãi ngộ:
                    </th>
                    <td>
                              <textarea class="text" name="dai_ngo" rows="4" cols="83" required></textarea>
                    </td>
                    <th>
                        <span class ="TCT_feedback"></span>
                    </th>

                </tr>
            </table><!--đãi ngô công ty-->

            <div class="TCT_submit">

             <button type="submit" class="btn BTN_TCT_CREATEE" name="Insert_CongTy">Thêm Công Ty</button><br>
            </div>
      
             
        </div>
     </form>
    </div>
	









<?php
    include('footer.php')
?>

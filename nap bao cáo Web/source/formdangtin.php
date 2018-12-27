<?php
/**
 * Created by PhpStorm.
 * User: HieuUit
 * Date: 10/9/2018
 * Time: 6:56 PM
 */

    include ('header.php');
    include ('serverInsert_FormDangtin.php');
	
   ?>
    
<link rel="stylesheet" type="text/css" href="css/stylesFormDangTin.css">

<?php
// REGISTER USER
    $user = $_SESSION['username'];
	$MaUser = $_SESSION['mauser'];
    $cty = mysqli_query($db,"select * from congty where IDuser = '$MaUser' ");
    $result = mysqli_fetch_array($cty);
    if(($result) == null){
        header('location:TaoCongTy.php');
    }
?>
    <div class="container FDT_container">
        <form class="FDT_dang_tin" method ="post" action="" enctype="multipart/form-data">

              <table class="FDT_table">
					<tr>
					<h1 color="red"><?php include('errors.php'); ?></h1>
					</tr>
                  <tr>
                      <th>
                          Tên công việc:
                      </th>
                      <th>
                          <input class="text FDT_form_text" type="text" name="ten_cv" required />
                      </th>
                    
                  </tr>
                  <tr>
                      <th>
                          Mô tả công việc:
                      </th>
                      <th>
                          <textarea class="text" name="FDT_mo_ta" rows="4" cols="50" required></textarea>
                      </th>
                     
                  </tr>
                  <tr>
                      <th>
                          Yêu cầu:
                      </th>
                      <th>
                          <textarea class="text" name="FDT_yeu_cau" rows="4" cols="50" required></textarea>
                      </th>
                     
                  </tr>
                  <tr>
                      <th>
                          Mức lương:
                      </th>
                      <th>

                          <input class="text FDT_form_text" type ="text" name="muc_luong" required />
                      </th>
                     

                  </tr>
                  <tr>
                      <th>
                          Số lượng:
                      </th>
                      <th>
                          <input class="text FDT_form_text" type ="number" name="SL" pattern="[1-9]{1-5}" required />
                      </th>
                      
                  </tr>

                  <tr>
                      <th>Tính chất</th>
                      <td class="combo_box">
                          <select class="nhap" name="TC">
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
                      <th>
                          ảnh:
                      </th>
                      <th>
                          <input class="FTD_up_img" type="file" name="nameimage" required />
                      </th>
                  </tr>
              </table>
            <!---<input class="submit FDT_submit" type="submit" value="upload" name="Upload"/>--->
			 <button type="submit" class="btn FDT_submit" name="ThemCongViec">Thêm Công Việc</button><br>
        </form>
    </div>
  
<!-----------------------------------------------xu ly thong tin nhap vao------------------------------------------------->

<?php
    include('footer.php');
?>

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


    <!-------------------------------form dang tin------------------------------------------>
    <link rel="stylesheet" type="text/css" href="css/stylesFormDangTin.css">
    <div class="container">
        <form class="FDT_dang_tin" method ="post" action="serverInsert_FormDangtin.php" enctype="multipart/form-data" >
              <table class="FDT_table">
                  <tr>
                      <th>
                          Tên công việc:
                      </th>
                      <th>
                          <input class="text FDT_form_text" type="text" name="ten_cv" required />
                      </th>
                      <th>
                          <span class ="FDT_feedback"></span>
                      </th>
                  </tr>
                  <tr>
                      <th>
                          Mô tả công việc:
                      </th>
                      <th>
                          <textarea class="text" name="FDT_mo_ta" rows="4" cols="50" required></textarea>
                      </th>
                      <th>
                          <span class ="FDT_feedback"></span>
                      </th>
                  </tr>
                  <tr>
                      <th>
                          Yêu cầu:
                      </th>
                      <th>
                          <textarea class="text" name="FDT_yeu_cau" rows="4" cols="50" required>
                          </textarea>
                      </th>
                      <th>
                          <span class ="FDT_feedback"></span>
                      </th>
                  </tr>
                  <tr>
                      <th>
                          Mức lương:
                      </th>
                      <th>
                          <input class="text FDT_form_text" type ="text" name="muc_luong" required />
                      </th>
                      <th>
                          <span class ="FDT_feedback"></span>
                      </th>

                  </tr>
                  <tr>
                      <th>
                          Số lượng:
                      </th>
                      <th>
                          <input class="text FDT_form_text" type ="text" name="SL" required />
                      </th>
                      <th>
                          <span class ="FDT_feedback"></span>
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
                      <th>
                          <span class ="FDT_feedback"></span>
                      </th>
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
                          <input class="FTD_up_img" type="file" name="nameimage"/>
                      </th>
                  </tr>
              </table>
            <input class="submit FDT_submit" type="submit" value="upload" name="Upload"/>
        </form>


    </div>
<!-----------------------------------------------xu ly thong tin nhap vao------------------------------------------------->

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/jqueryFormDangTin.js"></script>


<?php
    include('footer.php');
?>

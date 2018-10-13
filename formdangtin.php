<?php
/**
 * Created by PhpStorm.
 * User: HieuUit
 * Date: 10/9/2018
 * Time: 6:56 PM
 */
    include ('header.php');
    include('serverInsert_NguoiDangTin.php');
?>
    <!-------------------------------form dang tin------------------------------------------>
    <link rel="stylesheet" type="text/css" href="css/stylesFormDangTin.css">
    <div class="container">
        <form class="FDT_dang_tin" method ="post">
              <table class="FDT_table">
                  <tr>
                      <th>
                          Tên công việc:
                      </th>
                      <th>
                          <input class="text FDT_ten_cv" type="text" name="ten_cv" required/>
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
                          Tính chất:
                      </th>
                      <th>
                          <textarea class="text" name="FDT_tinh_chat" rows="4" cols="50" required></textarea>
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
                          <input class="text FDT_form_text" type ="text" name="muc_luong" required/>
                      </th>
                      <th>
                          <span class ="FDT_feedback"></span>
                      </th>

                  </tr>
                  <tr>
                      <th>
                          Số lượng tuyển:
                      </th>
                      <th>
                          <input class="text FDT_form_text" pattern="[1-9]{10-11}" type ="text" name="SL" required/>
                      </th>
                  <tr>
                      <th>hình thức làm việc: </th>
                      <th>
                          <select class="nhap" name="hinh_thuc">
                              <option value="0">Part time</option>
                              <option value="1">Full time</option>
                          </select>
                      </th>
                  </tr>
                  <tr>
                      <th>Lĩnh vực</th>
                      <th>
                          <select class="nhap" name="linh_vuc">
                              <option value="1">Công  nghệ thông tin</option>
                              <option value="2">Điện tử - kĩ thuật</option>
                              <option value="3">Ngân hàng - tài chính</option>
                              <option value="4">Kinh tế</option>
                          </select>
                      </th>
                  </tr>
                  <tr>
                      <th>
                          ảnh:
                      </th>
                      <th>
                          <input class="FTD_up_img" type="file"/>
                      </th>
                  </tr>
              </table>
        </form>
        <form class="FDT_submit" action="#" method="post" enctype="multipart/form-data">
            <input class="submit" type="submit" value="upload" name="DangTin"/>
        </form>

    </div>
<!-----------------------------------------------xu ly thong tin nhap vao------------------------------------------------->

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/jqueryFormDangTin.js"></script>


<?php
    include('footer.php');
?>

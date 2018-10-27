<?php
/**
 * Created by PhpStorm.
 * User: HieuUit
 * Date: 10/18/2018
 * Time: 3:34 PM
 */

    include ('header.php');
    include ('serverInsert_CongTy.php');
?>
<link rel="stylesheet" href="css/stylesTaoCongTy.css">
<div class="container">
    <div class="form_dangki">
        <form class="TCT_dang_tin" method ="post" action="serverInsert_CongTy.php">
            <h3 class="TCT_title">Thông tin tài khoản</h3>
            <table>
                <tr>
                    <th>Tên tài khoản:</th>
                    <td>
                        <input class="text TCT_form_text" type="text" name="ten_tk"/>
                    </td>
                </tr>
                <tr>
                    <th>Mật khẩu: </th>
                    <td>
                        <input class="text TCT_form_text" type="text" name="matkhau"/>
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
                        <input class="text TCT_form_text" type="text" name="ten_cty" required/>
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
                        <input class="TCT_up_img" type="file" name ="img_logo"/>
                    </th>
                </tr>
                <tr>
                    <th>
                        Ảnh công ty:
                    </th>
                    <th>
                        <input class="TCT_up_img" type="file" name ="img_cty"/>
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
                              <textarea class="text" name="tg" rows="4" cols="83" required>
                              </textarea>
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
                              <textarea class="text" name="dai_ngo" rows="4" cols="83" required>
                              </textarea>
                    </td>
                    <th>
                        <span class ="TCT_feedback"></span>
                    </th>

                </tr>
            </table><!--đãi ngô công ty-->

            <div class="TCT_submit">
                <input class="submit" type="submit" value="Tạo hồ sơ" name="Upload"/>
            </div>
        </form>
    </div>
</div>

<?php
    include('footer.php')
?>

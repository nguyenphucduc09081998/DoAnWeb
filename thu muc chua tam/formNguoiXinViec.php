<?php
include('header.php');
?>

<?php
 include('serverInsert_NguoiXinViec.php'); 
 ?>


<section>
	<div class="container">
		<div class="row">
			<form method="post" action="formNguoiXinViec.php" >
								
				<table class="fNXV_table" >
				<?php include('errors.php'); ?>
				
					<tr>
						<td colspan="2" class="title">Form Đăng Kí Cho Người Xin Việc</td>
					</tr>
					<tr>
						<td class="ten">Tên</td>
						<td><input class="nhap" type="text" name="Ten" placeholder="Lê Văn Tèo"  required ></td>
					</tr>
					<tr>
						<td class="ten">Email</td>
						<td><input class="nhap" type="text" name="Email" placeholder="13456@gmail.com" required /></td>
					</tr>
					<tr>
						<td class="ten">Số Điện Thoại</td> 
						<td><input class="nhap" type="tel" name="SoDienThoai" pattern="[1-9]{10-11}" placeholder="123456789" required /> </td>
					
					</tr>
					<tr>
						<td class="ten">Trình Độ</td>
						<td>
							<select class="nhap" name="TrinhDo">
								<option value="Trung Cấp">Trung Cấp</option>
								<option value="Cao Đẳng">Cao Đẳng</option>
								<option value="Đại Học">Đại Học</option> 
							</select>
						</td>
					</tr>
					<tr>
						<td class="ten">Kinh Nghiệm</td>
						<td><input class="nhap" type="text" name="KinhNghiem" placeholder="VD: 3 năm" required	 /></td>
					</tr>
					<tr>
						
						<?php
						//$db = mysqli_connect("localhost","root","","dataweb");//ket noi data
						 $a = $_GET['idMaCongViec'];
						//echo $a;
						$res =  mysqli_query($db,"SELECT  MaCongViec FROM congviec WHERE  MaCongViec = $a");
						$res1 = mysqli_fetch_array($res);
						?>
						<?php 
				
				?>
						<td><input class="nhap" type="text" name="MaCongViec" value="<?php echo $res1['MaCongViec']; ?>" style="height:1px;width:1px; background:#ddd;"  /></td>
						
					</tr>
					
					<tr>
						<td colspan="2"class="row_end" ><button class="btn_submit" type="submit" name="NapHoSo">Nạp Hồ Sơ</button></td>
					</tr>
				</table>
				
			</form>
		</div>
	</div>
</section>




<?php
include('footer.php');	
?>
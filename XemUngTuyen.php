<?php
include('header.php');
?>
<link rel="stylesheet" href="css/stylesXemUngTuyen.css">
<?php
	$db = mysqli_connect('localhost', 'root', '', 'dataweb');
	mysqli_set_charset($db, "utf8");
	$a = $_GET['idXemUngTuyenCongViec'];
	$query = "SELECT * FROM nguoixinviec WHERE MaCongViec = '$a'";
	$img = mysqli_query($db,$query);
?>
	<div class="container ">
	<div class="row XUT_title">		
		<div class="col-md-2">
				<h4>Tên </h4>
		</div>
		<div class="col-md-2">
				<h4>Email </h4>
		</div>
		<div class="col-md-2">
				<h4>Số Điện Thoại </h4>
		</div>
		<div class="col-md-2">
				<h4>Trình Độ </h4>
		</div>
		<div class="col-md-2">
				<h4>Kinh Nghiệm </h4>
		</div>
		
	</div>
	
	
<?php	
	while($row = mysqli_fetch_array($img))
		{			
		?>
		<div class="row XUT_tungnguoixinviec">
			<div class="col-md-2 tungnguoi">
				
				<label class="tencongty"> <b> <?php echo $row["TenNguoiXinViec"]; ?></b></label>
			</div>
			<div class="col-md-2 tungnguoi">
				<label class="tencongty"> <b> <?php echo $row["EmailNguoiXinViec"]; ?></b></label>
			</div>
			<div class="col-md-2 tungnguoi">
				<label class="tencongty"> <b> <?php echo $row["SDTNguoiXinViec"]; ?></b></label>
			</div>
			<div class="col-md-2 tungnguoi">
				<label class="tencongty"> <b> <?php echo $row["TrinhDoNguoiXinViec"]; ?></b></label>
			</div>
			<div class="col-md-2 tungnguoi">
				<label class="tencongty"> <b> <?php echo $row["KinhNghiemNguoiXinViec"]; ?></b></label>
			</div>
			
		</div>	
		<?php		
	}
	//$user = $_SESSION['username'];
//	$MaUser = $_SESSION['mauser'];

	//$a = $_GET['idDeleteCongViec'];
	//$query = "DELETE FROM congviec WHERE MaCongViec = '$a' ";
?>
	
	</div>
	</div>
<?php
include('footer.php');
?>
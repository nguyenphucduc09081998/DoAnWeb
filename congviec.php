<?php
include('header.php');
?>
	<link rel="stylesheet" href="css/stylesCongViec.css">
<section>
	<div class="container">
		<div class="row">
		<?php
			$db = mysqli_connect("localhost","root","","dataweb");//ket noi data
					//mysqli_select_db("datawed");
			$a = $_GET['idCongViec'];
			//2 dong phu
			$res =  mysqli_query($db,"SELECT  * FROM congty WHERE  MaCongTy = $a");
			$res1 = mysqli_fetch_array($res);
			
			$result = mysqli_query($db,"SELECT * FROM congviec WHERE  MaCongViec = $a ");	
			$result1 = mysqli_fetch_array($result);
			
				
			?>
			<img class="Anhheadder" alt="Profile" src="<?php echo $result1['AnhNoiLamViec'];?>" >
		
			<div class="header_CongTy">
				<div class="col-md-4">
					<img class="Profile" alt="Profile" src="<?php echo $res1['IconCongTy'];?>" >
				</div>
				<div class="col-md-8 thongtin" >
					<p><b>Tên Công Ty: &nbsp <?php echo $result1['TenCongViec'];?></b></p>
					<p>Mô Tả : &nbsp <?php echo $result1['MoTaCongViec'];?></p>
					<p>Yêu Cầu Công Việc: &nbsp <?php echo $result1['YeuCauCongViec'];?> </p>
					<p>Số Lượng: &nbsp <?php echo $result1['SoLuongCongViec'];?></p>
					<p>Mức Lương: &nbsp <?php echo $result1['MucLuongCongViec'];?></p>

				</div>
			</div>
			
			
			
			
			
			
			
			
			
			
			
			
			
			
		</div>
	</div>
	
</section>




<?php
include('footer.php');
?>
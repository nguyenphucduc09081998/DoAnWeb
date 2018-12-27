<?php
include('header.php');

?>
<section>
	<div class="container">
		<div class="row">
		<?php
			$db = mysqli_connect("localhost","root","","dataweb");//ket noi data
					//mysqli_select_db("datawed");
						mysqli_set_charset($db, "utf8");
			$a = $_GET['idCongViec'];
		
			//2 dong phu
			$res =  mysqli_query($db,"SELECT  * FROM congty WHERE  MaCongTy = $a");
			$res1 = mysqli_fetch_array($res);
			
			$result = mysqli_query($db,"SELECT * FROM congviec WHERE  MaCongViec = $a ");	
			$result1 = mysqli_fetch_array($result);
			
				
			?>
			<img class="Anhheadder" alt="Profile" src="<?php echo $result1['AnhCongViec'];?>" >
			<div class="congviec_full">				
				<div class="col-md-12 congviec_thongtin" >
					<p class="tencongviec"><b style="font-family: 'Charm', cursive;">Tên Công việc: &nbsp </b><?php echo $result1['TenCongViec'];?></p>
					<p><b style="font-family: 'Charm', cursive;">Mô Tả : &nbsp </b><?php echo $result1['MoTaCongViec'];?></p>
					<p><b style="font-family: 'Charm', cursive;">Yêu Cầu Công Việc: &nbsp </b><?php echo $result1['YeuCauCongViec'];?> </p>
					<p><b>Số Lượng: &nbsp </b> <?php echo $result1['SoLuongCongViec'];?></p>
					<p><b style="font-family: 'Charm', cursive;">Mức Lương: &nbsp </b><?php echo $result1['MucLuongCongViec'];?></p>
					<form action="/NguoiXinViec.php">			
					</form>		
					<a href="/formNguoiXinViec.php?idMaCongViec=<?php echo $result1['MaCongViec']; ?>"><button type="button" style="margin-left:100px;background-color:#b1c371;"class="btn btn-success aaa" href="">Ứng Tuyển</button></a>
					<?php
					$_SESSION['testMaCongViec'] = $result1['MaCongViec'];
					//var_dump($_SESSION['testMaCongViec']);die();
					?>
				</div>
			</div>
			
		</div>
	</div>
	
</section>




<?php
include('footer.php');
?>
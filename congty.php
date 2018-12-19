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
			$a = $_GET['idCongTy'];
		//2 dong nay de ay du lieu don gian
			$res =  mysqli_query($db,"SELECT * FROM congty WHERE  MaCongTy = $a");
			$res1 = mysqli_fetch_array($res);

			$result = mysqli_query($db,"SELECT DISTINCT TenCongViec,MaCongViec,MucLuongCongViec,YeuCauCongViec FROM congviec WHERE  MaCongTy = $a ");	
			?>
			<img class="Anhheadder" alt="Profile" src="<?php echo $res1['AnhCongTy'];?>" >

			<div class="header_CongTy">
				<div class="col-md-4">
					<img class="Profile" alt="Profile" src="<?php echo $res1['IconCongTy'];?>" >
				</div>
				<div class="col-md-8 thongtin" >
					<p><b>Tên Công Ty: &nbsp <?php echo $res1['TenCongTy'];?></b></p>
					<p>Dịa Chỉ : &nbsp <?php echo $res1['DiaChiCongTy'];?></p>
					<p>Thời Gian Làm Việc Các Ngày: &nbsp <?php echo $res1['TGLamViecCongTy'];?> </p>
					<p>Dịch Vụ: &nbsp <?php echo $res1['DaiNgoCongTy'];?></p>

				</div>
			</div>
		</div>
		<h3 class="ten_congty"> Những Công Việc Đang Tuyển Của Công Ty <?php  echo $res1['TenCongTy'];?></h3>
		<div class="row show_congviec">	
			<?php	
			while($row = mysqli_fetch_array($result))
			{		
		?>
			
			<div class="col-md-12 congty_chung ">
				<div class="tencongviec_tencongty">
					<a class="tencongviec" href="/congviec.php?idCongViec= <?php echo $row['MaCongViec']; ?>"> 
						<h5><?php echo $row["TenCongViec"]; ?> </h5>
					</a>
					<a class="chitietcongviec">
						<h6><?php echo $row['MucLuongCongViec'];?></h6><!------cai nay khong can xuat hien ten cong ty, xuat hien chi tiet cong viec thui--------->
						<h6><?php echo $row['YeuCauCongViec'];?></h6>
					</a>
				</div>
			</div>
			<?php
			}
			?>
		
		</div>	
		
	</div>
</section>
<?php
include('footer.php');
?>

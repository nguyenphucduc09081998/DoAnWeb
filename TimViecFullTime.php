<?php
include('header.php');
?>
<div class="container">
		<div class="row">
	<?php
		$db = mysqli_connect("localhost","root","","dataweb");//ket noi data
		$img = mysqli_query($db,"select count(MaCongViec) as sf from congviec where TinhChatCongViec=1");
		$row = mysqli_fetch_array($img);
		mysqli_set_charset($db, "utf8");		
		$jobs = mysqli_query($db,"select congviec.MaCongViec, congty.IconCongTy, congviec.MaCongTy, congviec.TenCongViec, congviec.MoTaCongViec, 
		congviec.YeuCauCongViec, congviec.SoLuongCongViec, congty.DiaChiCongTy, congviec.MucLuongCongViec from congty,congviec where congty.MaCongTy = congviec.MaCongTy && congviec.TinhChatCongViec=1");					
	//$shpwjobs = mysqli_query($db,"select * from congty");
	?>
	<div class="col-md-2">
				</div>
				<div class="col-md-4 NguoiTimViec">
					<a href="/TimViecFullTime.php"  >Công Việc Full Time</a>
				</div>
				<div class="col-md-4 NguoiTimViec">
					<a href="/TimViecPartTime.php" title="hồ sơ" >Công Việc Part Time</a>
				
				</div>
				<div class="col-md-2">
				</div>
	<h2 class="TimViec_title" ><?php echo $row['sf'];?> Công Việc Full Chất Lượng cho bạn</h2>
			<?php		
				while($result = mysqli_fetch_array($jobs)){
				?>
				<div class="col-md-6">
					<div class= "TimViec">
						<div class="TimViec_logo">
							<a href="/congty.php?idCongTy=<?php echo $result['MaCongTy'];?>">
								<img class="TimViec_iconcongty" src="<?php echo $result['IconCongTy'];?>" >
							</a>
									
							<a class="TimViec_tencongviec" href="/congviec.php?idCongViec= <?php echo $result['MaCongViec']; ?>" > 
								<h5><?php echo $result["TenCongViec"]; ?> </h5>
							</a>
							<div class="abc">
								
							<p class="TimViec_YeuCau_MoTa">
								<h5>Địa Chỉ: <?php echo $result["DiaChiCongTy"]; ?></h5>
								<h5>Số Lượng: <?php echo $result["SoLuongCongViec"]; ?></h5>
								<h5> Mức Lương:<?php echo $result["MucLuongCongViec"]; ?><h5>
							</p>
						</div>
									
					</div>
				</div>
				</div>
				<?php	
				}
				?>
			
			
		</div>
	</div>

<?php
include('footer.php');
?>
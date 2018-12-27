<?php include('header.php');?>

	<div class="container">
		<div class="row">
			
				<h2 class="NCNTT_title">Những Công Việc Trong Ngành Công Nghệ Thông Tin</h2>
			
			
			<?php
				$db = mysqli_connect("localhost","root","","dataweb");//ket noi data
				mysqli_set_charset($db, "utf8");
				$job = mysqli_query($db,"select congty.IconCongTy, congty.TenCongTy, congviec.TenCongViec, congviec.MaCongViec, congty.MaCongTy from congty,congviec where NganhCongViec = 1 && congty.MaCongTy = congviec.MaCongTy");
				?>
				
			<div class="NCNTT_HienAnh">
				<div class="col-md-4">
					<img src="/images/NganhCNTT.png" style="height: 300px;width:350px;"/>
				</div>
				<div class="col-md-4">
					<img src="/images/NganhCNTT2.png"  style="height: 300px;width:350px;"/>
				</div>
				<div class="col-md-4">
					<img src="/images/NganhCNTT3.png"  style="height: 300px;width:350px;"/>
				</div>
			</div>			
			
			<div class="col-md-8 NCNTT_TatCa">
				<?php	
				while($result = mysqli_fetch_array($job)){
				?>
				
					<table class="NCNTT_TungCongViec">
						<tr>
							<!--<td>
								<img class="NCNTT_IconCongTy" src="<?php echo $result["IconCongTy"];?>"/>
							</td>-->
							<td class="">
								<a href="/congviec.php?idCongViec=<?php echo $result['MaCongViec'];?>" class="NCNTT_TenCongViec"><h3><?php echo $result["TenCongViec"]; ?></h3></a>
								<a href="/congty.php?idCongTy=<?php echo $result['MaCongTy'];?>" class="NCNTT_TenCongTy"><h3><?php echo $result["TenCongTy"]; ?></h3></a>
							</td>
						</tr>
					</table>
						
							
				<?php
				}
				?>	
			</div>
			
			<div class="col-md-4">
				<marquee>
					<h4 class="NCNTT_MiniTitle"><b>Công Nghệ Thông Tin</b></h4>
				</marquee>
				<h3 style="margin:auto; color:#57a3dd;">Việc Làm</h3>
				<p>- &nbsp Kỹ sư vận hành, quản lý, giám sát; phân tích và phát triển các ứng dụng CNTT tại các doanh nghiệp.</p>
				<p>- &nbsp Kỹ sư xây dựng, phát triển các ứng dụng về lãnh vực truyền thông xã hội và công nghệ Web, một trong những lĩnh vực nóng của CNTT.</p>
				<h3 style="margin:auto; color:#57a3dd;">Cơ Hội</h3>
				<p>- &nbsp Công nghệ thông tin là lựa chọn số một cho nghề nghiệp tương lai của nhiều bạn bạn.</p>
				<p>- &nbsp Được nâng cao trình độ, đi học tại các nước tiên tiến.</p>
				<p>- &nbsp Thu Nhập ổn định cho tương lai của bạn.</p>
				<h3 style="margin:auto; color:#57a3dd;">Công Ty Hàng Đầu</h3>
				<?php
				$IconComp = mysqli_query($db,"select Distinct congty.IconCongTy, congty.MaCongTy from congty,congviec where NganhCongViec = 1 && congty.MaCongTy = congviec.MaCongTy");
				while($result = mysqli_fetch_array($IconComp)){
						
				?>
					<!--dsffsdf
					/congty.php?idCongTy
					-->
				
				<a href="/congty.php?idCongTy=<?php echo $result['MaCongTy'];?>"><img class="NCNTT_iconcongty" src="<?php echo $result['IconCongTy'];?>" ></a>
				
				
				
				<?php
				}
				?>
				
				
			</div>
			
		</div>
	</div>
<?php include('footer.php');?>
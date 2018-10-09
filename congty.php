<?php
include('header.php');
?>

<section>
	<div class="container">
		<div class="row">
		<?php
			$db = mysqli_connect("localhost","root","","datawed");//ket noi data
					//mysqli_select_db("datawed");
			$a = $_GET['idCongTy'];
			$res =  mysqli_query($db,"SELECT * FROM congty WHERE  id = $a");
			$res1 = mysqli_fetch_array($res);
			
			$result = mysqli_query($db,"SELECT TenCongViec FROM congviec WHERE  MaCongTy = $a");	
			?>
			
			<div class="iconcongty_thongtin">
				<img alt="Profile" src="<?php echo $res1['AnhCongTy'];?>" style="width:100%; height:500px; ">
				
				<div class="col-md-4">
					<img alt="Profile" src="<?php echo $res1['AnhCongTy'];?>" style="width:100%; height:200px; ">
				</div>
				<div class="col-md-8" >
					<p></p>
				</div>
			</div>
		</div>
		
		<div class="row">
			<?php
			
			while($row = mysqli_fetch_array($result))
			{		
		?>
		
			<div class="col-md-4">
				
					<a href="../congviec.php"><h5 class="tencongviec"><?php echo $row["TenCongViec"]; ?> </h5></a>
					<a><h6 class="tencongty"><?php echo $res1['TenCongTy'];?></h6></a>
				
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

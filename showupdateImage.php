<?php
session_start();
include('header.php');

//session_start();
//include('serverLogin_Register.php');
//echo $_SESSION['abc'];
?>


<link rel="stylesheet" href="css/stylesDoAn.css">
	<!-----------------------chia tung cot cong ty----------------------------------->
	<section >
		<div class="container">
			<h3 style="font-family: 'Pacifico', cursive;color:#ade600; font-size: 40px; ">Nhà Tuyển Dụng</h3>
			<div class="row">
				
				<?php

					$db = mysqli_connect("localhost","root","","datawed");//ket noi data
					//mysqli_select_db("datawed");
					$img = mysqli_query($db,"select * from image");
					
					
					
					while($row = mysqli_fetch_array($img))
					{			
						
						?>
						<form  method="get" action="congty.php">
							<a class="col-md-4 imga" href="#">	
								<div class="a">						
									<label class="tencongty">Có <b> <?php echo $row["id"]; ?></b> Công Việc</label><!-----cai nay do hien so cong viec------------>
									<img class="back-gr" src=" <?php echo $row["nameimage"];?>">
								</div>
							</a>
						</form>
						
						<?php
						
					}
					?><br><br>
					
			</div>
		</div>
	</section>
	
	<!------footer----------------------------------------------->
<?php
include('footer.php');
?>
<!--------------------------------javascript--------------------------------->















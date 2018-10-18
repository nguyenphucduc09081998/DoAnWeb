<?php
include('header.php');
session_start();
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

					$db = mysqli_connect("localhost","root","","dataweb");//ket noi data
					//mysqli_select_db("datawed");
					$img = mysqli_query($db,"select * from testimage");
					
					
					
					while($row = mysqli_fetch_array($img))
					{			
						
						?>
						<form  method="get" action="">
							<a class="col-md-4 imga" href="">	
								<div class="a">						
									<label class="tencongty">Có <b></b> Công Việc</label><!-----cai nay do hien so cong viec------------>
									<h2><?php echo $row['id'];?></h2>
									<div class="back-gr">
									<?php
                     
					 
					 echo '
                          <img src="data:image/jpeg;base64,'.base64_encode($row['nameimage'] ).'" height="300px" width="100%" class="img-thumnail" />  
                    ';  
					?></div>
								</div>
							</a>
						</form>
						
						<?php
						}
					
					?><br><br>
					
			</div>
		</div>
	</section>
	<!----phan trang--------------------------------------------->
	<br><br><br><br>
	<section>
        <div class="container">
            <div class="table-responsive" id="">
                <!--<div class="span9  pagination">
                    <a href="#">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                   
                </div>-->
            </div>
        </div>
    </section>
	<br><br><br><br>
	<!------------>
	<!------footer----------------------------------------------->
<?php
include('footer.php');
?>
<!--------------------------------javascript--------------------------------->















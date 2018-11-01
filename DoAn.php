<?php
session_start();
include('header.php');

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
					$img = mysqli_query($db,"select * from congty");
					
					
					
					while($row = mysqli_fetch_array($img))
					{			
						$b =  $row['MaCongTy'];
						$cou = mysqli_query($db, "select COUNT(*) as soluong from congviec where MaCongTy = $b");
						$cou1 = mysqli_fetch_array($cou);
						if(($cou1['soluong']) >= 1 ){
						?>
						<form  method="get" action="congty.php">
							<a class="col-md-4 imga" href="/congty.php?idCongTy=<?php echo $row['MaCongTy'];?>">	
								<div class="a">						
									<label class="tencongty">Có <b> <?php echo $cou1["soluong"]; ?></b> Công Việc</label><!-----cai nay do hien so cong viec------------>
									<img class="back-gr" src=" <?php echo $row["IconCongTy"];?>">
								</div>
							</a>
						</form>
						
						<?php
						}
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
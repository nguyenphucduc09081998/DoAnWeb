 <?php  
$db = mysqli_connect("localhost","root","","dataweb") 
mysqli_set_charset($db, "utf8");
$sotindang = 6;

$trang = $_GET["trang"];

$from = ($trang - 1) * $sotindang;

$img = mysqli_query($db,"select * from congty ORDER BY MaCongTy LIMIT $from, $sotindang");

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

?>  
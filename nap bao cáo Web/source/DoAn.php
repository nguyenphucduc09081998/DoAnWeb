<?php
include('header.php');
?>
<link rel="stylesheet" href="css/stylesDoAn.css">
	<!-----------------------chia tung cot cong ty----------------------------------->
	
<script type="text/javascript" src="js/DoAn.js"></script>

		


	<section >
		<div class="container">
			<h3 style="font-family: 'Pacifico', cursive;color:#ade600; font-size: 40px; ">Nhà Tuyển Dụng</h3>
			<div class="row">
				
				<?php	
				
					$db = mysqli_connect("localhost","root","","dataweb");//ket noi data
					//mysqli_select_db("datawed");
					if (isset($_GET['pageno'])) {
						$pageno = $_GET['pageno'];
					} else {
						$pageno = 1;
					}		
					$no_of_records_per_page = 6;//số tin trong 1 trang
					$offset = ($pageno-1) * $no_of_records_per_page; // để bắt đầu lấy từ bao nhiêu
					$total_pages_sql = "SELECT COUNT(*) FROM congty";
					$result = mysqli_query($db,$total_pages_sql);
					$total_rows = mysqli_fetch_array($result)[0];
					$total_pages = ceil($total_rows / $no_of_records_per_page);
					
					$img = mysqli_query($db,"SELECT * FROM congty LIMIT $offset, $no_of_records_per_page");

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
					
			</div>
		</div>
	</section>
	<!----phan trang--------------------------------------------->

	<section>
        <div class="container phantrang">
            <div class="row" id="">
                <ul class="pagination" >
				<!------ <li><a href="?pageno=1">First</a></li>---->
				<li class="<?php if($pageno <= 1){ echo 'disabled'; } ?>">
				
					<a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">Trước</a>
				</li>
				<li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
					<a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">Sau</a>
				</li>
				<!------<li><a href="?pageno=<?php echo $total_pages; ?>">Last</a></li>---->
			</ul>
            </div>
        </div>
    </section>
	<div class="col-md-1 pull-right" style="">
	
		<button onclick="topFunction()" id="backtotop" title="Go to top" >
			<img src="/images/icons8-up-64.png" width="20" height="20">
		</button>	
	</div>
	
	<script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
        document.getElementById("backtotop").style.display = "block";
    } else {
        document.getElementById("backtotop").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
</script>

	
	<!------------>
	<!------footer----------------------------------------------->
<?php
include('footer.php');
?>
<!--------------------------------javascript--------------------------------->
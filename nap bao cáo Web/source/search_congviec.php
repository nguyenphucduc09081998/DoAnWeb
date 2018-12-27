<?php 
	include('header.php'); 
	$db = mysqli_connect("localhost","root","","dataweb");//ket noi data	
	mysqli_set_charset($db, "utf8");
    $search = $_POST['txtsearch']; 
      
    $min_length = 3;// nhap it hon 3 ki tu
        
    if(strlen($search) >= $min_length){ // if query length is more or equal minimum length then
        
        $raw_results = mysqli_query($db,"SELECT * FROM congviec,congty
            WHERE (`TenCongViec` LIKE '%".$search."%') and congty.MaCongTy = congviec.MaCongTy ") ;         
        if(mysqli_num_rows($raw_results) > 0){ // if one or more rows are returned do following
		?>
		<div class="container search_congviec">
					<div class="row">
		<?php
            while($results = mysqli_fetch_array($raw_results)){
            ?>              
			<div class="Search_tungcongviec">
				<div class="col-md-6">
					<div class= "TimViec">
						<div class="TimViec_logo">
							<a href="/congviec.php?idCongViec=<?php echo $results['MaCongViec'];?>">
								<img class="TimViec_iconcongty" src="<?php echo $results['AnhCongViec'];?>" >
							</a>								
							<a class="TimViec_tencongviec" href="/congviec.php?idCongViec= <?php echo $results['MaCongViec']; ?>" > 
								<h5><?php echo $results["TenCongViec"]; ?> </h5>
							</a>
							<div class="abc">										
							<p class="TimViec_YeuCau_MoTa">
								<h5>Địa Chỉ: <?php echo $results["DiaChiCongTy"]; ?></h5>
								<h5>Số Lượng: <?php echo $results["SoLuongCongViec"]; ?></h5>
								<h5> Mức Lương:<?php echo $results["MucLuongCongViec"]; ?><h5>
							</p>
							</div>
									
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
             
        }
        else{ 
		?>
            <div class="container">
				<p style="font-family: 'Pacifico', cursive;color:orange; font-size: 30px; margin:auto;">Không có công việc nào được tìm thấy</p>
			</div> 
        <?php
		}
         
    }
    else{ // if query length is less than minimum
        echo "Minimum length is ".$min_length;
    }




 include('footer.php');  ?>
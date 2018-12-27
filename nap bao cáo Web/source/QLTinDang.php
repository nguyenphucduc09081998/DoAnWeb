<?php
include('header.php');
?>
<link rel="stylesheet" href="css/stylesQLTinDang.css">
<?php
//lấy thông tin đăng nhập
	
    $user = $_SESSION['username'];
	$MaUser = $_SESSION['mauser'];
	
	
	//ket noi database
	$db = mysqli_connect('localhost', 'root', '', 'dataweb');
	mysqli_set_charset($db, "utf8");

            $getCty = mysqli_query($db,"SELECT MaCongTy FROM congty WHERE  IDuser = $MaUser");
            $arrCty = mysqli_fetch_array($getCty);

            //2 dong nay de lay du lieu don gian
            $res =  mysqli_query($db,"SELECT * FROM congty WHERE  MaCongTy = $MaUser");
            $res1 = mysqli_fetch_array($res);


            $Macty = (int)$arrCty['MaCongTy'];

            $result = mysqli_query($db,"SELECT DISTINCT TenCongViec,MaCongViec,MucLuongCongViec,YeuCauCongViec FROM congviec WHERE  MaCongTy = $Macty ");
            ?>



<section>
    <div class="container">
        
        <?php
            if($Macty !=0){
                ?>
                <h3 class="QLTinDang_title" > Những Công Việc Đang Tuyển Của Công Ty <?php  echo $res1['TenCongTy'];?></h3>
                <?php
            }
            else{
                ?>
                <h3 class="QLTinDang_title">Công Ty của bạn hiện chưa tuyển công việc nào</h3>
                <?php              
            }
		
				
      
			?>
			
				<?php
				while($row = mysqli_fetch_array($result))
				{
					?>	
					<div class="row QLTinDang_paddingg">
						<div class="col-md-8">
							<!--<h1><?php //echo $row['MaCongViec'];?></h1>--->	
							<div class="QLTinDang_ChiTietCongViec">
								
									<p class="QLTinDang_TenCongViec">
										<?php echo $row["TenCongViec"]; ?>
									</p>
									<div class="QLTinDang_show-hide">
									<p class="QLTinDang_MucLuongCongViec">
										<?php echo $row['MucLuongCongViec'];?>
									</p>
										<!------cai nay khong can xuat hien ten cong ty, xuat hien chi tiet cong viec thui--------->
									<p class="QLTinDang_YeuCauCongViec"><?php echo $row['YeuCauCongViec'];?></p>	
									</div>		
							</div>
						</div>				
						<div class="col-md-4 QLTinDang_button_xem">	
												
								<a href="/XemUngTuyen.php?idXemUngTuyenCongViec=<?php echo $row['MaCongViec'];?>" class="btn btn-info">
									Xem Ứng Tuyển
								</a>			
								<a href="/SuaCongViec.php?idEditCongViec=<?php echo $row['MaCongViec'];?>" class="btn btn-info">
									Sửa
								</a>
								<a href="/XoaCongViec.php?idDeleteCongViec=<?php echo $row['MaCongViec'];?>" class="btn btn-info">
									Xóa
								</a>												
						</div>	
					</div>	
					
					<?php
				}
				?>
	<?php	
?>		
        
	
    </div>
</section>
<!--
<script>
        $(document).ready(function(){
            $(".run").click(function(){
                $(".QLTinDang_show-hide").slideToggle();
            });
        });
    </script>
-->

<?php

include('footer.php');
?>

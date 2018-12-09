<?php
include('header.php');


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
        <div class="row">
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
			<table border="1" width=100%>
			
				<?php
				while($row = mysqli_fetch_array($result))
				{
					?>	
					<tr>	
						<td width=70%>
							<h1><?php echo $row['MaCongViec'];?></h1>
							<div class="QLTinDang_CongViec_Chung">
								<div class="QLTinDang_TenCongViec_ChiTietCongViec">
									<a class="QLTinDang_TenCongViec" href="#">
										<h5><?php echo $row["TenCongViec"]; ?> </h5>
									</a>
									<a class="QLTinDang_ChiTietCongViec">
										<h6><?php echo $row['MucLuongCongViec'];?></h6><!------cai nay khong can xuat hien ten cong ty, xuat hien chi tiet cong viec thui--------->
										<h6><?php echo $row['YeuCauCongViec'];?></h6>
									</a>
								</div>
						</td>
							

							<td>
								
								
								
								
								<a href="/....php?idDeleteCongViec=<?php echo $row['MaCongViec'];?>" class="btn btn-info">
									Xem Ứng Tuyển
								</a>			
								<a href="/....php?idDeleteCongViec=<?php echo $row['MaCongViec'];?>" class="btn btn-info">
									Sửa
								</a>
								<a href="/XoaCongViec.php?idDeleteCongViec=<?php echo $row['MaCongViec'];?>" class="btn btn-info">
									Xóa
								</a>												
							</td>		
								
							</div> 	
					</tr>						
					<?php
				}
				?>
			
			</table><?php
		
?>		
        
	</div>
    </div>
</section>
<?php

include('footer.php');
?>

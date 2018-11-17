<?php
include('header.php');
include('XoaCongViec.php');

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
     
		<form class="" method ="post" action="" enctype="multipart/form-data">
            <?php
            while($row = mysqli_fetch_array($result))
            {
                ?>
				
                    <div class="QLTinDang_CongViec_Chung">
                        <div class="col-md-8 QLTinDang_TenCongViec_ChiTietCongViec">
                            <a class="QLTinDang_TenCongViec" href="#">
                                <h5><?php echo $row["TenCongViec"]; ?> </h5>
                            </a>
                            <a class="QLTinDang_ChiTietCongViec">
                                <h6><?php echo $row['MucLuongCongViec'];?></h6><!------cai nay khong can xuat hien ten cong ty, xuat hien chi tiet cong viec thui--------->
                                <h6><?php echo $row['YeuCauCongViec'];?></h6>
                            </a>
                        </div>
						<div class="col-md-4 QLTinDang_Button_DUS">
						<?php												
								$_SESSION['MaCongViec'] = $row['MaCongViec'];
								?>
							
							<a href="">
								<button type="submit" class="btn FDT_submit" name="XoaCongViec">Xóa</button>	
							</a>				
							<button type="submit" class="btn btn-info" name="update_congViec">Sửa</button>
							<button type="submit" class="btn btn-info" name="Xoa_CongViec">Xem Ứng Tuyển</button>
						</div> 
				</div> 					
                <?php
            }
            ?>
			</form>

        
	</div>
    </div>
</section>
<?php

include('footer.php');
?>

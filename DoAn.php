<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Trang Chu</title>

	<link rel="stylesheet" href="css/stylesDoAn.css">
<link rel="stylesheet" href="css/bootstrap1.min.css">
	
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


	<!--- bootstrap su dung internet
	<link  rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<script
	src="https://code.jquery.com/jquery-3.3.1.js"
	integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
	crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>--->
	
	
	
</head>
<body>
	<!---------------------nav----------------------------->
	<nav class="collaspe navbar-collapse">
		<div class="container">
			<div class="row menu ">
				<div class="col-md-4 home">
					<a href ="file:///D:/DoAnWed/DoAn.html#"><img src ="images/home.png" height="60" width="60"></a>
				</div>
				<div class="col-md-2 timviec">
				<i class="icon-sprite-new icon-ntv-green"></i>
					<a rel="nofollow" href="file:///D:/DoAnWed/NguoiTimViec.html" title="Trang tim viec"><img src="images/users.png" height="25" width="25">Tìm Việc</a>	
				</div>
				<div class="col-md-2">
					<a rel="nofollow" href="file:///D:/DoAnWed/NhaTuyenDung.html" title="Trang tuyển dụng"><img src="images/admin.png" height="25" width="25" />Tuyển Dụng</a><!--rel="nofollow" là gì-->
				</div>
				<div class="col-md-2">
					<!---<a data-toggle="modal" href="#myModal" ><img src="images/password.png" height="25" width="25" />Đăng Nhập</a>-->
					<a id="dangnhap" href="http://doanwed.test/Registration/login.php" <!--target="targetframe"--> <img src="images/password.png" height="25" width="25" />Đăng Nhập</a>
				</div>
				<div class="col-md-2">
					<a id="dangki" href="http://doanwed.test/Registration/register.php" <!--target="targetframe"-->  <img src="images/logout.png" height="25" width="25"/>Đăng Xuất </a>	
				</div>	
			</div>
		</div>
	</nav>

	<!------Header------------------------------------------->
	<header>
		<div class="container search">
			<div class="row">
				<div class="col-md-2">
				</div>	
				<div class="col-md-6">
					 <input type="text" class="form-control" placeholder="search...">
				</div>
				<div class="col-md-2">
					<button type="button" class="btn btn-info">Search</button>
				</div>
				<div class="col-md-2">
				</div>
			</div>
		</div>
		
	</header>
	<!-------------------menu tưng nganh----------------------------------------------------------->
	<section class="nav_menu">
		<div class="container ">
			<div class="row">
			
				<div class="col-md-2">
				</div>
				<div class="col-md-2">
					<a href="#" title="Ngành IT" >Công Nghệ Thông Tin</a>
				</div>
				<div class="col-md-2">
					<a href="#" title="Ngành IT">Điện Tử - Kĩ Thuật</a>
				</div>
				<div class="col-md-2">
					<a href="#" title="Ngành IT">Ngân Hàng - Tài Chính</a>
				</div>
				<div class="col-md-2">
					<a href="#" title="Ngành IT">Kinh Tế </a>
				</div>
				<div class="col-md-2">
				</div>
			</div>
		
		
			
		</div>
	</section>
	<!-----------------------chia tung cot cong ty----------------------------------->
	
	<section>
		<div class="container">
			<h3>Nhà Tuyển Dụng</h3>
			<div class="row ">
				
				<?php

					$db = mysqli_connect("localhost","root","","datawed");//ket noi data
					//mysqli_select_db("datawed");
					$img = mysqli_query($db,"select * from congty");
					while($row = mysqli_fetch_array($img))
					{			
						?>
						<form method="get" action="congty.php">
							<a class="imga col-md-4" href="congty.php?idCongTy=<?php echo $row['id'];?>">	 
								<h2 class="namecomp"> <?php echo $row["TenCongTy"]; ?> </h2>	
								
								<img class="back-gr" src=" <?php echo $row["AnhCongTy"];?> " style="width:350px; height:300px;">
							</a>
						</form>
						<?php
					}
					?><br><br>
			
				















				
			</div>
		</div>
		<!--<a class="imga col-md-4" href="file:///D:/DoAnWed/CongTy.html" >	
					<h2 class="h2">CTY1</h2>		
					<img class="back-gr" src="images/cty1.jpg" style="width:300px;height:300px;">
				</a>
				<a class="imga col-md-4" href="file:///D:/DoAnWed/CongTy.html">										
					<h2 class="h2">CTY1</h2>
					<img class="back-gr" src="images/cty1.jpg" style="width:300px;height:300px;">
				</a>
				<a class="imga col-md-4" href="file:///D:/DoAnWed/CongTy.html">										
					<h2 class="h2">CTY1</h2>
					<img class="back-gr" src="images/cty1.jpg" style="width:300px;height:300px;">
				</a>-->
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
	<footer>
			<div class="container footer_about">
				<div class="row">
					<div class="col-md-3 link">
						<h3>Link khác</h3>
						<ul class="sex-small">
							<a href="https://www.youtube.com/" target="targetframe"><h4>Link 1<h4></a>
							<a href="https://www.youtube.com/" target="targetframe"><h4>Link 1<h4></a>
							<a href="https://www.youtube.com/" target="targetframe"><h4>Link 1<h4></a>
						</ul>
					</div>
					<div class="col-md-3 thongtin">
						<h3>Thông Tin</h3>
						<ul class="inforend">
							<h4>Nguyễn Phúc Đức<h4>
							<h4>Lê Minh Hiếu<h4>			
							<!---<li><img class="tenqua" src="images/qua.png"><a>Le Minh Hieu</a></li>
							<li><img class="tenqua" src="images/qua.png"><a>Nguyen Phuc Duc</a></li>
							<li><img class="tenqua" src="images/qua.png"><a>Money Back</a></li>--->
						</ul>
					</div>
					<div class="col-md-3 lienhe">
						<h3>Liên Hệ</h3>				
						<ul class="contact">						
							<h4>Phone:<h4><a><h4>123 456<h4></a>
							<h4>Gmail:</h4><a><h4>16520390@gm.uit.edu.vn</h4></a>
						</ul>
					</div>
					<div class="col-md-3 theodoi">
						<h3>Theo Dõi</h3>
						<ul class="follow">			
							<a href ="https://www.facebook.com/profile.php?id=100027325098695&ref=bookmarks" target="targetframe"><img class="rim-square-fb" src="images/iconfb.png" height="50" width="50"/></a>
							<a href ="https://www.facebook.com/profile.php?id=100027325098695&ref=bookmarks" target="targetframe"><img class="rim-square-gg" src="images/zalo.png" height="50" width="50"/></a>			
						</ul>
					</div>
				</div>
			</div>
				<span class="copyright">@2018 Đồ Án Công Nghẹ Wed và Ứng Dụng</span>
		</footer>
</body>
</html>
<!--------------------------------javascript--------------------------------->
 <script>  
 $(document).ready(function(){  
      load_data();  
      function load_data(page)  
      {  
           $.ajax({  
                url:"pagination.php",  
                method:"POST",  
                data:{page:page},  
                success:function(data){  
                     $('#pagination_data').html(data);  
                }  
           })  
      }  
      $(document).on('click', '.pagination_link', function(){  
           var page = $(this).attr("id");  
           load_data(page);  
      });  
 });  
 </script>  
















<!DOCTYPE html>
<html lang="en">
<head>
	
	<meta  charset="utf-8"/>
	<title>Trang Chu</title>
	<link rel="stylesheet"  href="css/stylesHeader.css">
	<link rel="stylesheet" href="css/stylesCongTy.css">
	<link rel="stylesheet" href="css/stylesCongViec.css">
	<link rel="stylesheet" href="css/stylesformNguoiXinViec.css">
	<link rel="stylesheet" href="css/stylesFooter.css">
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
					<a href ="/DoAn.php"><img src ="images/home.png" height="60" width="60"></a>
				</div>
				<div class="col-md-2 timviec">
				<i class="icon-sprite-new icon-ntv-green"></i>
					<a rel="nofollow" href="/TimViec.php" title="Trang tim viec"><img src="images/users.png" height="25" width="25">Tìm Việc</a>	
				</div>
				<div class="col-md-2">
					<a rel="nofollow" href="/NhaTuyenDung.php" title="Trang tuyển dụng"><img src="images/admin.png" height="25" width="25" />Tuyển Dụng</a><!--rel="nofollow" là gì-->
				</div>
				<div class="col-md-2">
					<!---<a data-toggle="modal" href="#myModal" ><img src="images/password.png" height="25" width="25" />Đăng Nhập</a>-->
					<a id="dangnhap" href="/login.php" <!--target="targetframe"--> <img src="images/password.png" height="25" width="25" />Đăng Nhập</a>
				</div>
				<div class="col-md-2">
					<a id="dangki" href="/register.php" <!--target="targetframe"-->  <img src="images/logout.png" height="25" width="25"/>Đăng Xuất </a>	
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
					<a href="/NganhCNTT.php" title="Ngành IT" >Công Nghệ Thông Tin</a>
				</div>
				<div class="col-md-2">
					<a href="/NganhDienTu.php" title="Ngành DTKT">Điện Tử - Kĩ Thuật</a>
				</div>
				<div class="col-md-2">
					<a href="/NganhNganHTaiC.php" title="Ngành NHTC">Ngân Hàng - Tài Chính</a>
				</div>
				<div class="col-md-2">
					<a href="/NganhKinhTe.php" title="Ngành KT">Kinh Tế </a>
				</div>
				<div class="col-md-2">
				</div>
			</div>
		</div>
	</section>

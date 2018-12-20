<?php
/**
 * Created by PhpStorm.
 * User: HieuUit
 * Date: 10/9/2018
 * Time: 10:02 AM
 */
include ('header.php');

?>
    <link rel="stylesheet" type="text/css" href="css/slideShow.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!------------------------menu quan ly-------------------------->
	
    <?php
	if(isset($_SESSION['username'])){
	?>
	<section class="nav_menu">
        <div class="container thong-tin">
            <div class="row">
                <div class="col-md-1">
				</div>
                <div class="col-md-3 NTD_menu">
                    <a href="QLTinDang.php" title="quản lý tin" >Quản lý tin đăng</a>
                    <i class="fa fa-file-text" style="font-size48px;"></i>
                </div>
                
                <div class="col-md-3 NTD_menu">
                    <a href="/formdangtin.php" title="đăng tin tuyển dụng">Đăng tin </a>
                    <i class="fa fa-plus-square"></i>
                </div>
                <div class="col-md-3 NTD_menu">
                    <a href="QLHoSo.php" title="thông tin">Thông tin tài khoản</a>
                    <i class="	fa fa-key"></i>
                </div>
                
            </div>
        </div>
    </section>

<!--slide show danh gia-->
    <div class="slideshow-container">
        <div class="myslides" style="display:none;">

            <div class="numbers">1 / 4</div>

            <div><img class="slide_show" style="height:598px; width:800px;" src="images/11.jpg"></div>

            <div class="caption">Công Ty SEEBEST</div>

        </div>


        <div class="myslides">

            <div class="numbers">2 / 4</div>

            <div><img class="slide_show" style="height:598px; width:800px;" src="images/22.jpg"></div>

            <div class="caption">Tòa Nhà Bitexco</div>

        </div>


        <div class="myslides">

            <div class="numbers">3 / 4</div>

            <div><img class="slide_show" style="height:598px; width:800px;" src="images/33.jpg"></div>

            <div class="caption">Công Ty Điện Lực</div>

        </div>


        <div class="myslides">

            <div class="numbers">4 / 4</div>

            <div><img class="slide_show" style="height:598px; width:800px;" src="images/44.jpg"></div>

            <div class="caption">Công Ty InTel</div>

        </div>


        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>

        <a class="next" onclick="plusSlides(1)">&#10095;</a>


    </div>

    <br>

    <div style="text-align:center">
        <span class="dots" onclick="currentSlide(1)"></span>

        <span class="dots" onclick="currentSlide(2)"></span>

        <span class="dots" onclick="currentSlide(3)"></span>

        <span class="dots" onclick="currentSlide(4)"></span>

    </div>
	<?php
	}else{
		?>
		<div class="container">
			<h2 style="font-family: 'Poor Story', cursive; color:red;">Bạn Cần Đăng Nhập </h2>
			<a href="/login.php">Đăng Nhập</a>
			
		</div>
		<?php
	}
	?>
	
	
    <!----------------------slide show danh gia----------------------------------->
    <script type="text/javascript" src="js/NhaTuyenDung.js"></script>

<?php
    include('footer.php');
?>
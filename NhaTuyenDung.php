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

<!------------------------menu quan ly-------------------------->
    <section class="nav_menu">
        <div class="container thong-tin">
            <div class="row">
                <div class="col-md-2">
                </div>
                <div class="col-md-3">
                    <a href="#" title="quản lý tin" >Quản lý tin đăng</a>
                </div>
                <div class="col-md-3">
                    <a href="/formdangtin.php" title="đăng tin tuyển dụng">Đăng tin </a>
                </div>
                <div class="col-md-3">
                    <a href="#" title="thông tin">Thông tin tài khoản</a>
                </div>
                <div class="col-md-1">
                </div>
            </div>
        </div>
    </section>

<!--slide show danh gia-->
    <div class="slideshow-container">
        <div class="myslides" style="display:none;">

            <div class="numbers">1 / 4</div>

            <div><img class="slide_show" src="images/1.jpg"></div>

            <div class="caption">Text 1</div>

        </div>


        <div class="myslides">

            <div class="numbers">2 / 4</div>

            <div><img class="slide_show" src="images/2.jpg"></div>

            <div class="caption">Text 2</div>

        </div>


        <div class="myslides">

            <div class="numbers">3 / 4</div>

            <div><img class="slide_show" src="images/3.jpg"></div>

            <div class="caption">Text 3</div>

        </div>


        <div class="myslides">

            <div class="numbers">4 / 4</div>

            <div><img class="slide_show" src="images/4.jpg"></div>

            <div class="caption">Text 4</div>

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
    <!----------------------slide show danh gia----------------------------------->
    <script type="text/javascript" src="js/NhaTuyenDung.js"></script>

<?php
    include('footer.php');
?>
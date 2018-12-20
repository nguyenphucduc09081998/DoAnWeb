var slideIndex = 1;
showSlide(slideIndex);
function plusSlides(n){
    showSlide(slideIndex += n);
}
function currentSlide(n) {
    showSlide(slideIndex = n);
}

function showSlide(n){
    var i;
    var slides = document.getElementsByClassName("myslides");
    var dots = document.getElementsByClassName("dots");
    if (n > slides.length) { slideIndex = 1};
    if (n < 1) { slideIndex = slides.length};
    for (i=0;i<slides.length;i++) {
        slides[i].style.display = "none";
    };

    for (i=0;i<dots.length;i++) {

        dots[i].className = dots[i].className.replace(" active","");

    };
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
}

function changeImage()
{
    var img = document.getElementById("myslide");
    img.src = images[x];
    x++;
    if(x >= images.length){
        x = 0;
    }
    fadeImg(img, 100, true);
    setTimeout("changeImage()", 30000);
}
function fadeImg(el, val, fade){
    if(fade === true){
        val--;
    }else{
        val ++;
    }
    if(val > 0 && val < 100){
        el.style.opacity = val / 100;
        setTimeout(function(){fadeImg(el, val, fade);}, 10);
    }
}



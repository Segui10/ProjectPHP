<div id="contenido">
<h2>InfoMobile</h2>

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="https://cdn4.cnet.com/img/AVSpk30o9vxRTG-eEgKHmUCbG3I=/830x467/2017/03/27/a4184fe4-5fa0-4a57-b0b2-3bb5601ef536/gsocho-ny-19-jg.jpg" style="width:600px">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="http://www.adobotech.net/wp-content/uploads/2017/02/adobotech-huawei-P10-cover.jpg" style="width:600px;">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="http://www.finanzas.com/archivos/201609/iphone-7.jpg" style="width:600px;">
  <div class="text">Caption Three</div>
</div>

</div>
<br>

<div >
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
</div>
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1}
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

</div>

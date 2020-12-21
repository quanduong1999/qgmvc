<div class="slideshow-container">
    <div class="mySlides fade">
        <img src="<?php echo 'public/upload/slideshow/' . $slideshow['img1']; ?>" alt="ok" style="width:100%;">
        <div class="text">Nội dung caption của slide đầu tiên!</div>
    </div>
    <div class="mySlides fade">
        <img src="<?php echo 'public/upload/slideshow/' . $slideshow['img3']; ?>" alt="ok" style="width:100%;">
        <div class="text">Nội dung caption của slide đầu tiên!</div>
    </div>
    <div class="mySlides fade">
        <img src="<?php echo 'public/upload/slideshow/' . $slideshow['img5']; ?>" alt="ok" style="width:100%;">
        <div class="text">Nội dung caption của slide đầu tiên!</div>
    </div>
</div>
<br>

<div style="text-align:center">
    <span class="dot" onclick="currentSlide(0)"></span>
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
</div>
<script>
  //khai báo biến slideIndex đại diện cho slide hiện tại
  var slideIndex;
  // KHai bào hàm hiển thị slide
  function showSlides() {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("dot");
      for (i = 0; i < slides.length; i++) {
         slides[i].style.display = "none";  
      }
      for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
      }
 
      slides[slideIndex].style.display = "block";  
      dots[slideIndex].className += " active";
      //chuyển đến slide tiếp theo
      slideIndex++;
      //nếu đang ở slide cuối cùng thì chuyển về slide đầu
      if (slideIndex > slides.length - 1) {
        slideIndex = 0
      }    
      //tự động chuyển đổi slide sau 5s
      setTimeout(showSlides, 5000);
  }
  //mặc định hiển thị slide đầu tiên 
  showSlides(slideIndex = 0);
 
 
  function currentSlide(n) {
    showSlides(slideIndex = n);
  }
</script>
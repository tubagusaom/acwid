
<!-- <div class="video-container">
<div class="video-column" onclick="showVideo('9qD254rDtPs')"><div class="title-caption">Video 1: Dewa 19 feat Ari Lasso</div></div>
<div class="video-column" onclick="showVideo('_Q0aa7vZZEI')"><div class="title-caption">Video 2</div></div>
<div class="video-column" onclick="showVideo('V6zCKJZ2XlY')"><div class="title-caption">Video 3</div></div>
</div> -->

<div id="video-popup">
  <span class="close-button" onclick="closeVideo()">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12,20C7.59,20 4,16.41 4,12C4,7.59 7.59,4 12,4C16.41,4 20,7.59 20,12C20,16.41 16.41,20 12,20M12,2C6.47,2 2,6.47 2,12C2,17.53 6.47,22 12,22C17.53,22 22,17.53 22,12C22,6.47 17.53,2 12,2M14.59,8L12,10.59L9.41,8L8,9.41L10.59,12L8,14.59L9.41,16L12,13.41L14.59,16L16,14.59L13.41,12L16,9.41L14.59,8Z" /></svg>
  </span>
  <iframe id="video-frame" frameborder="0" allowfullscreen></iframe>
</div>

<!-- ======= Footer ======= -->
<footer id="footer">
  <div class="container">
    <div class="copyright">
      &copy; Copyright <strong><span>acwid</span></strong>
    </div>

    <div class="credits">
      Developer by <a href="https://deelabs.com/" target="_blank">Deelabs</a>
      <script>
        var CurrentYear = new Date().getFullYear()
        document.write(CurrentYear)
      </script>
    </div>
  </div>
</footer><!-- End  Footer -->


</body>
</html>



<!-- jQuery -->
<script src="<?php echo base_url() ?>assets/_tera_byte/plugins/jQuery/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="<?php echo base_url() ?>assets/_tera_byte/plugins/bootstrap/bootstrap.min.js"></script>
<!-- slick slider -->
<script src="<?php echo base_url() ?>assets/_tera_byte/plugins/slick/slick.min.js"></script>
<!-- aos -->
<script src="<?php echo base_url() ?>assets/_tera_byte/plugins/aos/aos.js"></script>
<!-- venobox popup -->
<script src="<?php echo base_url() ?>assets/_tera_byte/plugins/venobox/venobox.min.js"></script>
<!-- filter -->
<script src="<?php echo base_url() ?>assets/_tera_byte/plugins/filterizr/jquery.filterizr.min.js"></script>

<!-- google map -->
<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU"></script> -->
<!-- <script src="<?php echo base_url() ?>assets/_tera_byte/plugins/google-map/gmap.js"></script> -->

<!-- Main Script -->
<script src="<?php echo base_url() ?>assets/_tera_byte/js/script.js"></script>

<script>
  // $(".portfolio-poptb").click(function() {

  //   var href =  $(".portfolio-poptb").attr("href");

  //   alert(href);
  // });

  // function showVideo(videoId) {
  //   var videoPopup = document.getElementById('video-popup');
  //   var videoFrame = document.getElementById('video-frame');
  //   var bodyMain   = document.getElementById('body');

  //   videoFrame.src = 'https://www.youtube.com/embed/' + videoId + '?autoplay=1';
  //   videoPopup.style.display = 'flex';
  //   bodyMain.style.overflow = 'hidden';
  // }
  
  // var videoFrame = document.getElementById('video-frame');
  // videoFrame.src = ''; videoPopup.style.display = 'none';

  

  // $(document).ready(function() {
    // $('.portfolio-poptb').click(function() {
      function showVideo(videoId) {
      // alert('Item selected');

      
      
      var bodyMain   = document.getElementById('body');
      var videoPopup = document.getElementById('video-popup');
      var videoFrame = document.getElementById('video-frame');

      var title =  $(".portfolio-poptb").attr("title");
      var video =  $(".portfolio-poptb").attr("data-vid");
      
      videoPopup.style.display = 'flex';
      bodyMain.style.overflow = 'hidden';

      $("#video-frame").attr({
        "src" : videoId,
        "title" : title
      });

      // if (videoFrame.requestFullscreen) {
      //   videoFrame.requestFullscreen();
      // } else if (videoFrame.webkitRequestFullscreen) { /* Safari */
      //   videoFrame.webkitRequestFullscreen();
      // } else if (videoFrame.msRequestFullscreen) { /* IE11 */
      //   videoFrame.msRequestFullscreen();
      // }

      // alert(videoId);
      // alert($(".portfolio-poptb").attr("data-vid"));

    // });
    };
  // });

  function closeVideo() {
    var bodyMain   = document.getElementById('body');
    var videoPopup = document.getElementById('video-popup');
    var videoFrame = document.getElementById('video-frame');

    // $("#video-frame").attr("src", 'xxx');

    // videoFrame.src = '';
    videoPopup.style.display = 'none';
    bodyMain.style.overflow = 'auto';

    var title =  $(".portfolio-poptb").attr("title");
    var video =  $(".portfolio-poptb").attr("data-vid");

    $("#video-frame").attr({
        "src" : "",
        "title" : ""
    });

  }




  

  // var test=document.querySelector(".portfolio-poptb");

  // test.addEventListener('click',function testfunction(){
  //   alert('pop ok');
  // });
</script>


<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="<?php echo base_url() ?>assets/vendor/_tera_byte/purecounter/purecounter_vanilla.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/_tera_byte/aos/aos.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/_tera_byte/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/_tera_byte/glightbox/js/glightbox.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/_tera_byte/isotope-layout/isotope.pkgd.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/_tera_byte/swiper/swiper-bundle.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/_tera_byte/typed.js/typed.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/_tera_byte/waypoints/noframework.waypoints.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/_tera_byte/php-email-form/validate.js"></script>

<script src="<?php echo base_url() ?>assets/_tera_byte/plugins/limonte-sweetalert2/sweetalert2.all.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/public/login.js" type="text/javascript"></script>

<!-- Template Main JS File -->
<script src="<?php echo base_url() ?>assets/js/main.js"></script>

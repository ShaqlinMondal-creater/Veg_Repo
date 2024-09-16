<?php include("admin/inc_files/dbconnect.php"); ?>
<?php
session_start();

// $name=$_SESSION['cs_name'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php include("veg_inc/head_link.php"); ?>
</head>
<body>
  <!--header section start -->
  <div class="header_section">
    <div class="container-fluid">
      <?php 
      if(isset($_SESSION['cs_name'])){ ?>
      <?php include("veg_inc/nav.php"); ?>
      <?php }
      if(isset($_SESSION['sl_name'])){ ?>
        <?php include("veg_inc/seller_nav.php"); ?>
      <?php } ?>
    </div>
  </div>
  <!--header section end -->
  <div class="choose_section layout_padding">
    <div class="container">
      <div class="image_2"><img src="images/img-3.png" style="width:200px"></div>
      <h1 class="about_taital">Why Choose Us</h1>
      <div class="image_3"><img src="images/img-14.png"></div>
      <p class="lorem_text">consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
      <div class="read_bt_1"><a href="#">Read More</a></div>
    </div>
  </div>
    <!--contact section start -->
  <div class="contact_section layout_padding margin_top_80">
    <div class="container">
      <div class="image_2"><img src="images/img-3.png" style="width:100px"></div>
      <h1 class="about_taital">Contact Us</h1>
      <div class="row">
          <div class="col-md-6">
            <div class="mail_sectin">
              <input type="text" class="email-bt" placeholder="Your Name" name="Name">
              <input type="text" class="email-bt" placeholder="Email" name="Name">
              <input type="text" class="email-bt" placeholder="Phone Number" name="Name">
              <textarea class="massage-bt" placeholder="Massage" rows="5" id="comment" name="Massage"></textarea>
              <div class="send_bt"><a href="#">Send</a></div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="map_main">
              <div class="map-responsive">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29466.29539923724!2d88.3797145409352!3d22.60575825471904!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a027606dc300fb1%3A0x1e8c3008eba56670!2sSouth%20Dumdum%2C%20West%20Bengal!5e0!3m2!1sen!2sin!4v1708786563740!5m2!1sen!2sin" width="600" height="480" frameborder="0" style="border:0; width: 100%;" allowfullscreen></iframe>
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>
  <!--contact section end -->
  <br><br>
  <!--footer section start -->
  <?php include("veg_inc/footer.php"); ?>
  <!--footer section end -->
  <!--copyright section start -->
  <?php include("veg_inc/copyright.php"); ?>
  <!--copyright section end -->

  <!-- Javascript files-->
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/jquery-3.0.0.min.js"></script>
  <script src="js/plugin.js"></script>
  <!-- sidebar -->
  <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
  <script src="js/custom.js"></script>
  <!-- javascript --> 
  <script src="js/owl.carousel.js"></script>
  <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
</body>
</html>
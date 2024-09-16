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
      <?php include("veg_inc/nav.php"); ?>
    </div>
  </div>
  <!--header section end -->

  <!--banner section start -->
  <?php include("veg_inc/index_banner.php"); ?>
  <!--banner section end -->

  <!--about section start -->
    <div class="about_section layout_padding">
            <?php include("veg_inc/about_shop.php"); ?>
        
        <!--vegetables  section start -->
            <?php include("veg_inc/vegs.php"); ?>
        <!--vegetables section end -->
    </div>
  <!--about section end -->
  
  <!--testimonial section start -->
  <?php include("veg_inc/shop_comments.php"); ?>
  <!--testimonial section end -->
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
  <script>
    function warn(){
        alert("You have to login first !");
    }

  </script>
</body>
</html>
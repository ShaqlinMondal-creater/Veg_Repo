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
  <!--about section start -->
  <div class="about_section layout_padding">
      <div class="container" style="display:flex; flex-direction:column; gap:1vw; padding-top: 10px; padding-bottom: 10px;">
            <?php 
                $sel="SELECT veg_offer.offer_name,veg_offer.percentage,categories.category_name FROM veg_offer INNER JOIN categories ON categories.category_id=veg_offer.category_name";
                $result=mysqli_query($con,$sel);
                while($rs=$result->fetch_assoc()){
            ?>
        <div class="offer" style="display:flex; background:aliceblue;">
            <div class="offer_im" style="display:flex;">
                <div class="image_3"><img src="images/limited.png"></div>
            </div>
            <h3 class="about_taital" style="padding-top: 4vw;"><span style="color:crimson; text-transform:uppercase;"><?php echo $rs['offer_name'];?></span> Offers For <span style="color: #ecad15; text-transform:uppercase;"><?php echo $rs['category_name'];?></h3>
            <div class="read_bt_1" style="padding-top: 5vw;"><a href="#"><?php echo $rs['percentage'];?> % </a></div>
        </div>
        <?php } ?>
      </div>
    <br>

  </div>
  
  <!--about section end -->
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
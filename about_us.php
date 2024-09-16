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
  <div class="container">
      <h1 class="about_taital">About Our Shopping Website <span style="color:orange;">Veggies</span></h1>
      <div class="image_3"><img src="images/bag2.png"></div>
      <p class="">
        Welcome to "Veggies" – your one-stop destination for fresh, organic, and delightful vegetables! At "My Veggies," we believe in bringing nature's goodness right to your doorstep. Our mission is to make healthy living accessible, convenient, and affordable for everyone.
      </p>
      <p><span style="font-weight:bold; color:orange;">Exclusive Discounts -</span>
      We believe in making healthy choices affordable. Enjoy exclusive discounts ranging from 10% to 30% on selected products. "Veggies" rewards your commitment to wellness by providing budget-friendly options for your shopping pleasure.
      </p>
      <p><span style="font-weight:bold; color:orange;">Explore Our Categories -</span>
          Discover the joy of healthy eating through our thoughtfully curated categories:
          <ul style=" margin-left:2vw;" >
            <li>Taste the sweetness of nature with our premium selection of fruits</li>
            <li> From leafy greens to exotic veggies, find a variety that suits your culinary adventures.</li>
            <li>Embrace a healthier lifestyle with our range of certified organic products.</li>
          </ul>  
      </p>
      <br>
      <h3 class="about_taital">Our Commitment to Quality</h3>
      <p>
        We understand the dynamic preferences and lifestyles of users aged 18 to 40. Our website is designed with you in mind, offering a seamless shopping experience tailored to your needs. Whether you're a health-conscious professional or a culinary enthusiast, "My Veggies" caters to your diverse requirements.
      </p>
      <div class="image_3"><img src="images/qu.png"></div>
      <p>
        Dive into the lush world of nature's bounty with our extensive range of products. From vibrant fruits to crisp vegetables and certified organic produce, we take pride in offering you a diverse selection that meets the highest quality standards. Each product is carefully sourced, ensuring freshness and nutritional value.
      </p>
      <p>
        <li style="margin-left:5vw;"><span style="font-weight:bold; color:orange;">Freshness:</span>
          We guarantee the freshest produce sourced directly from trusted farms.</li>
        <li style="margin-left:5vw;"><span style="font-weight:bold; color:orange;">Variety:</span>
          Explore an extensive range of products, including seasonal delights and exotic finds.</li>
        <li style="margin-left:5vw;"><span style="font-weight:bold; color:orange;">Savings:</span>
          Enjoy regular discounts and special offers designed to make your healthy choices more affordable.</li>  
    </p>
    <div class="container" >
      <h6 class="about_taital" style="background:black; color:white; font-size:x-large;">
        Join us on a journey towards a healthier, happier you. At 
        <span onMouseOver="this.style.color='orange'" onMouseOut="this.style.color='white'">"Veggies,"</span> 
        we nurture your well-being, one delicious bite at a time..   ❤️
      </h6>
    </div>
    
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
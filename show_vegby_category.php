<?php include("admin/inc_files/dbconnect.php"); ?>
<?php
session_start();
if(!isset($_SESSION['cs_name'] )){
    header("location:index.php");
}
$name=$_SESSION['cs_name'];

// if(isset($_SESSION['cs_id'] )){
  
// }
// $csid=$_SESSION['cs_id'];
                    
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
  <div class="about_section">
  <!--vegetables  section start -->
  <div class="vegetables_section layout_padding">
    <div class="container">
      <div class="image_2"><img src="images/img-3.png" style="width:200px"></div>
      <h1 class="about_taital">Our Products</h1>
      <p class="lorem_text">Search By Category </p>
        <div class="category" style="display:flex;">
                  <?php
                                          
                              $sel="SELECT * FROM categories WHERE category_id !=0 ";
                              $result=mysqli_query($con,$sel);
                              while($rs=$result->fetch_assoc()){
                    ?>
            <div class="read_bt_1" ><a href="show_vegby_category.php?cat_id=<?php echo $rs['category_id']; ?>"><?php echo $rs['category_name']; ?></a></div>
            <?php
                }
                ?>
        </div>
      
      <div class="vegetables_section_2 layout_padding">
        <div class="row">
        <?php
                  $cat_id=$_GET['cat_id'];
                  
                          $sel="SELECT product.*,categories.category_name FROM product INNER JOIN categories ON categories.category_id=product.category WHERE category='$cat_id';";
                          $result=mysqli_query($con,$sel);
                          while($rs=$result->fetch_assoc()){

                          // $selt="SELECT product.*,categories.category_name FROM product INNER JOIN categories ON categories.category_id=product.category ";
                          // $resultc=mysqli_query($con,$selt);
                          // $rst=$resultc->fetch_assoc();
                  ?>
          <div class="col-md-3">
            <!-- <div class="box_section">
              <div class="image_4"><a href="show_product.php?pro_id=<?php echo $rs['id'];?>"><img src="admin/pll/<?php echo $rs['picc'];?>" style="height: 12vh;"></a></div>
              <h2 class="dolor_text">₹<span style="color: #ebc30a;"><?php echo $rs['price'];?>.00</span></h2>
              <h2 class="dolor_text"><?php echo $rs['name'];?></h2>
              <h2 class="dolor_text_1">1 kg</h2>
              <p class="tempor_text">adipiscing elit, sed do eiusmod tempor [<span style="color:red" ><?php echo $rst['category_name'];?></span>] </p>
              <div class="buy_bt_1 active"><a href="#">Buy Now</a></div>
            </div> -->
            <div class="box_section">
                          <?php if(isset($_SESSION['cs_name'])){  ?>
                            <div class="image_4"><a href="show_veg.php?pro_id=<?php echo $rs['id'];?>"><img src="admin/pll/<?php echo $rs['picc'];?>" style="height: 12vh;"></a></div>
                            <?php }else{ ?>
                            <div class="image_4"><a  href="#" onclick="warn();"><img src="admin/pll/<?php echo $rs['picc'];?>" style="height: 12vh;"></a></div>
                            <?php }  ?>
                            <h2 class="dolor_text">₹<span style="color: #ebc30a;"><?php echo $rs['price'];?>.00</span></h2>
                            <h2 class="dolor_text"><?php echo $rs['name'];?></h2>
                            <h2 class="dolor_text_1">1 kg [<span style="color:red" ><?php echo $rs['category_name'];?></span>] </h2>
                            <?php if(isset($_SESSION['cs_name'])){  ?>
                            <form action="add_to_cart.php" method="post">
                                <input hidden type="text" name="pid" value="<?php echo $rs['id'];?>">
                                <input hidden type="text" name="pname" value="<?php echo $rs['name'];?>">
                                <input hidden type="text" name="price" value="<?php echo $rs['price'];?>">
                                <input hidden type="text" name="uname" value="<?php echo $_SESSION['cs_name'];?>">
                                <input hidden type="text" name="uid" value="<?php echo $_SESSION['cs_id'];?>">
                                <input hidden type="text" name="category" value="<?php echo $rs['category_name'];?>">
                                <p><input type="number" name="qnty" style="width:4vw; margin-left:10vh;" min='1' max='10'></p>
                                <p class="text-center"><input type="submit" class="btn btn-warning" name="add_cart" value="Add to Cart"></p>
                            </form>
                            <?php }else{ ?>
                            <div class="buy_bt_1 active"><a href="#" onclick="warn();">Buy Now</a></div>
                          <?php }  ?>
                        </div>
          </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
  </div>
  <!--vegetables section end -->
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
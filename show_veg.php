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
  <!--about section start -->
  <div class="about_section layout_padding">
  <?php
                    $pro_id=$_GET['pro_id'];
                    $sel="SELECT product.*,categories.category_name FROM product INNER JOIN categories ON categories.category_id=product.category WHERE id='$pro_id'";
                    $result=mysqli_query($con,$sel);
                    $rs=$result->fetch_assoc();
                ?>
            <div class="col-md-9">
                <div class="cardc">
                    <div class="row" style="height: 80vh;">
                        <div class="col-md-5 pic">        
                            <img src="admin/pll/<?php echo $rs['picc'];?>" alt="<?php echo $rs['picc'];?>" style="height: 50vh; width: 40vw; margin: auto;"> 
                        </div>

                        <div class="col-md-4 det">
                            <h1 class="head" style="text-align:left; margin-left:3px;"><b><?php echo $rs['name'];?></b></h1>
                            <p class="pricec">₹ <?php echo $rs['price'];?>.00</p>
                            <div class="cat-rev">
                                <div class="review">
                                    <p><i><b>Ratings :</b></i></p>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                                <p class="cate"><?php echo $rs['category_name'];?></p>
                            </div>
                            
                            <p class="des"><?php echo "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sed, molestiae. Rerum odit rem alias voluptatibus blanditiis voluptate hic sed excepturi dolorem asperiores quaerat voluptas exercitationem eaque, repellendus iure nemo et?";?></p>
                            
                            <?php
                                if(isset($_SESSION['cs_id'] )){
                                    $csid=$_SESSION['cs_id'] 
                            ?>
                            <form action="insert_cart.php" method="post">
                        
                                <input type="hidden" name="pid" value="<?php echo $rs['id'];?>">
                                <input type="hidden" name="pname" value="<?php  echo $rs['name']; ?>">
                                <input type="hidden" name="price" value="<?php echo $rs['price'];?>">
                                <input type="hidden" name="cid" value="<?php echo $csid; ?>">
                                <input type="hidden" name="cname" value="<?php echo $name; ?>">
                                <!-- Quantity -->
                                <!-- <div class="quantity-container">
                                    <a class="quantity-btns" id="m-" onclick="decreaseQuantity()" style="width: 50px;">-</a>
                                    <h2 id="qnty" name="qnty">1</h2>
                                    <a class="quantity-btns" id="p" onclick="increaseQuantity()" style="width: 50px;">+</a>
                                </div> -->
                            <!-- Quantity end-->
                            <div class="quantity-container">
                                <input type="number" name="qnty" min="1" value="1" style="width:75px; background:black;  font-weight:bolder; border-radius:3px; color:white; text-align:center; height:35px;">
                                <br>
                                <!-- <div class="btnn"><button herf="customer_login.php">Add to Cart</button><button>Buy Now</button></div>  -->
                                <input type="submit" name="add_cart" value="Add" class="btn btn-danger" id="m-" style="font-weight:bolder;">
                            </div>    
                            </form>
                            <?php
                                }else{
                            ?>
                                    <div class="btnn"><button herf="customer_login.php">Add to Cart</button><button>Buy Now</button></div>  
                            <?php  }?>
                        </div>
                    </div>     
                </div>
                <br><br>
            </div>
  </div>
  <br><br>
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
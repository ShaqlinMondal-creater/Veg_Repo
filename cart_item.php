<?php include("admin/inc_files/dbconnect.php"); ?>
<?php
session_start();
if(!isset($_SESSION['cs_name'] )){
    header("location:index.php");
  }
  $name=$_SESSION['cs_name'];
  $idc=$_SESSION['cs_id'];

// $name=$_SESSION['cs_name'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php include("veg_inc/head_link.php"); ?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
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
      <div class="container">
          <div class="col-md-12" align="center" style="background:beige; border-radius:5px;">
              <h2>Cart Items</h2>
          </div>
          <br>

        
        <table class="table" id="cart_table">
            <thead>
                <tr>
                    <th scope="col" class="col-md-2 text-center">SL</th>
                    <th scope="col" class="col-md-2 text-center">IMAGE</th>
                    <th scope="col" class="col-md-2 text-center">PRODUCT</th>
                    <th scope="col" class="col-md-2 text-center">PRICE</th>
                    <th scope="col" class="col-md-2 text-center">QUANTITY</th>
                    <th scope="col" class="col-md-2 text-center">TOTAL</th>
                    <th scope="col" class="col-md-2 text-center">DELETE</th>
                </tr>
            </thead>
            <tbody>
              
                <?php 
                $c=1;
                $subtotal = 0;
                $sel="SELECT add_cart_data.*, product.picc FROM add_cart_data JOIN product ON add_cart_data.pro_id = product.id WHERE user_id='$idc'" ;
                $result=mysqli_query($con,$sel);
                while($rs=$result->fetch_assoc()){
                  $subtotal = $subtotal + ( $rs['pro_price'] * $rs['pro_qty'] );
                 ?>
                <tr>
                    <th scope="row" class="col-md-2 text-center"><?php echo $c; ?></th>
                    <td class="col-md-2 text-center" ><img src="admin/pll/<?php echo $rs['picc'];?>" style="height: 15vh; width: 6vw;"></td>
                    <td class="col-md-2 text-center"><?php echo $rs['pro_name'];?></td>
                    <td class="col-md-2 text-center" >₹ <?php echo $rs['pro_price']; ?> .00/- </td>
                    <td class="col-md-2 text-center" >
                      <form id="frm<?php echo $rs['cart_id'];?>">
                        <input type="hidden" name="c_id" value="<?php echo $rs['cart_id'];?>">
                        <input type="number" name="qty" style="width: 4vw;" min='1' max='10' value="<?php echo $rs['pro_qty'];?>"
                          onchange="updateqty(<?php echo $rs['cart_id'];?>);"
                          onkeyup="updateqty(<?php echo $rs['cart_id'];?>);"
                          onkeydown="updateqty(<?php echo $rs['cart_id'];?>);"
                        >
                      </form>
                    </td>    
                    <td class="col-md-2 text-center" >₹ <?php echo $rs['pro_price'] * $rs['pro_qty'] ;?> .00/- </td>
                    <td class="col-md-2 text-center d-flex" >
                      <a href="delete_cart_item.php?cart_id=<?php echo $rs['cart_id'];?>" class="btn btn-danger">✕</a>
                    </td>
                </tr>
                <?php 
                $c++;
                }
                ?> 
                <th colspan="4" style="text-align:right;">SUB TOTAL :</th>  
                <th><?php echo $subtotal ; ?></th> 
            </tbody>
        </table>
          
            <div class="cb" align="center">
                <a href="checkout.php" class="btn btn-warning">CHECKOUT</a>
            </div>
           

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
  <script>
     function updateqty(abc){

      $.ajax({
        url:'updqty.php',
        type:'POST',
        data:$("#frm"+abc).serialize(),
        success:function(res){
          $("#cart_table").html(res);
        }

      })

     }

  </script>
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


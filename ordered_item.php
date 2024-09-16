<?php 
session_start();

include("admin/inc_files/dbconnect.php"); ?>
<?php
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
    <div class="container">
        <table class="table" align="center">
            <thead style="font-size: 2vh">
                <tr class="table-warning">
                <th scope="col">#</th>
                <th scope="col">Order Date</th>
                <th scope="col">Product Name</th>
                <th scope="col">Product Price</th>
                <th scope="col">Product Quantity</th>
                <th scope="col">Image</th>
                <th scope="col">Status</th>
                <th scope="col">Deliverd</th>
                </tr>
            </thead>
            <br>
            <tbody style="font-size: 2vh">
                <?php
                    $sl=1;
                    $name=$_SESSION['cs_name'];
                    $sel="SELECT * FROM sub_order INNER JOIN master_order ON sub_order.mo_id=master_order.id INNER JOIN product ON sub_order.pro_id=product.id WHERE customer_name='$name';";
                    // $sel="SELECT order_data.*,product.picc FROM order_data JOIN product ON order_data.pro_id = product.id WHERE user_name='$name'";
                    $result=mysqli_query($con,$sel);
                    while($rs=$result->fetch_assoc()){
                ?>
                <?php  
                $price=$rs['pro_price'] * $rs['pro_qty'];
                ?>
                <tr class="table-secondary">
                    <th scope="row"><?php echo $sl; ?></th>
                    <td style="padding-top: 5vh;"><?php echo $rs['order_date'] ;?></td>
                    <td><?php echo $rs['name']; ?></td>
                    <td>₹ <?php echo $price; ?>.00</td>
                    <td><?php echo $rs['pro_qty']; ?></td>
                    <td>
                        <img src="admin/pll/<?php echo $rs['picc'] ;?>" alt="pic" height="60px" width="40px">
                    </td>
                    <td><a href="#" class="btn btn-warning"><?php echo $rs['payment_status'] ;?></a></td>
                    <td style="padding-top: 5vh; color:red;">Delivery with in 7 Days
                        <p class="text-sm text-center text-info font-weight-bold mb-0">SHIPPING AT
                          <br>
                          Name : 
                            <?php echo $rs['ship_name']; ?>
                          <br>
                          Email : 
                            <?php echo $rs['ship_email']; ?>
                          <br>
                          Phone : 
                            <?php echo $rs['ship_phone']; ?>
                          <br>
                          Address : 
                            <?php echo $rs['ship_address']; ?>
                          <br>
                        </p>
                    </td>
                </tr>
                
                <?php
                    $sl++;
                    }
                ?>
            </tbody>
        </table>
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
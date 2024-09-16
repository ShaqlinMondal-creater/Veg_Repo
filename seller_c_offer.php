<?php include("admin/inc_files/dbconnect.php"); ?>
<?php
session_start();
// if(!isset($_SESSION['sl_name'])){
    
//   header("location:sel_index.php");
// }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php include("veg_inc/head_link.php"); ?>
<style>
      /* body {
        margin: 0 auto;
        max-width: 800px;
        padding: 0 20px;
      } */

      .container1 {
        border: 2px solid #dedede;
        background-color: #f1f1f1;
        border-radius: 5px;
        padding: 10px;
        margin: 10px 0;
      }

      .darker {
        border-color: #ccc;
        background-color: #ddd;
      }

      .container1::after {
        content: "";
        clear: both;
        display: table;
      }

      .container1 img {
        float: left;
        max-width: 60px;
        width: 100%;
        margin-right: 20px;
        border-radius: 50%;
      }

      .container1 img.right {
        float: right;
        margin-left: 20px;
        margin-right:0;
      }

      .time-right {
        float: right;
        color: #aaa;
      }

      .time-left {
        float: left;
        color: #999;
      }
/* scroller */
      .container .contents1{
        /* background-color: #e8e9fc; */
        width: 35vw;
        height: 60vh;
        overflow-y: auto;
        overflow-x: hidden;
        border-radius: 1
      }    
      /* Scrollbar styles */
    ::-webkit-scrollbar {
    width: 12px;
    height: 12px;
    }

    ::-webkit-scrollbar-track {
    box-shadow: inset 0 0 10px olivedrab;
    border-radius: 10px;
    }

    ::-webkit-scrollbar-thumb {
    border-radius: 10px;
    background: yellowgreen; 
    box-shadow: inset 0 0 6px rgba(0,0,0,0.5); 
    }

    ::-webkit-scrollbar-thumb:hover {
    background: #7bac10;
    }  
    .footer{
      background:rgb(169, 205, 98);
    }
</style>
</head>
<body>
  <!--header section start -->
  <div class="header_section">
    <div class="container-fluid">
      <?php include("veg_inc/seller_nav.php"); ?>
    </div>
  </div>
  <!--header section end -->
  <div class="choose_section layout_padding">
    <div class="container">
        <?php if(isset($_SESSION['sl_name'] )){ ?>  
            <a href="#" class="btn btn-primary">Add Product</a>
            <a href="seller_c_offer.php" class="btn btn-warning">Add Offer</a>
            <h1 class="about_taital">Welcome Seller <?php echo $_SESSION['sl_name'];  ?></h1>            
        <?php }else{ ?>
            <h1 class="about_taital"> Hello </h1>
        <?php } ?>
    </div>
  </div>
    <!--contact section start -->
  <div class="contact_section layout_padding margin_top_80">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <?php if(isset($_SESSION['sl_name'] )){ ?> 
              <div class="mail_sectin">
                  <h2 class="bt btn-dark" style="border-radius:5px;">Create Your offer</h2>
                  <form action="seller_offer_insert.php" method="post">
                      <input type="text" class="email-bt" placeholder="Offer Name" name="offer_name">
                      <input type="text" class="email-bt" placeholder="Percent" name="percent">
                      <select name="category" id="" class="email-bt" style="background:orange;">
                        <option value="">Select</option>
                            <?php 
                                $datas="SELECT * FROM categories WHERE parent_cat_id=0";
                                $rs=$con->query($datas);
                                while($rows=$rs->fetch_assoc()){
                            ?>
                            <optgroup label="<?php echo $rows['category_name'] ?>">
                              <?php  
                                  $pid=$rows['category_id'] ;
                                  $datasc="SELECT * FROM categories WHERE parent_cat_id='$pid'";
                                  $rsc=$con->query($datasc);
                                  while($rowsc=$rsc->fetch_assoc()){
                              ?>
                              <option value="<?php echo $rowsc ['category_id']; ?>"><?php echo $rowsc['category_name'];?></option>
                                  <?php } ?>
                            </optgroup>
                              <?php  } ?>
                      </select>
                      <textarea class="massage-bt" placeholder="Massage" rows="5" id="comment" name="massage"></textarea>
                      <p style="text-align: center;"><input type="submit" value="Send" name="send" class="btn btn-warning"></p>
                  </form>
              </div>
            <?php } ?>
          </div>
          
            <div class="col-md-6">
              <h2 class="bt btn-info" style="border-radius:5px;">Last Messages By The Seller</h2>
              <div class="contents1">
                  <?php   
                      $sel="SELECT veg_offer.*,categories.category_name FROM veg_offer INNER JOIN categories ON categories.category_id=veg_offer.category_name ORDER BY offer_id DESC";
                      $result=mysqli_query($con,$sel);
                      while($rs=$result->fetch_assoc()){
                    ?>
                <div class="container1 darker">
                  <img src="images/limited.png" alt="Avatar" class="right" style="width:100%;">
                  <h3><strong><?php echo $rs['percentage'];?>% </strong><i><?php echo $rs['offer_name'];?></i>-<span style="color:red;"><b><?php echo $rs['category_name'];?></b></span></h3>
                  <p><?php echo $rs['massage'];?></p>
                  <span class="time-left"><?php echo $rs['date_time'];?></span>
                </div>
                  <?php
                        }
                    ?>
                <!-- <div class="container1">
                  <img src="/w3images/bandmember.jpg" alt="Avatar" style="width:100%;">
                  <p>Sweet! So, what do you wanna do today?</p>
                  <span class="time-right">11:02</span>
                </div> -->
              </div>
            </div>
            <br><br>
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
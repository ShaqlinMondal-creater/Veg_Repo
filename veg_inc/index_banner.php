<div class="banner_section layout_padding " style="height: 90vh">
      <div class="container">
        <div id="main_slider" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
          <div class="carousel-item active">
              <div class="row">
                <div class="col-md-6">
                  <div class="image_1"><img src="images/shop.png" alt="pic"></div>
                </div>
                <div class="col-md-6">
                  <h1 class="banner_taital">Offers <span style="color: #ecad15;">Big Festival</span></h1>
                  <h3 class="banner_text" style="color:crimson; font-size: 2vw;"><strong>10% - 30%</strong></h3>
                  <h1 class="banner_text" style="color:grey; font-size: 3vw;">On every PRODUCTS</h1>
                  <div class="buy_bt"><a href="veg_offer.php">Buy Now</a></div>
                </div>
              </div>
            </div>
              <?php 
                $sel="SELECT veg_offer.offer_name,veg_offer.percentage,categories.category_name FROM veg_offer INNER JOIN categories ON categories.category_id=veg_offer.category_name";
                $result=mysqli_query($con,$sel);
                while($rs=$result->fetch_assoc()){
                ?>
            <div class="carousel-item">
              <div class="row">
                <div class="col-md-6">
                  <div class="image_1"><img src="images/cart12.png" alt="pic"></div>
                </div>
                <div class="col-md-6">
                  <h1 class="banner_taital">Offers For <span style="color: #ecad15; text-transform:uppercase;"><?php echo $rs['offer_name'];?></span></h1><br>
                  <h3 class="banner_text" style="color:crimson; font-size: 2vw;"><?php echo $rs['percentage'];?>% For</h3>
                  <h2 class="banner_text"><span style="color:grey; font-size: 3vw;" ><strong><?php echo $rs['category_name'];?></strong></span></h2>
                  <div class="buy_bt"><a href="veg_offer.php">Buy Now</a></div>
                </div>
              </div>
            </div>
            <?php
            }
            ?>
          </div>
          <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
            <i class=""><img src="images/left-icon.png"></i>
          </a>
          <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
            <i class=""><img src="images/right-icon.png"></i>
          </a>
        </div>
      </div>
    </div>
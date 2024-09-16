<div class="testimonial_section layout_padding" style="height: 120vh; background:linear-gradient(45deg, black, transparent);">
    <div class="container">
      <div id="my_slider" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="image_2"><img src="images/img-3.png" style="width:100px"></div>
            <h1 class="about_taital">Seller Comments</h1>
            <div class="testimonial_main">
              <div class="client_main">
                <div class="client_left">
                  <div><img src="images/shop3.png" class="client_img"></div>
                </div>
                <div class="client_right">
                  <h4 class="magna_text">Magna</h4>
                  <p class="consectetur_text">Consectetur adipiscing</p>
                </div>
              </div>
              <p class="ipsum_text">Lorem ipsum dolor sit amet,  ipsum</p>
            </div>
          </div>
          <?php
              $sel="SELECT * FROM seller";
              $sel="SELECT seller.*, seller_comments.comments FROM seller JOIN seller_comments ON seller.s_id = seller_comments.seller_id " ;
              $result=mysqli_query($con,$sel);
              while($rs=$result->fetch_assoc()){
          ?>
          <div class="carousel-item">
            <div class="image_2"><img src="images/img-3.png" style="width:100px"></div>
            <h1 class="about_taital">#<?php echo $rs['s_name'] ;?> Comments</h1>
            <div class="testimonial_main">
              <div class="client_main">
                <div class="client_left">
                  <div><img src="seller_image/<?php echo $rs['sel_img'] ;?>" class="client_img"></div>
                </div>
                <div class="client_right">
                  <h4 class="magna_text"><?php echo $rs['s_name'] ;?></h4>
                  <p class="consectetur_text"><?php echo $rs['s_email'] ;?></p>
                </div>
              </div>
              <p class="ipsum_text"><?php echo $rs['comments'] ;?></p>
            </div>
          </div>
          <?php
                }
          ?>
          <br><br> 
        </div>
        <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
          <i class=""><img src="images/left-icon1.png"></i>
        </a>
        <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
          <i class=""><img src="images/right-icon1.png"></i>
        </a>
      </div>
    </div>
  </div>
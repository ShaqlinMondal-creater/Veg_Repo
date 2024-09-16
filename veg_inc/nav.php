      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="logo" style="width: 30vw;"><a href="index.html"><img src="images/vegg11.png"></a></div>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="all_vegs.php">ALL PRODUCTS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="veg_offer.php">OFFERS <i class="bi bi-percent"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about_us.php">ABOUT US</a>
            </li>
            <?php
              if(isset($_SESSION['cs_name'] )){
                  
            ?>
            <li class="nav-item">
              <a class="nav-link" href="cart_item.php"><i class="bi bi-bag-plus-fill"></i> 
                <span class="badge rounded-pill bg-warning">
                                <?php
                                  $name=$_SESSION['cs_name'];
                                  $sql = "SELECT COUNT(*) AS total_rows FROM add_cart_data WHERE user_name='$name'";
                                  $result = $con->query($sql);
                                  
                                  if ($result->num_rows > 0) {
                                      $row = $result->fetch_assoc();
                                      echo $row["total_rows"];
                                  } else {
                                      echo "0";
                                  }
                                  
                                ?>
                                  
                </span>
              </a>
            </li>
            <li class="nav-item">
              <span class=""><a class="nav-link" href="ordered_item.php"><i class="bi bi-bag-check-fill" style="font-weight: bolder; font-size: large; color: red;"></i> Order</a></span>
            </li>           
            <li class="nav-item">
              <span class=""><a class="nav-link btn btn-active" href="logout_user.php" style="color: red;"><i class="bi bi-box-arrow-left" style="font-weight: bolder; font-size: large;"></i>Logout</a></span>
            </li>
            <li class="nav-item">
            <span class="buy_bt_1 active"><a class="nav-link" href="user_profile.php" style="color: green;"><i class="bi bi-person-circle" style="font-weight: bolder; font-size: large;"></i> <?php echo $_SESSION['cs_name'];?></a></span>
            </li>
            <?php   }else{ ?> 
            <li class="nav-item">
            <span class="btn btn info"><a class="nav-link" href="#" style="color: #ecad15;" data-toggle="modal" data-target="#exampleModal" >Login<i class="bi bi-box-arrow-in-right" style="font-weight: bolder; font-size: large;"></i></a></span> 
            </li>
            <?php } ?>           
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <div class="search_icon"><a href="#"><img src="images/search-icon.png"></a></div>
          </form>
        </div>
      </nav>

      <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Log in as USER / SELLER</h5>
        <button type="button" class="btn btn-danger" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h4>If you are User then login "As User" or if Seller then login "As Seller "</h4>
        <h3>Thank You For Visiting 😊</h3>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="user_login.php" type="button" class="btn btn-primary">As User</a>
        <a href="seller_login.php" type="button" class="btn btn-success">As Seller</a>
      </div>
    </div>
  </div>
</div>
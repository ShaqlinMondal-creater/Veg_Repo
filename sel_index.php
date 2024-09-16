<?php include("admin/inc_files/dbconnect.php"); ?>
<?php
session_start();
// if(!isset($_SESSION['sl_name'])){
    
//   header("location:seller_login.php");
// }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php include("veg_inc/head_link.php"); ?>
<style>
    .open-button {
        background-color: #555;
        color: white;
        padding: 16px 20px;
        border: none;
        cursor: pointer;
        opacity: 0.8;
        position: fixed;
        bottom: 20px; /* Adjust bottom value as needed */
        right: 20px; /* Adjust right value as needed */
        width: 100px; /* Adjust width value as needed */
        text-align: center;
    }

    .chat-popup {
        display: none;
        position: fixed;
        bottom: 0;
        right: 15px;
        border: 3px solid #f1f1f1;
        z-index: 9;
        width: 280px; /* Adjust width value as needed */
    }

    .form-container {
        max-width: 100%; /* Adjust max-width value as needed */
        padding: 10px;
        background-color: white;
    }

    .form-container textarea {
        width: calc(100% - 20px); /* Adjust width value as needed */
        padding: 15px;
        margin: 5px 0 22px 0;
        border: none;
        background: #f1f1f1;
        resize: none;
        min-height: 200px;
    }

    .form-container textarea:focus {
        background-color: #ddd;
        outline: none;
    }

    .form-container .btn {
        background-color: #04AA6D;
        color: white;
        padding: 16px 20px;
        border: none;
        cursor: pointer;
        width: calc(100% - 20px); /* Adjust width value as needed */
        margin-bottom: 10px;
        opacity: 0.8;
    }

    .form-container .cancel {
        background-color: red;
    }

    .form-container .btn:hover,
    .open-button:hover {
        opacity: 1;
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
      <?php } ?>
      <!-- <div class="image_2"><img src="images/img-3.png" style="width:100px"></div> -->
      <?php if(isset($_SESSION['sl_name'] )){ ?>
      <h1 class="about_taital">Welcome Seller <?php echo $_SESSION['sl_name'];  ?></h1>
      <?php }else{ ?>
        <h1 class="about_taital"> Hello </h1>
        <?php } ?>
      <div class="image_3"><img src="images/123.png"></div>
      <p class="lorem_text">consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
      <div class="read_bt_1"><a href="#">Read More</a></div>
    </div>
  </div>
    <!--contact section start -->
  <div class="contact_section layout_padding margin_top_80">
    <div class="container">
      <div class="image_2"><img src="images/img-3.png" style="width:200px"></div>
      <h1 class="about_taital">Contact Us</h1>
      <div class="row">
          <div class="col-md-6" id="chatsend">
              <div class="mail_sectin">
                <button class="open-button" id="chatButton" onclick="openForm()">Open Chat</button>
                <div class="chat-popup" id="myForm">
                  <form action="comments_insert_page.php" method ="Post" class="form-container">
                      <h1>Chat</h1>
                      <label raedonly><b><?php echo $_SESSION['sl_name'];?></b></label>
                      <textarea placeholder="Type message.." name="msg" required></textarea>
                      <input type="submit" class="btn" name="send" value="send" >
                      <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
                  </form>
                </div>
              </div>
          </div>
          
          <div class="col-md-6">
            <div class="map_main">
              <div class="map-responsive">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29466.29539923724!2d88.3797145409352!3d22.60575825471904!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a027606dc300fb1%3A0x1e8c3008eba56670!2sSouth%20Dumdum%2C%20West%20Bengal!5e0!3m2!1sen!2sin!4v1708786563740!5m2!1sen!2sin" width="600" height="480" frameborder="0" style="border:0; width: 100%;" allowfullscreen></iframe>
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>
  <!--contact section end -->
  <br><br>
  <!-- Seller chat start -->
  <script>
        function openForm() {
            document.getElementById("myForm").style.display = "block";
        }

        function closeForm() {
            document.getElementById("myForm").style.display = "none";
        }

        // Additional code to ensure the button stays within the chatsend element
        window.addEventListener('scroll', function () {
        var chatsend = document.getElementById('chatsend');
        var button = document.getElementById('chatButton');

        var buttonBottom = button.getBoundingClientRect().bottom;
        var chatsendBottom = chatsend.getBoundingClientRect().bottom;

        if (buttonBottom > chatsendBottom) {
            // Adjust the button position to stay within the chatsend element
            var offset = buttonBottom - chatsendBottom + 20; // You may need to adjust this value
            button.style.bottom = offset + 'px';
        } else {
            // Reset the button position
            button.style.bottom = '20px'; // Adjust this value to match your initial bottom value
        }
      });
  </script>
   <!-- Seller chat end -->
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
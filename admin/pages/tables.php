<?php include("../inc_files/dbconnect.php"); 
error_reporting(0);
?>
<?php
session_start();
if(!isset($_SESSION['admin_name'])){
  header("location:sign-in.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Admin Dashboard
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.1.0" rel="stylesheet" />
  <!-- Nepcha Analytics (nepcha.com) -->
  <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
  <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
</head>

<body class="g-sidenav-show  bg-gray-200">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <!-- Start sidenavv -->
  <?php include("../inc_files/sidebar_header.php"); ?>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <?php include("../inc_files/side_bar.php"); ?>
    </div>
    <?php include("../inc_files/sidebar_footer.php"); ?>
    <!-- End sidenavv -->
  </aside>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Tables</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Tables</h6>
        </nav>
        <?php include("../inc_files/navbar.php"); ?>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">

      <!-- Start Top Row -->
      <div class="row">

        <!-- productshow -->
          <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
              <div class="card-header p-3 pt-2">
                <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                  <i class="material-icons opacity-10">weekend</i>
                </div>
                <div class="text-end pt-1">
                  <p class="text-sm mb-0 text-capitalize">Add Product</p>
                  <a href="add_product.php" class="text-secondary text-xs btn btn-info"  data-toggle="tooltip" data-original-title="Edit user">
                    <span style="color:white;">ADD</span>
                  </a>
                </div>
              </div>
              <hr class="dark horizontal my-0">
              <div class="card-footer p-3 bg-gradient-warning shadow-primary" style="display:flex; justify-content:space-between;">
                <a href="view_product_table.php" style="margin-right: 30px;" class="text-secondary font-weight-bold text-xs btn btn-dark"  data-toggle="tooltip" data-original-title="Edit user">
                  <span style="color:white;">View all</span>
                </a>
              </div>
            </div>
          </div>     
        <!-- Customer Table -->
          <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
              <div class="card-header p-3 pt-2">
                <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                  <i class="material-icons opacity-10">person</i>
                </div>
                <div class="text-end pt-1">
                  <p class="text-sm mb-0 text-capitalize">Total User</p>
                  <?php
                      // $name=$_SESSION['cs_name'];
                      $sql = "SELECT COUNT(*) AS total_rows FROM customer";
                      $result = $con->query($sql);
                                  
                      if ($result->num_rows > 0) {
                          $row = $result->fetch_assoc();
                          $data = $row["total_rows"];
                          } else {
                            echo "0";
                        }
                    ?>
                  <h4 class="mb-0">~ <?php echo $data;?></h4>
                </div>
              </div>
              <hr class="dark horizontal my-0">
              <div class="card-footer p-3 bg-gradient-danger shadow-primary" style="display:flex; justify-content:space-between;">
                <a href="view_customer_table.php" style="margin-right: 30px;" class="text-secondary font-weight-bold text-xs btn btn-dark"  data-toggle="tooltip" data-original-title="Edit user">
                  <span style="color:white;">View all</span>
                </a>
              </div>
            </div>
          </div>
        <!-- Seller Table -->
          <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
              <div class="card-header p-3 pt-2">
                <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                  <i class="material-icons opacity-10">person</i>
                </div>
                <div class="text-end pt-1">
                  <p class="text-sm mb-0 text-capitalize">Total Seller</p>
                  <?php
                      // $name=$_SESSION['cs_name'];
                      $sql = "SELECT COUNT(*) AS total_rows FROM seller";
                      $result = $con->query($sql);
                                  
                      if ($result->num_rows > 0) {
                          $row = $result->fetch_assoc();
                          $data=$row["total_rows"];
                          } else {
                            echo "0";
                        }
                    ?>
                  <h4 class="mb-0">~ <?php echo $data +1;?></h4>
                </div>
              </div>
              <hr class="dark horizontal my-0">
              <div class="card-footer p-3 bg-gradient-danger shadow-primary" style="display:flex; justify-content:space-between;">
                <a href="view_seller_table.php" style="margin-right: 30px;" class="text-secondary font-weight-bold text-xs btn btn-dark"  data-toggle="tooltip" data-original-title="Edit user">
                  <span style="color:white;">View all</span>
                </a>
              </div>
            </div>
          </div>
        <!-- Order Sales Table -->
          <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
              <div class="card-header p-3 pt-2">
                <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                  <i class="material-icons opacity-10">weekend</i>
                </div>
                <div class="text-end pt-1">
                  <p class="text-sm mb-0 text-capitalize">Total Sales</p>
                  <?php
                        $sqlt = "SELECT SUM(pro_price * pro_qty) AS total_price FROM order_data";
                        $result = $con->query($sqlt);
                        if ($result->num_rows > 0) {
                            $row = $result->fetch_assoc();
                          } else {
                            echo "00.00";
                        } 
                    ?>
                  <h5 class="mb-0">₹ <?php echo $row["total_price"]; ?>.00 /-</h5>
                </div>
              </div>
              <hr class="dark horizontal my-0">
              <div class="card-footer p-3 bg-gradient-danger shadow-primary" style="display:flex; justify-content:space-between;">
                <a href="view_order_table.php" style="margin-right: 30px;" class="text-secondary font-weight-bold text-xs btn btn-dark"  data-toggle="tooltip" data-original-title="Edit user">
                  <span style="color:white;">View all</span>
                </a>
              </div>
            </div>
          </div>

      </div>
      <!-- End Top Row -->
      <br>
      <hr style="border:3px solid grey;">
      <br>

      <!-- Start 2nd Row -->
      <div class="row">

        <!-- category list show -->
          <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
              <div class="card-header p-3 pt-2">
                <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                  <i class="material-icons opacity-10">weekend</i>
                </div>
                <div class="text-end pt-1">
                  <p class="text-sm mb-0 text-capitalize">Category</p>
                  <a href="add_category.php"  class="text-secondary text-xs btn btn-info"  data-toggle="tooltip" data-original-title="Edit user">
                    <span style="color:white;">ADD</span>
                  </a>
                </div>
              </div>
              <hr class="dark horizontal my-0">
              <div class="card-footer p-3 bg-gradient-warning shadow-primary" style="display:flex; justify-content:space-between;">
                <a href="view_category_list.php" style="margin-right: 30px;" class="text-secondary font-weight-bold text-xs btn btn-dark"  data-toggle="tooltip" data-original-title="Edit user">
                  <span style="color:white;">View Categories</span>
                </a>
              </div>
            </div>
          </div> 

        <!-- offer list show-->
          <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
              <div class="card-header p-3 pt-2">
                <div class="icon icon-lg icon-shape bg-gradient-dark shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                  <i class="material-icons opacity-10">weekend</i>
                </div>
                <div class="text-end pt-1">
                  <p class="text-sm mb-0 text-capitalize">Total offer</p>
                  <a href="add_offer.php" class="text-secondary text-xs btn btn-info"  data-toggle="tooltip" data-original-title="Edit user">
                    <span style="color:white;">ADD</span>
                  </a>
                </div>
              </div>
              <hr class="dark horizontal my-0">
              <div class="card-footer p-3 bg-gradient-warning shadow-primary" style="display:flex; justify-content:space-between;">
                <a href="view_offer_list.php" style="margin-right: 30px;" class="text-secondary font-weight-bold text-xs btn btn-dark"  data-toggle="tooltip" data-original-title="Edit user">
                  <span style="color:white;">View Offers</span>
                </a>
              </div>
            </div>
          </div>

        <!-- User Cart list show -->
          <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
              <div class="card-header p-3 pt-2">
                <div class="icon icon-lg icon-shape bg-gradient-dark shadow-success text-center border-radius-xl mt-n4 position-absolute">
                  <i class="material-icons opacity-10">weekend</i>
                </div>
                <div class="text-end pt-1">
                  <p class="text-sm mb-0 text-capitalize">Cart</p>
                </div>
              </div>
              <hr class="dark horizontal my-0">
              <div class="card-footer p-3 bg-gradient-danger shadow-primary" style="display:flex; justify-content:space-between;">
                <a href="view_cart_list.php" style="margin-right: 30px;" class="text-secondary font-weight-bold text-xs btn btn-dark"  data-toggle="tooltip" data-original-title="Edit user">
                  <span style="color:white;">View Carts by User</span>
                </a>
              </div>
            </div>
          </div>

        <!-- User Wishlist show -->
          <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
              <div class="card-header p-3 pt-2">
                <div class="icon icon-lg icon-shape bg-gradient-dark shadow-info text-center border-radius-xl mt-n4 position-absolute">
                  <i class="material-icons opacity-10">weekend</i>
                </div>
                <div class="text-end pt-1">
                  <p class="text-sm mb-0 text-capitalize">Wishlist Product</p>
                </div>
              </div>
              <hr class="dark horizontal my-0">
              <div class="card-footer p-3 bg-gradient-danger shadow-primary" style="display:flex; justify-content:center;">
                <a href="view_order_table.php" style="margin-right: 30px;" class="text-secondary font-weight-bold text-xs btn btn-dark"  data-toggle="tooltip" data-original-title="Edit user">
                  <span style="color:white;">View Wishlist</span>
                </a>
              </div>
            </div>
          </div>

      </div>
      <!-- End 2nd Row -->

      <br>
      <hr style="border:3px solid grey;">
      <br>

      <!-- Start 3rd Row -->
      <div class="row">

        <!-- category list show -->
          <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
              <div class="card-header p-3 pt-2">
                <div class="icon icon-lg icon-shape bg-gradient-danger shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                  <i class="material-icons opacity-10">weekend</i>
                </div>
                <div class="text-end pt-1">
                  <p class="text-sm mb-0 text-capitalize">Category</p>
                  <a href="view_order_table.php"  class="text-secondary text-xs btn btn-info"  data-toggle="tooltip" data-original-title="Edit user">
                    <span style="color:white;">ADD</span>
                  </a>
                </div>
              </div>
              <hr class="dark horizontal my-0">
              <div class="card-footer p-3 bg-gradient-dark shadow-primary" style="display:flex; justify-content:space-between;">
                <a href="view_category_list.php" style="margin-right: 30px;" class="text-secondary font-weight-bold text-xs btn btn-dark"  data-toggle="tooltip" data-original-title="Edit user">
                  <span style="color:white;">View Categories</span>
                </a>
              </div>
            </div>
          </div> 

        <!-- offer list show-->
          <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
              <div class="card-header p-3 pt-2">
                <div class="icon icon-lg icon-shape bg-gradient-danger shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                  <i class="material-icons opacity-10">weekend</i>
                </div>
                <div class="text-end pt-1">
                  <p class="text-sm mb-0 text-capitalize">Total offer</p>
                  <a href="view_order_table.php" class="text-secondary text-xs btn btn-info"  data-toggle="tooltip" data-original-title="Edit user">
                    <span style="color:white;">ADD</span>
                  </a>
                </div>
              </div>
              <hr class="dark horizontal my-0">
              <div class="card-footer p-3 bg-gradient-dark shadow-primary" style="display:flex; justify-content:space-between;">
                <a href="view_offer_list.php" style="margin-right: 30px;" class="text-secondary font-weight-bold text-xs btn btn-dark"  data-toggle="tooltip" data-original-title="Edit user">
                  <span style="color:white;">View Offers</span>
                </a>
              </div>
            </div>
          </div>

        <!-- User Cart list show -->
          <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
              <div class="card-header p-3 pt-2">
                <div class="icon icon-lg icon-shape bg-gradient-danger shadow-success text-center border-radius-xl mt-n4 position-absolute">
                  <i class="material-icons opacity-10">weekend</i>
                </div>
                <div class="text-end pt-1">
                  <p class="text-sm mb-0 text-capitalize">Cart</p>
                  <a href="view_order_table.php" class="text-secondary text-xs btn btn-info"  data-toggle="tooltip" data-original-title="Edit user">
                    <span style="color:white;">ADD</span>
                  </a>
                </div>
              </div>
              <hr class="dark horizontal my-0">
              <div class="card-footer p-3 bg-gradient-dark shadow-primary" style="display:flex; justify-content:space-between;">
                <a href="view_cart_list.php" style="margin-right: 30px;" class="text-secondary font-weight-bold text-xs btn btn-dark"  data-toggle="tooltip" data-original-title="Edit user">
                  <span style="color:white;">View Carts by User</span>
                </a>
              </div>
            </div>
          </div>

        <!-- User Wishlist show -->
          <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
              <div class="card-header p-3 pt-2">
                <div class="icon icon-lg icon-shape bg-gradient-danger shadow-info text-center border-radius-xl mt-n4 position-absolute">
                  <i class="material-icons opacity-10">weekend</i>
                </div>
                <div class="text-end pt-1">
                  <p class="text-sm mb-0 text-capitalize">Wishlist Product</p>
                  <a href="view_order_table.php" class="text-secondary text-xs btn btn-info"  data-toggle="tooltip" data-original-title="Edit user">
                    <span style="color:white;">ADD</span>
                  </a>
                </div>
              </div>
              <hr class="dark horizontal my-0">
              <div class="card-footer p-3 bg-gradient-dark shadow-primary" style="display:flex; justify-content:center;">
                <a href="view_order_table.php" style="margin-right: 30px;" class="text-secondary font-weight-bold text-xs btn btn-dark"  data-toggle="tooltip" data-original-title="Edit user">
                  <span style="color:white;">View Wishlist</span>
                </a>
              </div>
            </div>
          </div>

      </div>
      <!-- End 3rd Row -->


      <!-- Start Footer Row -->
       <?php include("../inc_files/footer.php"); ?>
      <!-- End Footer Row -->
    </div>
  </main>

  <!-- Toggle sidebar -->
  <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="material-icons py-2">settings</i>
    </a>
    <?php include("../inc_files/settings_sidebar.php"); ?>
  </div>
  <!-- Toggle sidebar -->
  
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=3.1.0"></script>
</body>

</html>
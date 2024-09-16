<?php include("../inc_files/dbconnect.php"); 
$offid=$_GET['offid'];
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
  <style>
        .div{
            background:darkred;
            border-radius:6px;
        }
        .div ul{
            background:darkorange;
        }
        .div ul li{
            background: darkseagreen;
        }
  </style>
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
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Offer</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Offer Details by Product</h6>
        </nav>
        <?php include("../inc_files/navbar.php"); ?>        
      </div>
    </nav>

    <!-- End Navbar -->
    
    <div class="container-fluid py-4">

      <div class="row">
        <!-- Offer_informatin -->
        <div class="col-md-7 mt-4">
          <div class="card">
            <div class="card-header pb-0 px-3">
              <h5 class="mb-0">Offer Information</h5>
            </div>
            <div class="card-body pt-4 p-3">
              <ul class="list-group">                 
                <h6 class="mb-0">Offer Details</h6>
                    <?php
                        $sel="SELECT * FROM veg_offer WHERE offer_id='$offid'";
                        $result=mysqli_query($con,$sel);
                        while($row=$result->fetch_assoc()){
                    ?>
                <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                  <div class="d-flex flex-column">
                    <h6 class="mb-3 text-sm"><?php echo $row['offer_name']; ?></h6>
                    <span class="mb-2 text-xs">Seller Name: <span class="text-dark font-weight-bold ms-sm-2"><?php echo $row['seller_name']; ?></span></span>
                    <span class="mb-2 text-xs">Massage: <span class="text-dark ms-sm-2 font-weight-bold"><?php echo $row['massage']; ?></span></span>
                    <span class="text-xs">Percentage: <span class="text-dark ms-sm-2 font-weight-bold"><?php echo $row['percentage']; ?> % </span></span>
                    <span class="text-xs" style="display:flex; justify-content:space-between;">Date: <span class="text-danger ms-sm-2 font-weight-bold"><?php echo $row['date_time']; ?> </span></span>
                  </div>
                  <div class="ms-auto text-end">
                    <!-- <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="delete_offer.php?offid=<?php echo $row['offer_id']; ?>"><i class="material-icons text-sm me-2">delete</i>Delete</a>
                    <a class="btn btn-link text-dark px-3 mb-0" href="update_offer.php?offid=<?php echo $row['offer_id']; ?>"><i class="material-icons text-sm me-2">edit</i>Edit</a> -->
                    <!-- <a class="btn btn-link text-dark px-3 mb-0" href="view_productby_offer.php?offid=<?php echo $row['offer_id']; ?>"><i class="material-icons text-sm me-2">view</i>View</a>  -->
                  </div>
                </li>
                <?php } ?>
              </ul>
            </div>
          </div>
        </div>

        <!-- transactions -->
        <div class="col-md-5 mt-4">
          <div class="card h-100 mb-4">
            <div class="card-header pb-0 px-3">
              <div class="row">
                <div class="col-md-6">
                  <h6 class="mb-0">Your Offer's</h6>
                </div>
                <div class="col-md-6 d-flex justify-content-start justify-content-md-end align-items-center">
                  <i class="material-icons me-2 text-lg">date_range</i>
                  <small>23 - 30 March 2020</small>
                </div>
              </div>
            </div>
            <div class="card-body pt-4 p-3">
              <?php
                  $offid=$_GET['offid'];
                  $sel="SELECT product.*,veg_offer.category_name,veg_offer.offer_name FROM veg_offer INNER JOIN product ON product.category = veg_offer.category_name WHERE offer_id='$offid'";
                  $result=mysqli_query($con,$sel);
                  while($rs=$result->fetch_assoc()){
                ?>
              <div class="div">
                <h6 class="text-uppercase text-body text-xs font-weight-bolder mb-3 text-danger"><?php echo $rs['offer_name'];?></h6>
                <ul class="list-group">
                    <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                    <div class="d-flex align-items-center">
                        <a href="view_product.php?pro_id=<?php echo $rs['id'];?>" class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-3 p-3 btn-sm d-flex align-items-center justify-content-center"><i class="material-icons text-lg">expand_more</i></a>
                        <div class="d-flex flex-column">
                        <h6 class="mb-1 text-dark text-sm"><?php echo $rs['name'];?></h6>
                        <span class="text-xs text-danger"><?php echo $rs['type'];?></span>
                        </div>
                    </div>
                    <div class="d-flex align-items-center text-danger text-gradient text-sm font-weight-bold">
                        - ₹<?php echo $rs['price'];?> /-
                    </div>
                    </li>
                    
                </ul>
              </div><br>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
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
  <!-- <script async defer src="https://buttons.github.io/buttons.js"></script> -->
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=3.1.0"></script>
</body>

</html>
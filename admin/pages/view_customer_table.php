<?php include("../inc_files/dbconnect.php"); ?>
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
    Admin
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
          <h6 class="font-weight-bolder mb-0">Customer Tables</h6>
        </nav>
        <?php include("../inc_files/navbar.php"); ?>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
        
      <!-- Customer Table -->
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-dark shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Customer table</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">UID</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Customer</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Details</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Password</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Date</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">View</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Delete</th>
                    </tr>
                  </thead>
                  <tbody>

                    <tr>
                    <?php
                        $c=1;
                        $selt=" SELECT * FROM customer";
                        $resultp=mysqli_query($con,$selt);
                        while($rsp=$resultp->fetch_assoc()){                      
                      ?>
                      <td>
                        <p class="text-xs text-center font-weight-bold mb-0"><?php echo $c;?></p>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm"><?php echo $rsp['name'];?></h6>
                            <p class="text-xs text-secondary mb-0"><?php echo $rsp['email'];?></p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">User ph</p>
                        <p class="text-xs text-secondary mb-0"><?php echo $rsp['phone'];?></p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-success"><?php echo $rsp['pass'];?></span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">Date</span>
                      </td>
                      <td class="align-middle text-center">
                        <a href="view_customer.php?cid=<?php echo $rsp['id']; ?>" class="text-secondary font-weight-bold text-xs btn btn-warning" data-toggle="tooltip" data-original-title="Edit user">
                        <span style="color:white;">VIEW</span>
                        </a>
                      </td>
                      <td class="align-middle text-center">
                        <a href="delete_customer.php?cid=<?php echo $rsp['id']; ?>" onclick="return confirm('Are you want to delete ?')" class="text-secondary font-weight-bold text-xs btn btn-danger"  data-toggle="tooltip" data-original-title="Edit user">
                        <span style="color:white;">DELETE</span>
                        </a>
                      </td>
                      
                    </tr>
                    <?php
                        $c++;                      
                        }
                      ?> 
                  </tbody>
                </table>
              </div>
            </div>
            <br>
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2" align="center">
              <div class="bg-gradient-info shadow-primary border-radius-lg pt-4 pb-3" >
                  <span style="color:white;">EXIT</span>
              </div>
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
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=3.1.0"></script>
</body>

</html>
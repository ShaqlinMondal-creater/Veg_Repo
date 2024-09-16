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
        /* background: antiquewhite; */
        padding :10px;
        border: 2px #bbbbb5 solid;
        height:40vh;
        width:33vw;
        margin:10px;


    }
    .div h6{
        margin:10px;
        display: flex;
        flex-direction: row;
        justify-content: space-between;
    }
    .div h6 input{
        margin-left: 10px;
        border-radius: 5px solid ;
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
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Product</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Add Product</h6>
        </nav>
        <?php include("../inc_files/navbar.php"); ?>        
      </div>
    </nav>

    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">

        <!-- Add Product -->
        <div class="col-md-7 mt-4">
          <div class="card">
            <div class="card-header pb-0 px-3">
              <h6 class="mb-0">Product Information</h6>
            </div>
            <div class="card-body pt-4 p-3">
              <ul class="list-group">
                <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                  <div class="d-flex flex-column">
                    <form action="add_ins_product.php" method="post" enctype="multipart/form-data">
                        <div class="div">
                        <h6 class="mb-3 text-sm">Name : 
                            <input type="text" name="pname" style="width: 25vw;">
                        </h6>
                        <h6 class="mb-3 text-sm">Price : 
                            <input type="text" name="pprice" style="width: 25vw;">
                        </h6>
                        <h6 class="mb-3 text-sm">Type : 
                            <input type="radio" name="ptype" value="Fresh">Fresh 
                            <input type="radio" name="ptype" value="Renew">Renew
                        </h6>
                        
                        <h6 class="mb-3 text-sm">Category : 
                            <select name="pcategory" id="">
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
                        </h6>
                        <h6 class="mb-3 text-sm" >Product Image : 
                            <input type="file" name="pimg" >
                        </h6>
                        <h6 class="mb-3 text-sm" style="display:flex; justify-content: end;"> 
                            <input type="submit" name="insert" value="Insert" >
                        </h6>
                        </div>
                    </form>
                  </div>
                  <div class="ms-auto text-end">
                    <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i class="material-icons text-sm me-2">delete</i>Delete</a>
                    <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i class="material-icons text-sm me-2">edit</i>Edit</a>
                  </div>
                </li>

              </ul>
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
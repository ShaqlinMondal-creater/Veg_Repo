<?php include("../inc_files/dbconnect.php"); ?>
<?php
$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"]=="POST"){

  $name = $_POST["name"];
  $email = $_POST["email"];
  $password = $_POST["pass"];
  $cpassword = $_POST["cpass"];
  // $exists = false;
  $existSql= "SELECT * FROM `admin` WHERE `email` = '$email'";
  $result = mysqli_query($con, $existSql);
  $numExistRows = mysqli_num_rows($result);

  if($numExistRows > 0){
    
    $showError = "Email already exist";
  }
  else{
  if(($password == $cpassword)){
    $hash = password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO `admin` (`name`, `email`, `pass`, `date`) VALUES ('$name', '$email', '$hash', current_timestamp())";
    // die($sql);
    $result = mysqli_query($con, $sql);
    if ($result){
      $showAlert = true;
    }
  }
  else{
    $showError = "Password do not match";
  }
}
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
    Argon Dashboard 2 by Creative Tim
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />
</head>

<body class="">
  <main class="main-content  mt-0">
    <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg" style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/signup-cover.jpg'); background-position: top;">
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5 text-center mx-auto">
            <h1 class="text-white mb-2 mt-5">Welcome!</h1>
            <p class="text-lead text-white">Use these awesome forms to login or create new account in your project for free.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row mt-lg-n10 mt-md-n11 mt-n10 justify-content-center">
        <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
          <div class="card z-index-0">
            <div class="card-header text-center pt-4">
              <h5>Register</h5>
            </div>
            <div class="card-body">
              <form role="form"  method="post">
                <div class="mb-3">
                  <input type="text" class="form-control" placeholder="Name" aria-label="Name" name="name" id="txtName" onkeypress="return Validate(event);" required>
                  <span id="lblError" style="color: red"></span>
                </div>
                <div class="mb-3">
                  <input type="email" class="form-control" placeholder="Email" aria-label="Email" id="email" name="email" required>
                  <span id="error_email" style="color: red;"></span>
                </div>
                <div class="mb-3">
                  <input type="password" class="form-control" placeholder="Password" aria-label="Password" name="pass" pattern=".{8,16}"   required title="8 characters minimum and 16 maximum" id="txtPassword" onkeyup="CheckPasswordStrength(this.value)" required>
                  <span id="password_strength"></span>
                </div>
                <div class="mb-3">
                  <input type="password" class="form-control" placeholder=" Confirm Password" aria-label="cPassword" id="txtConfirmPassword" name="cpass" required>
                  <span class="registrationFormAlert" style="color:green;" id="CheckPasswordMatch"></span>
                </div>
                
                <div class="text-center">
                  <button type="submit" id="myButton" class="btn bg-gradient-dark w-100 my-4 mb-2">Sign up</button>
                </div>
                <p class="text-sm mt-3 mb-0">Already have an account? <a href="sign-in.php" class="text-dark font-weight-bolder">Sign in</a></p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <!-- -------- START FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
  <footer class="footer py-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mb-4 mx-auto text-center">
          <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
            Company
          </a>
          <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
            About Us
          </a>
          <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
            Team
          </a>
          <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
            Products
          </a>
          <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
            Blog
          </a>
          <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
            Pricing
          </a>
        </div>
        <div class="col-lg-8 mx-auto text-center mb-4 mt-2">
          <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
            <span class="text-lg fab fa-dribbble"></span>
          </a>
          <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
            <span class="text-lg fab fa-twitter"></span>
          </a>
          <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
            <span class="text-lg fab fa-instagram"></span>
          </a>
          <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
            <span class="text-lg fab fa-pinterest"></span>
          </a>
          <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
            <span class="text-lg fab fa-github"></span>
          </a>
        </div>
      </div>
      <div class="row">
        <div class="col-8 mx-auto text-center mt-1">
          <p class="mb-0 text-secondary">
            Copyright © <script>
              document.write(new Date().getFullYear())
            </script> Soft by Creative Tim.
          </p>
        </div>
      </div>
    </div>
  </footer>
  <!-- -------- END FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
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
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/argon-dashboard.min.js?v=2.0.4"></script>
  
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script type="text/javascript">
    function Validate(e) {
        var keyCode = e.keyCode || e.which;
 
        var lblError = document.getElementById("lblError");
        lblError.innerHTML = "";
 
        //Regex for Valid Characters i.e. Alphabets.
        var regex = /^[A-Za-z]+$/;
 
        //Validate TextBox value against the Regex.
        var isValid = regex.test(String.fromCharCode(keyCode));
        if (!isValid) {
            lblError.innerHTML = "Name contains only letter!";
            $("#myButton").prop('disabled', true);
        }
 
        else{
        $("#myButton").prop('disabled', false);
      }
    }
</script>
<script>
$("#email").keyup(function(){
     var email = $("#email").val();
     var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
     if (!filter.test(email)) {
       //alert('Please provide a valid email address');
       $("#error_email").text("Please enter a valid email. ");
       email.focus;
       $("#myButton").prop('disabled', true);
      
       //return false;
    } else {
        $("#error_email").text("");
        $("#myButton").prop('disabled', false);
    }
 });
 </script>
 <script type="text/javascript">
    function CheckPasswordStrength(password) {
        var password_strength = document.getElementById("password_strength");
 
        //TextBox left blank.
        if (password.length == 0) {
            password_strength.innerHTML = "";
            return;
        }
 
        //Regular Expressions.
        var regex = new Array();
        regex.push("[A-Z]"); //Uppercase Alphabet.
        regex.push("[a-z]"); //Lowercase Alphabet.
        regex.push("[0-9]"); //Digit.
        regex.push("[$@$!%*#?&]"); //Special Character.
        // regex.push("^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$"
 //Special Character.
 
        var passed = 0;
 
        //Validate for each Regular Expression.
        for (var i = 0; i < regex.length; i++) {
            if (new RegExp(regex[i]).test(password)) {
                passed++;
            }
        }
 
        //Validate for length of Password.
        if (passed > 8 && password.length > 15) {
            passed++;
        }
 
        //Display status.
        var color = "";
        var strength = "";
        switch (passed) {
            // case 0:
            case 1:
                strength = "Weak Password";
                color = "red";
                break;
            case 2:
                strength = "Average Password";
                color = "darkorange";
                break;
            case 3:
            case 4:
                strength = "Strong Password";
                color = "green";
                break;
            case 5:
                strength = "Very Strong Passsword";
                color = "darkgreen";
                break;
        }
        password_strength.innerHTML = strength;
        password_strength.style.color = color;
    }
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        function checkPasswordMatch() {
            console.log("Function called"); // Debugging statement
            
            var password = $("#txtPassword").val();
            var confirmPassword = $("#txtConfirmPassword").val();
            console.log("Password: " + password + ", Confirm Password: " + confirmPassword); // Debugging statement
            
            if (password !== confirmPassword) {
                console.log("Passwords don't match"); // Debugging statement
                
                $("#CheckPasswordMatch").html("Password doesn't match!");
                $("#myButton").prop('disabled', true);
                $("#CheckPasswordMatch").css("color", "red");
            } else {
                console.log("Passwords match"); // Debugging statement
                
                $("#CheckPasswordMatch").html("Password matched.");
                $("#myButton").prop('disabled', false);
                $("#CheckPasswordMatch").css("color", "green");
            }
        }
        
        $("#txtConfirmPassword").keyup(checkPasswordMatch);
    });
</script>



  

</html>
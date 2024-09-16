<?php include("admin/inc_files/dbconnect.php"); ?>
<?php

if(isset($_POST['signup'])){

    $n=$_POST['name'];
    $e=$_POST['email'];
    $p=$_POST['phone'];
    $pass=$_POST['pass'];

    $buf=$_FILES['imgg']['tmp_name'];
    $fn=time().$_FILES['imgg']['name'];
    move_uploaded_file($buf,"seller_image/".$fn);

    $ins="INSERT INTO seller SET s_name='$n',s_email='$e',s_phone='$p',s_pass='$pass',sel_img='$fn'";

    if(mysqli_query($con,$ins)){
        header("location:seller_login.php");
    }else{
        $err = "Not Inserted by seller";
    }


}else{
    echo "Access Denied !";
}

?>

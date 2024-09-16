<?php include("admin/inc_files/dbconnect.php"); ?>
<?php

if(isset($_POST['signup'])){

    $n=$_POST['name'];
    $e=$_POST['email'];
    $p=$_POST['phone'];
    $pass=$_POST['pass'];

    $ins="INSERT INTO customer SET name='$n',email='$e',phone='$p',pass='$pass'";

    if(mysqli_query($con,$ins)){
        header("location:user_login.php");
    }else{
        $err = "Not Inserted";
    }


}else{
    echo "Access Denied !";
}

?>


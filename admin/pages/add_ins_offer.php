<?php include("../ins_files/dbconnect.php"); ?>
<?php
session_start();
if(!isset($_SESSION['ad_name'])){
    header("location:login.php");
}
$a_name=$_SESSION['ad_name'];
?>
<?php
if(isset($_POST['submit'])){

    $cat_name=$_POST['category'];
    $percent=$_POST['percent'];
    $offer=$_POST['offer_name'];

    $ins="INSERT INTO veg_offer SET category_name='$cat_name',percentage='$percent',offer_name='$offer',date_time='ADMIN'";
    if(mysqli_query($con,$ins)){
        header("location:view_offer_list.php");
    }else{
        echo "invalid !not inserted offer !!!";
    }
}

?>
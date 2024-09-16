<?php include("admin/inc_files/dbconnect.php"); ?>
<?php
session_start();
if(!isset($_SESSION['sl_name'])){
    header("location:sel_index.php");
}
$s_name=$_SESSION['sl_name'];
?>
<?php
if(isset($_POST['send'])){

    $cat_name=$_POST['category'];
    $percent=$_POST['percent'];
    $offer=$_POST['offer_name'];
    $massage=$_POST['massage'];

    $dt= new DateTime('now', new DateTimeZone('Asia/Kolkata'));
    $date_time=$dt->format('d-m-Y H:i:s');

    $ins="INSERT INTO veg_offer SET category_name='$cat_name',percentage='$percent',offer_name='$offer',massage='$massage',seller_name='$s_name',date_time='$date_time'";
    if(mysqli_query($con,$ins)){
        header("location:seller_c_offer.php");
    }else{
        echo "invalid !not inserted offer !!!";
    }
}

?>
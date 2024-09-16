<?php include("../inc_files/dbconnect.php"); ?>
<?php
$id=$_GET['pro_id'];

$sel="SELECT * FROM product WHERE id='$id'";
$result=mysqli_query($con,$sel);
$rs=$result->fetch_assoc();

unlink("../pll/".$rs['picc']);

$del="DELETE FROM product WHERE id='$id'";
if(mysqli_query($con,$del)){
    header("location:view_product_table.php");
}else{
    echo "Not Deleted";
}

?>
<?php include("../inc_files/dbconnect.php"); ?>
<?php
$id=$_GET['cid'];

// $sel="SELECT * FROM product WHERE id='$id'";
// $result=mysqli_query($con,$sel);
// $rs=$result->fetch_assoc();

// unlink("pll/".$rs['picc']);

$del="DELETE FROM customer WHERE id='$id'";
if(mysqli_query($con,$del)){
    header("location:view_customer_table.php");
}else{
    echo "Not Deleted";
}

?>
<?php include("../inc_files/dbconnect.php"); ?>
<?php
$sid=$_GET['s_id'];

$del="DELETE FROM seller WHERE s_id='$sid'";
if(mysqli_query($con,$del)){
    header("location:view_seller_table.php");
}else{
    echo "Not Deleted";
}

?>
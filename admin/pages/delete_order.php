<?php include("../inc_files/dbconnect.php"); ?>
<?php
$id=$_GET['oid'];

$del="DELETE FROM order_data WHERE order_id='$id'";
if(mysqli_query($con,$del)){
    header("location:view_order_table.php");
}else{
    echo "Not Deleted";
}

?>
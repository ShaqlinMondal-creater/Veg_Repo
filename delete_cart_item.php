<?php include("admin/inc_files/dbconnect.php"); ?>
<?php

$id=$_GET['cart_id'];

$del="DELETE FROM add_cart_data WHERE cart_id='$id'";
if(mysqli_query($con,$del)){
    header("location:cart_item.php");
}else{
    echo "Not Deleted item !";
}

?>
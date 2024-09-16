<?php include("../inc_files/dbconnect.php"); ?>
<?php
$offid=$_GET['offid'];

$del="DELETE FROM veg_offer WHERE offer_id='$offid'";
if(mysqli_query($con,$del)){
    header("location:view_offer_list.php");
}else{
    echo "Not Deleted";
}

?>
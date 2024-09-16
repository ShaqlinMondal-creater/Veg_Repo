<?php include("../inc_files/dbconnect.php"); ?>

<?php
if(isset($_POST['update'])){

    $id=$_POST['oid'];
    $n=$_POST['oname'];
    $p=$_POST['opercentage'];
    $c=$_POST['ocategory'];

    $upd="UPDATE veg_offer SET offer_name='$n',percentage='$p',category_name='$c' WHERE offer_id='$id'";
      

    if(mysqli_query($con,$upd)){
        header("location:view_offer_list.php");
    }else{
        echo " Not updated";
    }


}else{
    echo "Access Denied !";
}

?>
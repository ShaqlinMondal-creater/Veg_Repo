<?php include("../inc_files/dbconnect.php"); ?>
<?php
if(isset($_POST['save'])){

    $cat_name=$_POST['cat_name'];
    $parent_id=$_POST['parent_id'];

    $ins="INSERT INTO categories SET category_name='$cat_name',parent_cat_id='$parent_id'";
    if(mysqli_query($con,$ins)){
        header("location:view_category_list.php");
    }else{
        echo "Not inserted cat !";
    }

}else{
    echo "Access Denied !";
}


?>
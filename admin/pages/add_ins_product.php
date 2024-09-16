<?php include("../inc_files/dbconnect.php"); ?>
<?php
if(isset($_POST['insert'])){

    $n=$_POST['pname'];
    $p=$_POST['pprice'];
    $c=$_POST['pcategory'];
    $t=$_POST['ptype'];

    $buf=$_FILES['pimg']['tmp_name'];
    $fn=time().$_FILES['pimg']['name'];
    move_uploaded_file($buf,"../pll/".$fn);

    $ins="INSERT INTO product SET name='$n',price='$p',category='$c',type='$t',picc='$fn'";

    if(mysqli_query($con,$ins)){
        header("location:view_product_table.php");
    }else{
        echo " Not inserted";
    }


}else{
    echo "Access Denied !";
}

?>
<?php include("../inc_files/dbconnect.php"); ?>

<?php
if(isset($_POST['update'])){

    $id=$_POST['uid'];
    $n=$_POST['uname'];
    $p=$_POST['uprice'];
    $c=$_POST['ucategory'];
    $t=$_POST['utype'];

    if(isset($_FILES['uimg']['name']) && $_FILES['uimg']['name'] !=""){

        $buf=$_FILES['uimg']['tmp_name'];
        $fn=time().$_FILES['uimg']['name'];
        move_uploaded_file($buf,"../pll/".$fn);
        $upd="UPDATE product SET name='$n',price='$p',category='$c',type='$t',picc='$fn' WHERE id='$id'";
    }else{
        $upd="UPDATE product SET name='$n',price='$p',category='$c',type='$t' WHERE id='$id'";
    }
    

    if(mysqli_query($con,$upd)){
        header("location:view_product_table.php");
    }else{
        echo " Not updated";
    }


}else{
    echo "Access Denied !";
}

?>
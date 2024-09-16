<?php include("admin/inc_files/dbconnect.php"); ?>
<?php
session_start();

$message_updated="Cart updated ";
$message_not_updated="Cart Not Updated !";
$message = "Quantity is not defined or it cannot be 0";



if (isset($_POST['add_cart'])) {

    $pro_id = $_POST['pid'];
    $pro_name = $_POST['pname'];
    $pro_qty = $_POST['qnty'];
    $pro_price = $_POST['price'];
    $user_id = $_POST['uid'];
    $user_name = $_POST['uname'];

    $name = $_SESSION['cs_name'];
    $sel = "SELECT * FROM add_cart_data WHERE user_name='$name' AND pro_id='$pro_id' ";
    $result = mysqli_query($con, $sel);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            if ($pro_qty > 0) {
            $updateQuantity = (int)$row['pro_qty'] + (int)$pro_qty;
            $cartId = $row['cart_id'];
            $update = "UPDATE add_cart_data SET pro_qty='$updateQuantity' WHERE cart_id='$cartId'";
            if (mysqli_query($con, $update)) {
                echo "<script>alert('$message_updated');</script>";
                header("location:cart_item.php");
            }
        }else{
            echo "<script>alert('$message_not_updated');</script>";
        }
        }
    } else {
        if ($pro_qty > 0) {
            $ins_cart = "INSERT INTO add_cart_data SET pro_id='$pro_id',pro_name='$pro_name',pro_qty='$pro_qty',pro_price='$pro_price',user_id='$user_id',user_name='$user_name' ";
            mysqli_query($con, $ins_cart);
            header("location:cart_item.php");
        } else {
            echo "<script>alert('$message');</script>";
            
            ?>
            <div class="bt btn-danger"><a href="index.php">Back</a></div>
            <?php
        }
    }
} else {
    echo "Access denied !";
}
?>

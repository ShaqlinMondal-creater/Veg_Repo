<?php include("admin/inc_files/dbconnect.php"); ?>
<?php
session_start();

if (isset($_POST['order'])) {

    $bill_name = $_POST['bil_name'];
    $bill_email = $_POST['bil_email'];
    $bill_phone = $_POST['bil_phone'];
    $bill_address = $_POST['bil_address'];
    $ship_name = $_POST['ship_name'];
    $ship_email = $_POST['ship_email'];
    $ship_phone = $_POST['ship_phone'];
    $ship_address = $_POST['ship_address'];
   
    $customer_id=$_SESSION['cs_id'];
    $customer_name=$_SESSION['cs_name'];

    $dt= new DateTime('now', new DateTimeZone('Asia/Kolkata'));
    $odate=$dt->format('d-m-Y H:i:s');
    $pay_status = $_POST['pay_status'];

    $ins = "INSERT INTO master_order SET 
    bill_name='$bill_name',bill_email='$bill_email',
    bill_phone='$bill_phone',bill_address='$bill_address',
    ship_name='$ship_name',ship_email='$ship_email',
    ship_phone='$ship_phone',ship_address='$ship_address',
    order_date='$odate',customer_id='$customer_id',
    customer_name='$customer_name',payment_status='$pay_status'";


    if(mysqli_query($con,$ins)){

        $moid=$con->insert_id;
        $sel="SELECT * FROM add_cart_data WHERE user_id='$customer_id'";
        $res=mysqli_query($con,$sel);
        while($rs=$res->fetch_assoc()){
            $pro_id=$rs['pro_id'];
            $pro_qty=$rs['pro_qty'];
            $pro_price=$rs['pro_price'];
            $cart_id=$rs['cart_id'];
       
            $ins_subt="INSERT INTO sub_order SET mo_id='$moid',pro_id='$pro_id',pro_price='$pro_price',pro_qty='$pro_qty',cart_id='$cart_id',user_id='$customer_id'";
            mysqli_query($con,$ins_subt);
        }
        $del = "DELETE FROM add_cart_data WHERE user_id='$customer_id'";
        if(mysqli_query($con,$del)){

            header("location:ordered_item.php"); 
            
        }else{
            echo "Proceed Not yet"; 
        }
               
    }else{
        echo "Cart is not Proceed  !";
    }
     
} else {
    echo "Access denied !";
}
?>

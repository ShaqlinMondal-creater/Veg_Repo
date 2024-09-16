<?php include("admin/inc_files/dbconnect.php"); ?>
<?php
session_start();
if(isset($_SESSION['cs_id'])){
                                
    $idc=$_SESSION['cs_id']; 
}
// extract($_POST);
$c_id=$_POST['c_id'];
$qty=$_POST['qty'];


$upd="UPDATE add_cart_data SET pro_qty='$qty' WHERE cart_id='$c_id'";

$con->query($upd);

?>

<table class="table" id="cart_table">
            <thead>
                <tr>
                    <th scope="col" class="col-md-2 text-center">SL</th>
                    <th scope="col" class="col-md-2 text-center">IMAGE</th>
                    <th scope="col" class="col-md-2 text-center">PRODUCT</th>
                    <th scope="col" class="col-md-2 text-center">PRICE</th>
                    <th scope="col" class="col-md-2 text-center">QUANTITY</th>
                    <th scope="col" class="col-md-2 text-center">TOTAL</th>
                    <th scope="col" class="col-md-2 text-center">DELETE</th>
                </tr>
            </thead>
            <tbody>
              
                <?php 
                $c=1;
                $sel="SELECT add_cart_data.*, product.picc FROM add_cart_data JOIN product ON add_cart_data.pro_id = product.id WHERE user_id='$idc'" ;
                $result=mysqli_query($con,$sel);
                while($rs=$result->fetch_assoc()){
                 ?>
                <tr>
                    <th scope="row" class="col-md-2 text-center"><?php echo $c; ?></th>
                    <td class="col-md-2 text-center" ><img src="admin/pll/<?php echo $rs['picc'];?>" style="height: 15vh; width: 6vw;"></td>
                    <td class="col-md-2 text-center"><?php echo $rs['pro_name'];?></td>
                    <td class="col-md-2 text-center" >₹ <?php echo $rs['pro_price']; ?> .00/- </td>
                    <td class="col-md-2 text-center" >
                      <form id="frm<?php echo $rs['cart_id'];?>">
                        <input type="hidden" name="c_id" value="<?php echo $rs['cart_id'];?>">
                        <input type="number" name="qty" style="width: 4vw;" min='1' max='10' value="<?php echo $rs['pro_qty'];?>"
                          onchange="updateqty(<?php echo $rs['cart_id'];?>);"
                          onkeyup="updateqty(<?php echo $rs['cart_id'];?>);"
                          onkeydown="updateqty(<?php echo $rs['cart_id'];?>);"
                        >
                      </form>
                    </td>    
                    <td class="col-md-2 text-center" >₹ <?php echo $rs['pro_price'] * $rs['pro_qty'] ;?> .00/- </td>
                    <td class="col-md-2 text-center d-flex" >
                      <a href="delete_cart_item.php?cart_id=<?php echo $rs['cart_id'];?>" class="btn btn-danger">✕</a>
                    </td>
                </tr>
                <?php 
                $c++;
                }
            ?>  
            </tbody>
        </table>

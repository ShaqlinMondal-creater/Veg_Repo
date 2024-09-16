<?php
include("admin/inc_files/dbconnect.php");
session_start();

if (isset($_POST['send'])) {
    $name = $_SESSION['sl_name'];
    $id = $_SESSION['sl_id'];
    $cmts = $_POST['msg'];

    $dt = new DateTime('now', new DateTimeZone('Asia/Kolkata'));
    $date_time = $dt->format('d-m-Y H:i:s');

    $ins_cmts = "INSERT INTO seller_comments SET seller_name='$name', seller_id='$id', comments='$cmts', date_time='$date_time'";
    
    if (mysqli_query($con, $ins_cmts)) {
        header("location:sel_index.php");
    } else {
        echo "Not Send !!! ";
    }
}
?>

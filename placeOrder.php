<?php
    session_start();
    include('connect.php');
    $userId =  $_SESSION['id'];
    $qry= mysqli_query($con, "SELECT * FROM cart Where `user_id` = $userId");
    // $data = mysqli_fetch_array($qry);
    // echo $data;
    // print_r($data);
    // $success = false;
    foreach ( $qry as $value) {
        $include[] = "('$value[order_name]',$value[order_id],$value[order_price],$value[order_qty],'$value[order_img]',$value[user_id])";
    }  
    $values = implode(",", $include);
        $qry2 =  mysqli_query($con,"INSERT INTO `orders`(`item_name`,`item_id`,`item_price`,`item_qty`,`item_img`,`user_id`) VALUES $values");
        if($qry2){
            $query = mysqli_query($con, "DELETE FROM cart WHERE `user_id` = $userId");
            if($query){
                 echo "<script type='text/javascript'>alert('Place Order Successful!');</script>";
                 header("Refresh:1; url=home.php");
            }
        }
?>
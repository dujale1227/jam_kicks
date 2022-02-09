<?php
    session_start();
    // $_SESSION['productId'] = $productId; 
    include 'connect.php';

    if(isset($_SESSION['email'])){
        $productId = $_GET['productId'];
        $query = mysqli_query($con, "SELECT * FROM  shoe_items WHERE id='$productId'");
        $rows = mysqli_fetch_array($query);
        $productName = $rows['name'];
        $price = $rows['price'];
        $image = $rows['image'];
        $qty = 1;
        $userId =  $_SESSION['id'];
    
         $qry =  mysqli_query($con,"INSERT INTO `cart`(`order_name`,`order_id`,`order_price`,`order_qty`,`order_img`,`user_id`) VALUES ('$productName','$productId','$price','$qty','$image','$userId')");
        // $query = mysqli_query($qr);
        if ($query) {
            echo "<script type='text/javascript'>alert('Item Added Successfully!');</script>";
            header("Refresh:1; url=home.php");
        }
    } else {
        echo "<script type='text/javascript'>alert('Need to login your account before adding to cart!');</script>";
        header("Refresh:1; url=home.php");
    }
  
?>
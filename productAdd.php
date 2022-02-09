<?php 
 include('connect.php');
 extract($_POST);
 if(isset($_POST['submit'])){
    $name =  $_POST["name"] ;
    $description =  $_POST["description"] ;
    $price =  $_POST["price"] ;
    $quantity =  $_POST["quantity"] ;
    $target_dir = "images/";
    $img = basename($_FILES["fileToUpload"]["name"]);
    $image =  "./images/$img " ;
    $filepath = $target_dir . $_FILES["fileToUpload"]["name"];
    $uploadOk = 1;
    if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $filepath)) 
    {
        if(empty($name)){
            echo "<script type='text/javascript'>alert('Item name is required!');</script>";
            header("Refresh:1; url=addProduct.php");
        }else if(empty($description)){
            echo "<script type='text/javascript'>alert('Item description is required!');</script>";
            header("Refresh:1; url=addProduct.php");
        } else if(empty($price)){
            echo "<script type='text/javascript'>alert('Item price is required!');</script>";
            header("Refresh:1; url=addProduct.php");
        } else if(empty($quantity)){
            echo "<script type='text/javascript'>alert('Item quantity is required!');</script>";
            header("Refresh:1; url=addProduct.php");
        } else if(empty($image)){
            echo "<script type='text/javascript'>alert('Item image is required!');</script>";
            header("Refresh:1; url=addProduct.php");
        } else {
            $query =  mysqli_query($con,"INSERT INTO `shoe_items`(`name`, `description`, `price`, `quantity`, `image`) VALUES ('$name','$description','$price','$quantity','$image')");
            // $query = mysqli_query($qr);
            if ($query) {
                echo "<script type='text/javascript'>alert('Item added Successfully!');</script>";
                header("Refresh:1; url=products.php");
            }
        }
    } 
 
 }  
   
?>
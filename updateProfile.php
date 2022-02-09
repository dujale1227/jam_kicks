<?php
  include('connect.php');
extract($_POST);
session_start(); 
$userId = $_SESSION['id'];
if(isset($_POST['submit'])){
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $lastname = $_POST['lastname'];
    $address = $_POST['address']; 
    $contact = $_POST['contact']; 
    $email = $_POST['email']; 
  
    // echo $fullname;
    // echo $address;
    // echo $email;
    // echo $contact;
    // echo $userId;
    if(empty($firstname)){
        echo "<script type='text/javascript'>alert('First name is required!');</script>";
	    header("Refresh:1; url=myProfile.php");
    }else if(empty($middlename)){
        echo "<script type='text/javascript'>alert('Middle name is required!');</script>";
	    header("Refresh:1; url=myProfile.php");
    }else if(empty($lastname)){
        echo "<script type='text/javascript'>alert('Last name is required!');</script>";
	    header("Refresh:1; url=myProfile.php");
    }else if(empty($address)){
        echo "<script type='text/javascript'>alert('Address is required!');</script>";
	    header("Refresh:1; url=myProfile.php");
    }else if(empty($contact)){
        echo "<script type='text/javascript'>alert('Contact is required!');</script>";
	    header("Refresh:1; url=myProfile.php");
    }else if(empty($email)){
        echo "<script type='text/javascript'>alert('Email is required!');</script>";
	    header("Refresh:1; url=myProfile.php");
    }else {
        $query =  mysqli_query($con,"UPDATE `users` SET `firstname` = '$firstname', `middlename` = '$middlename', `lastname` = '$lastname', `address` = '$address', `email`= '$email', `contact`='$contact' WHERE id = $userId");
        // $query = mysqli_query($qr);
        if ($query) {
            // echo "<script type='text/javascript'>alert('Sign Up Successful!');</script>";
            $_SESSION['fullname'] =  $lastname .', '. $firstname .' ' .$middlename;
            header("Refresh:1; url=myProfile.php");
        }
    }
}
?>
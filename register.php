<?php
  include('connect.php');
extract($_POST);
if(isset($_POST['submit'])){
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $lastname = $_POST['lastname'];
    $address = $_POST['address']; 
    $contact = $_POST['contact']; 
    $email = $_POST['email']; 
    $password =  md5($_POST['password']);
    $secret = $_POST['password'];
    $role = "customer";
  
    // echo $fullname;
    // echo $address;
    // echo $email;
    // echo $contact;
    // echo $password;
    // echo $secret;
    // echo $role;
    if(empty($firstname)){
        echo "<script type='text/javascript'>alert('Please input data in the empty box');</script>";
	    header("Refresh:1; url=signUp.php");
    }else if(empty($middlename)){
        echo "<script type='text/javascript'>alert('Please input data in the empty box');</script>";
	    header("Refresh:1; url=signUp.php");
    }else if(empty($lastname)){
        echo "<script type='text/javascript'>alert(('Please input data in the empty box');</script>";
	    header("Refresh:1; url=signUp.php");
    }else if(empty($address)){
        echo "<script type='text/javascript'>alert('Please input data in the empty box');</script>";
	    header("Refresh:1; url=signUp.php");
    }else if(empty($contact)){
        echo "<script type='text/javascript'>alert('Please input data in the empty box');</script>";
	    header("Refresh:1; url=signUp.php");
    }else if(empty($email)){
        echo "<script type='text/javascript'>alert('Please input data in the empty box');</script>";
	    header("Refresh:1; url=signUp.php");
    }else if(empty($password)){
        echo "<script type='text/javascript'>alert('Please input data in the empty box');</script>";
	    header("Refresh:1; url=signUp.php");
    } else {
        $query =  mysqli_query($con,"INSERT INTO `users`(`firstname`,`middlename`,`lastname`, `address`, `email`, `contact`, `password`, `secret`, `role`) VALUES ('$firstname','$middlename','$lastname','$address','$email','$contact','$password','$secret','$role')");
        // $query = mysqli_query($qr);
        if ($query) {
            echo "<script type='text/javascript'>alert('Sign Up Successfully!');</script>";
            header("Refresh:1; url=login.php");
        }
    }
}
?>
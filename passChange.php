<?php
  include('connect.php');
extract($_POST);
session_start(); 
// $userId = $_SESSION['id'];
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password']; 
    $confirm = $_POST['confirmpassword']; 
    // echo $email;
    // echo $password;
    // echo $confirm;

  if(empty($email)){
    echo "<script type='text/javascript'>alert('Email is required!');</script>";
    header("Refresh:1; url=changePass.php");
  }else if(empty($password)){
    echo "<script type='text/javascript'>alert('Password is required!');</script>";
    header("Refresh:1; url=changePass.php");
  }else if(empty($confirm)){
    echo "<script type='text/javascript'>alert('Confirm Password is required!');</script>";
    header("Refresh:1; url=changePass.php");
  }else if($password != $confirm){
    echo "<script type='text/javascript'>alert('Password and Confirm Password not match!');</script>";
    header("Refresh:1; url=changePass.php");
  }else{
    $qry= mysqli_query($con, "SELECT count(*) as totalemail FROM users WHERE `email` = '$email'");
    $rows = mysqli_fetch_assoc($qry);
    if($rows['totalemail'] > 0){
      $passwordMd5 =  md5($_POST['password']);
      $query =  mysqli_query($con,"UPDATE `users` SET `password` = '$passwordMd5', `secret` = '$password' WHERE `email`= '$email'");
      if ($query) {
          echo "<script type='text/javascript'>alert('Change Password Successful!');</script>";
          header("Refresh:1; url=login.php");
      }
    }else {
      echo "<script type='text/javascript'>alert('Email did not exist!');</script>";
      header("Refresh:1; url=changePass.php");
    }
  }
}
?>
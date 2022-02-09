<?php include('connect.php') ?>
<?php 
  session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
    body {
    font-family: "Lato", arial;
    margin-top: 0;
    }

    .sidenav {
    height: 100%;
    width: 15%;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #0b405a;
    overflow-x: hidden;
    padding-top: 2%;
    }

    .sidenav a {
    padding: 22px 24px 6px 24px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    }

    .sidenav a:hover {
    color: #f1f1f1;
    }

    .main {
    margin-left: 160px; /* Same as the width of the sidenav */
    font-size: 28px; /* Increased text to enable scrolling */
    padding: 0px 10px;
    }

    .active{
        background-color: #ffffff;
        color: #111;
    }

    @media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
    }
    .card {
        /* Add shadows to create the "card" effect */
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        transition: 0.3s;
        width: 81%;
        margin: auto;
        margin-top: 6%;
        margin-left: 13%;
        }

        /* On mouse-over, add a deeper shadow */
        .card:hover {
        box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
        }
         /* Add some padding inside the card container */
         .container {
            padding: 2px 16px;
        }
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #0b405a;
            height: 13%;
            font-size: 25px;
        }

        li {
            float: right;
            margin: auto;
        }

        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 42px 32px;
            text-decoration: none;
        }

        /* Change the link color to #111 (black) on hover */
        li a:hover {
        background-color: #111;
        }
        .logo{
            float: left;
            color: white;
            font-size: 15px;
            padding: 14px 150px;
            

        }
        .profile{
            float: right;
            color: white;
            font-size: 25px;
            padding: 42px 32px;
        }
        .dropbtn {
        font-size: 17px;    
        color: white;
        }

        .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
        }

        .dropdown-content a {
        float: none;
        color: black;
        padding: 12px 16px !important;
        text-decoration: none;  
        display: block;
        text-align: left;
        }

        .topnav a:hover, .dropdown:hover .dropbtn {
        background-color: #555;
        color: white;
        }

        .dropdown-content a:hover {
        background-color: #ddd;
        color: black;
        }

        .dropdown:hover .dropdown-content {
        display: block;
        }

        @media screen and (max-width: 600px) {
        .topnav a:not(:first-child), .dropdown .dropbtn {
            display: none;
        }
        .topnav a.icon {
            float: right;
            display: block;
        }
        }

        @media screen and (max-width: 600px) {
        .topnav.responsive {position: relative;}
        .topnav.responsive .icon {
            position: absolute;
            right: 0;
            top: 0;
        }
        .topnav.responsive a {
            float: none;
            display: block;
            text-align: left;
        }
        .topnav.responsive .dropdown {float: none;}
        .topnav.responsive .dropdown-content {position: relative;}
        .topnav.responsive .dropdown .dropbtn {
            display: block;
            width: 100%;
            text-align: left;
        }
        }
        .logo{
            float: left;
            color: white;
            font-size: 15px;
            padding: 14px 25px;
        }
        .profile{
            float: right;
            color: white;
            font-size: 25px;
            padding: 15px 25px;
        }
        .profileSide{
            font-size: 31px;
            padding-left: 34px;
            color: #00cbff;
        
        }
        .profileSide label{
            padding-left: 62px;
            font-size: 20px;
            color: #b0c1ea;
        }
        .back{
            background-color: #008ca2;
            border: none;
            color: white;
            padding: 7px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 20px;
            float: right;
            border-radius: 5px;
            margin-bottom: 10px;
            width: 20%;
        }
        .back:hover{
            background: #ffffff;
            color: #008ca2;
            border: 1px solid #008ca2;
        }
        input[type=text], select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        img{
            max-width:180px;
        }
        input[type=file]{
            padding:10px;
        }
</style>
</head>
<body>
        <div class="sidenav">
            <a href="admin.php">
                <img src="./images/logo4.png" alt="" style="width: 100%;height: 10%;">
                <br>
            </a>
            <div class="profileSide">
                <?php 
                      echo $_SESSION['fullname']; 
                ?>
                <label for="">Admin</label>
            </div>
            <a href="admin.php" style="margin-top:10%;">Home</a>
            <a href="products.php"  class="active">Items</a>
            <a href="customers.php">Customers</a>
            <br>
            <a href="logout.php">Logout</a>
        </div>
        <div class="main">
            <div class="card">
            <h2 style=" padding: 10px; margin-top: 5%;">Add Items</h2>
                    <div class="container">
                    <form action="productAdd.php" method="post" enctype="multipart/form-data">
                        <label for="name">Item Name</label>
                        <input type="text" id="name" style=" font-size: 25px" name="name" placeholder="Your product name..">
                        <label for="description">Features</label>
                        <input type="text" id="description" style=" font-size: 25px" name="description" placeholder="Your product description..">
                        <label for="price">Price</label>
                        <input type="text" id="price" style=" font-size: 25px" name="price" placeholder="Your prodcut price..">
                        <label for="quantity">Quantity</label>
                        <input type="text" id="quantity" style=" font-size: 25px" name="quantity" placeholder="Your product quantity..">
                        <label for="quantity">Image</label>
                        <input type="file" name="fileToUpload" style=" font-size: 25px" id="fileToUpload">
                        <br>
                        <br>

                        <input class="back" id="submit" name="submit" type="submit" value="Submit">
                        <br>
                        <br>
                    </form>

                        <br>
                    </div>
            </div>
        </div>
</body>
<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
</html>
<?php include('connect.php') ?>
<?php 
  session_start(); 

//   if (!isset($_SESSION['fullname'])) {
//     $_SESSION['msg'] = "You must log in first";
//     header('location: .php');
//   }
//   if (isset($_GET['logout'])) {
//     session_destroy();
//     unset($_SESSION['username']);
//     header("location: index.php");
//   }
?>
<html>
    <head>
    <title>Homepage</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    </head>
    
    <style>
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            background-color: #0b405a;
            height: 15%;
            font-size: 25px;
            position: fixed;
            width: 100%;
            z-index: 1;
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
       
        img{
            border-radius: 5px;
            position: absolute;
            width: -webkit-fill-available;
        }
        * {
        box-sizing: border-box;
        }

        .column {
        margin: 9px;
        border: 1px solid grey;
        height: 55%;
        float: left;
        padding: 0px;
        width: 23%;
        position: relative;
        }

            /* Clearfix (clear floats) */
            .product-container::after {
            content: "";
            clear: both;
            display: table;
            }
        .footer-container{
            /* height: 30px; */
            background-color: #0b405a;
            color: white;
        }
        .product-label{
            word-wrap: break-word;
            color: #787d7d;
            padding-left: 5px;
            padding-right: 5px;
            position: absolute;
            width: 100%;
            bottom: 6px;
        }
        .addCart{
            background-color: #0b405a; 
            border: none;
            color: white;
            padding: 9px;
            width: 100%;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 15px;
            border-radius: 2px;
            float: right;
        }
        .addCart:hover{
            background-color: white;
            color: #0b405a;
            border: 1px solid #0b405a;
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

        .search-container input[type=text] {
            padding: 6px;
            margin-top: 8px;
            font-size: 25px;
            border: none;
            }

             .search-container button {
            float: right;
            padding: 6px;
            margin-top: 8px;
            margin-right: 16px;
            background: #ddd;
            font-size: 25px;
            border: none;
            cursor: pointer;
            }

            .search-container button:hover {
            background: #ccc;
            }

            @media screen and (max-width: 600px) {
            .search-container {
                float: none;
                padding: 42px 32px;
                width: 100%;
            }
            .search-container input[type=text], .topnav .search-container button {
                float: none;
                display: block;
                text-align: left;
                width: 100%;
                margin: 0;
                padding: 14px;
            }
            .search-container input[type=text] {
                border: 1px solid #ccc;  
            }
            }
            .item{
            font-size: 15px;
            text-align: right
        }
        .item1{
            font-size: 15px;
            text-align: left;
        }
        .item2{
            font-size: 15px;
            text-align: center;
        }
        
        img.productImage{
            width: 50px !important;
            height: 60px !important;
        }
        .placeOrder{
            background-color: #0b405a;
            color: white;
            padding: 7px;
            text-align: center;
            font-size: 18px;
            border-radius: 7px;
            float: right;
            width: 50%;
        }
        #myATopnav{
            position: fixed;
        }
        sup{
            color: red;
            font-size: 12px;
        }
        .card {
        /* Add shadows to create the "card" effect */
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        transition: 0.3s;
        width: 90%;
        margin: auto;
        }

        /* On mouse-over, add a deeper shadow */
        .card:hover {
        box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
        }

        /* Add some padding inside the card container */
        .container {
        padding: 2px 16px;
    }
    .grid-container {
            display: grid;
            grid-template-columns: auto auto auto auto;
        }

        .grid-container > div {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 10px 10px;
            font-size: 25px;
            font-family: serif;
            margin-bottom: 31px;
        }

        .formProfile{
        margin-top: 5%;
        margin-bottom: 5%;
        width: 29%;
        height: 78%;
        color: white;
        background: #004f75f0;
        border-radius: 10px;
        filter: drop-shadow(10px 1px 19px rgba(76, 128, 134, 0.5));
    }
    .formProfile input{
        height: 40px;
        border-radius: 5px;
        border: none;
        background: #d4e5f3;
        font-size: 20px;
        margin-bottom: 30px;
    }
    .formProfile input:hover{
        background: #ffffff;
    }
    #submit{
        background: #299400;
        border: 0;
        border-radius: 5px;
        color: #ffffff;
        width: 48%;
    }
    .center{
        text-align: center'
    }
    table{
        margin-top: 10%;
        color: #ffffff;
    }
    </style>
    <body>
        <ul id="myTopnav" >
            <li class="logo"><img src="./images/logo4.png" alt="" style="width: 9%;height: 62%;"></li>
            <?php if (isset($_SESSION['fullname'])): ?>
                <?php echo "<li class='profile dropdown' style='padding-right: 2%'>" ?>
                <?php 
                      echo $_SESSION['fullname']; 
                      echo " <i class='fas fa-caret-down dropbtn'></i>";
                      echo "<div class='dropdown-content'>";
                        echo "<a href='myProfile.php'>Profile</a>";
                        echo "<a href='myOrder.php'>My Order</a>";
                        echo "<a href='logout.php'>Logout</a>";
                      echo "</div>";
                ?>
                <?php echo "</li>" ?>
                <?php endif ?>
                <?php if (!isset($_SESSION['fullname'])): ?>
                <?php echo "<li style='padding-right: 12%'>" ?>
                <?php echo "<a href='login.php'>Log in</a>" ?>
                <?php echo "</li>" ?>
                <?php endif ?>  
             <li style="width: 40%;">
                <div class="search-container">
                    <form action="searchPage.php"  method="post" style="width: 100%; padding: 29px 35px;">
                    <input type="text" placeholder="Search.." name="search" style="width: 79%;">
                    <button type="submit" id="submit"  name="submit" style="width: 18%;">Search</button>
                    </form>
                </div>   
            </li>
                   
            <!-- <li><a href="login.php">Login</a></li> -->
            <li><a href="cart.php"> <i class="fas fa-shopping-cart"></i> Cart</a></li>
            <li><a href="home.php">Home</a></li>
           
        </ul>
        <br>
        <div align="center" class="center"  style="padding-top: 5%">
            <form  class="formProfile" action="updateProfile.php" method="post">
            <h1 align="center" id="he_a" style="font-family: Serif;"> My Profile</h1>

            <?php 
                        include('connect.php');
                        if(isset($_SESSION['id'])){
                            $userId = $_SESSION['id'];
                            // echo $userId;
                            $qry= mysqli_query($con, "SELECT * FROM users Where id = $userId");
                            $rows = mysqli_fetch_array($qry);
                            // echo"<div class='grid-container'>";
                            echo" <table width='500' style='font-family: serif;'>";
                                echo"<tr>";
                                    echo"<td width='127' height='30' align='left'><p id='a_ee' style='font-size: 25px;margin-bottom: 30px;'><b>First Name:</b></p></td>";
                                    echo"<td width='400' > <input style='width: 100%; font-size: 25px'  id='textbox' type='text' name='firstname' value='".$rows['firstname']."'> </td>";
                                echo"</tr>";
                                echo"<tr>";
                                    echo"<td width='127' height='30' align='left'><p id='a_ee' style='font-size: 25px;margin-bottom: 30px;'><b>Middle Name:</b></p></td>";
                                    echo"<td width='400' > <input style='width: 100%; font-size: 25px' id='textbox' type='text' name='middlename' value='".$rows['middlename']."'> </td>";
                                echo"</tr>";
                                echo"<tr>";
                                    echo"<td width='127' height='30' align='left'><p id='a_ee' style='font-size: 25px;margin-bottom: 30px;'><b>Last Name:</b></p></td>";
                                    echo"<td width='400' > <input style='width: 100%; font-size: 25px' id='textbox' type='text' name='lastname' value='".$rows['lastname']."'> </td>";
                                echo"</tr>";
                                echo"<tr>";
                                    echo"<td width='127' height='30' align='left'><p id='a_ee' style='font-size: 25px;margin-bottom: 30px;'><b>Address:</b></p></td>";
                                    echo"<td width='400' > <input style='width: 100%; font-size: 25px' id='textbox' type='text' name='address' value='".$rows['address']."'> </td>";
                                echo"</tr>";
                                echo"<tr>";
                                    echo"<td width='127' height='30' align='left'><p id='a_ee' style='font-size: 25px;margin-bottom: 30px;'><b>Contact No.:</b></p></td>";
                             echo"<td width='400' > <input style='width: 100%; font-size: 25px' id='textbox' maxlength='11' onkeypress='return isNumberKey(event)' type='text' name='contact' value='".$rows['contact']."'> </td>";
                                echo"</tr>";
                                echo"<tr>";
                                    echo"<td width='127' height='30' align='left'><p id='a_ee' style='font-size: 25px;margin-bottom: 30px;'><b>E-mail:</b></p></td>";
                                    echo"<td width='400' > <input style='width: 100%; font-size: 25px' id='textbox' type='text' name='email' value='".$rows['email']."'> </td>";
                                echo"</tr>";
                            echo"</table>";
                        } else {
                            echo "<div style='height:60%'>";
                            echo "<h3>Need to Login first.</h3>";
                            echo "</div>";
                        }
                    ?>
                    <br><br>
                    <input  style="font-size: 25px;" id="submit" type="submit" name="submit" value="Update Profile">

                    <br><br>
            </form> 
        </div>
        <br>
    </body>
    <footer>
            <div class="footer-container">
              <table style="color: #adabab; margin:auto;width: 80%; padding-top: 18px;">
                <thead style="font-size: 32px;">
                    <tr>
                        <td>Contact Information</td>
                        <td>About Us</td>
                        <td>Policies</td>
                    </tr>
                </thead>
                <tbody style="margin-left: 10px; font-size: 20px;">
                    <tr>
                        <td>
                            +639279247871 <br>
                           jamer1811novero@gmail.com <br>
                           KM 9 JMC Valley Urban, Brgy. Sum-ag, <br>
                           Bacolod City, Negros Occidental, Philippines <br>

                        </td>
                        <td>
                        "Jam Kicks" is your place for athletic and <br> easy going shoes for the entire <br> family from many name brands.
                        </td>
                    </tr>
                </tbody>
              </table>
            <p style="text-align: center; color: #909090;"> Copyright @ 2021 All rights reserved.</p>
            <br>
            </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script type="text/javascript">
    function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

         return true;
      }
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" w3-white", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " w3-white";
}
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
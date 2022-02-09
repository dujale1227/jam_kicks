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
            width: 99%;
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
        color: #ffffff !important;
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
        height: 70%;
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
            background-color: #787d7d; 
            border: none;
            color: white;
            padding: 7px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 12px;
            border-radius: 2px;
            float: right;
        }
        .addCart:hover{
            background-color: #ffffff;
            color: #787d7d;
            border: 1px solid #787d7d;
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
            
    * {font-family: Serif;}
    a:link {color: rgba(255, 255, 255, 0.8);text-decoration: none;}
    a:visited {color: rgba(255, 255, 255, 0.8);text-decoration: none;}
    a:hover {color:black;text-decoration: none;}
    a:active {color: black;text-decoration: none;}

    .transparent{
        position: absolute;
        opacity: 0.3;
    }
    form{
        margin-top: 5%;
        margin-bottom: 5%;
        width: 35%;
        height: 100%;
        color: white;
        background: #004f75f0;
        border-radius: 10px;
        filter: drop-shadow(10px 1px 19px rgba(76, 128, 134, 0.5));
    }
    input{
        height: 40px;
        border-radius: 5px;
        border: none;
        background: #d4e5f3;
        font-size: 20px;
        margin-bottom: 30px;
    }
    input:hover{
        background: #ffffff;
    }
    #submit{
        background: #299400;
        border: 0;
        border-radius: 5px;
        color: #ffffff;
        padding: 10px;
        width: 134px;
    }
    .center{
        text-align: center'
    }
    table{
        margin-top: 10%;
        color: #ffffff;
    }
    .back{
        background-color: #2196f3; 
        border: none;
        padding: 10px;
        width: 134px;
        text-align: center;
        display: inline-block;
        font-size: 20px;
        float: left;
        border-radius: 5px;
        margin-left: 10%;
    }
    .back:hover{
        background: #ffffff;
    }
    </style>
    <body>
        <ul id="myTopnav" >
            <li class="logo"><img src="./images/logo4.png" alt="" style="width: 9%;height: 62%;"></li>
                <?php if (isset($_SESSION['fullname'])): ?>
                <?php echo "<li class='profile dropdown' style='padding-right: 12%'>" ?>
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
                <?php echo "<a href='login.php'>Login</a>" ?>
                <?php echo "</li>" ?>
                <?php endif ?>     
            <!-- <li><a href="login.php">Login</a></li> -->
            <li><a href="cart.php"> <i class="fas fa-shopping-cart"></i> Cart</a></li>
            <li><a href="home.php">Home</a></li>
        </ul>
        <br>
        <div align="center" class="center" style="padding-top: 8%">
            <form action="register.php" method="post">
            <h1 align="center" id="he_a" style="font-family: arial;"> CUSTOMER SIGN UP</h1>
                <table width="500">
                <tr>
                    <td width="127" height="30" align="left"><p id="a_ee" style="font-size: 20px;margin-bottom: 30px;"><b>First Name:</b></p></td>
                    <td width="400" ><input id="textbox" type="text" name="firstname" style="width: 100%; font-size: 25px" /></td>
                </tr>
               
                <tr>
                    <td width="127" height="30" align="left"><p id="a_ee" style="font-size: 20px;margin-bottom: 30px;"><b>Middle Name:</b></p></td>
                    <td width="400" ><input id="textbox" type="text" name="middlename" style="width: 100%; font-size: 25px" /></td>
                </tr>
                <tr>
                    <td width="127" height="30" align="left"><p id="a_ee" style="font-size: 20px;margin-bottom: 30px;"><b>Last Name:</b></p></td>
                    <td width="400" ><input id="textbox" type="text" name="lastname" style="width: 100%; font-size: 25px" /></td>
                </tr>
                <tr>
                    <td height="30" align="left"><p id="a_pp" style="font-size: 20px;margin-bottom: 30px;"><b>Address:</b></p></td>
                    <td width="400"><input id="textbox" type="text" name="address" style="width: 100%; font-size: 25px"/></td>
                </tr>
                <tr>
                    <td height="30" align="left"><p id="a_pp" style="font-size: 20px;margin-bottom: 30px;"><b>Contact No.:</b></p></td>
                    <td width="400"><input type="text" maxlength="11" onkeypress="return isNumberKey(event)" name="contact" style="width: 100%; font-size: 25px"/></td>
                </tr>
                <tr>
                    <td height="30" align="left"><p id="a_pp" style="font-size: 20px;margin-bottom: 30px;"><b>E-mail:</b></p></td>
                    <td width="400"><input id="textbox" type="email" name="email" style="width: 100%; font-size: 25px"/></td>
                </tr>
                <tr>
                    <td height="30" align="left"><p id="a_pp" style="font-size: 20px;margin-bottom: 30px;"><b>Password:</b></p></td>
                    <td width="400"><input id="passInput" type="password" name="password" style="width: 100%; font-size: 25px"/></td>
                </tr>
                <tr>
                    <td height="30" align="left"></td>
                    <td width="400"><input type="checkbox" onclick="showPass()" style="height: 14px; width: 36px;"> <span style="font-size: 20px;">Show Password</span></td>
                </tr>
                <tr align="right" >
                        <td> <a class="back"  style= "font-size: 25px" name="back" href="login.php">Back</a></td>
                    <td><input style="margin-bottom: 0; font-size: 25px;" id="submit" type="submit" name="submit" value="Sign Up"></td>
                </tr>    
                </table>
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
    function showPass() {
        var x = document.getElementById("passInput");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
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
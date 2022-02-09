<?php include('connect.php') ?>
<?php 
  session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
    body {
    font-family: "Lato", Arial;
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
        #products {
            font-family: Arial, Helvetica;
            border-collapse: collapse;
            width: 100%;
            font-size: 20px;
        }

        #products td, #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #products tr:nth-child(even){background-color: #f2f2f2;}

        #products tr:hover {background-color: #ddd;}

        #products th {
            padding-top: 12px;
            padding-bottom: 12px;
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
            border-radius: 5px;
            margin-bottom: 20px;
        }
        .back:hover{
            background: #ffffff;
            color: #008ca2;
            border: 1px solid #008ca2;
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
            background: #ddd;
            font-size: 25px;
            border: none;
            cursor: pointer;
            border: 1px solid #c5c3c3;
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
            <h2 style=" padding: 9px; margin:0;">Item List:</h2>
                    <div class="container">
                    <a class="back" name="addProduct" href="addProduct.php">Add Item</a>
                    <div class="search-container">
                        <form action="" style="width: 35%; padding: 30px 16px;float:right;">
                            <input type="text" placeholder="Search Item Name.." id="myInput" name="search" style="width: 79%;border: 1px solid #c5c3c3;">
                            <button type="button" style="width: 18%;" onclick="searchFunction()">Search</button>
                        </form>
                    </div> 
                    
                        <?php 
                            include('connect.php');
                            $qry= mysqli_query($con, "SELECT * FROM shoe_items");
                            
                            echo"<div class='product-container'>";
                              
                                    echo"<table id='products'>";
                                    echo"<thead style='font-weight: 600; background-color: #09d5f5;'>";
                                    echo"<tr>";
                                    echo"<th> Id</th>";
                                    echo"<th> Name</th>";
                                    echo"<th> Features</th>";
                                    echo"<th> Price</th>";
                                    echo"</tr>";
                                    echo"</thead>";
                                    echo"<tbody>";
                                    while ($rows = mysqli_fetch_array($qry)){
                                    echo"<tr>";
                                    echo"<td> ".$rows['id']."</td>";
                                    echo"<td style='text-transform: capitalize'> ".$rows['name']."</td>";
                                    echo"<td style='width: 55%'> ".$rows['description']."</td>";
                                    echo"<td> ".$rows['price']."</td>";
                                    echo"</tr>";
                                    }
                                    echo"</tbody>";
                                    echo"</table>";
                                  
                                
                            echo"</div>";
                        ?>
                        <br>
                    </div>
            </div>
        </div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script type="text/javascript">
function searchFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("products");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
</html>
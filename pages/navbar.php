<?php
    include "../scripts/connect.php";
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.dropbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
</style>
<title>All Products - SHOPIFY</title>
<link rel="stylesheet" href="../css/style.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,600;0,700;1,300;1,400&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<div class="container">
 <div class="navbar">
    <div class="logo">
        <img src="../images/logo.png"  length="120px" width="155px">
    </div>
    <form method="POST">
        <input type="text" name="search" style="width: 65%" placeholder="Search products">
        <input type="submit" name="submit" value="Search" style="width: 30%">
    </form>

    <?php
        if (isset($_POST["submit"])) {
            header("location:../scripts/search_results.php?search=".$_POST['search']);
        }
    ?>
 <nav>

    <ul id="MenuItems">
        <li><a href="index.php">Home</a></li>
        <li><a href="products.php">Products</a></li>
        <li><a href="insert.php">Location setting for deliverers</a></li>
        <li>
        <div class="dropdown">
        <a href="#">Account</a>
            <div class="dropdown-content">
                <a href="#">Orders</a>
                <a href="#">Cart</a>
                <a href="logout.php">Logout</a>
            </div>
        </div>
        </li>
      </ul>
</nav>
<a href="cart.php"><img src="../images/cart.svg" width="30px" height="30px"></a>
<img src="../images/menu bar.png" class="menu-icon" onclick="menutoggle()">
</div> 
   
</div>


</body>
</html>

</html>
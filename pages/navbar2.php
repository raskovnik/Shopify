<?php
    include "../scripts/connect.php";
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>All Products - SHOPIFY</title>
<link rel="stylesheet" href="../css/style.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,600;0,700;1,300;1,400&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="header">
<div class="container">
 <div class="navbar">
    <div class="logo">
    <a href="index.php"><img src="../images/logo.png"  length="120px" width="155px"></a>
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
        <li><a href="">About</a></li>
        <li><a href="">Contact</a></li>
        <li><a href="login.php">Account</a></li>
      </ul>

</nav>
<a href="cart.php"><img src="../images/cart.svg" width="30px" height="30px"></a>
<img src="../images/menu bar.png" class="menu-icon" onclick=menutoggle()>
</div> 
<div class="row">
    <div class="col-2">
        <h1>Every Product<br>Delivered To You!</h1>
        <p>The best products with a quick delivery</p>
        <a href="products.php"class="btn">Explore Now &#8594;</a>
    </div>
    <div class="col-2">
       <img src="../images/smile.png" >
    </div>
</div>   
</div>
</div>
</body>
</html>

</html>
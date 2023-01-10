<?php
    include "../scripts/connect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta chartset="UFT-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <li><a href="login.php">Account</a></li>
      </ul>
</nav>
<a href="cart.php"><img src="../images/cart.svg" width="30px" height="30px"></a>
<img src="../images/menu bar.png" class="menu-icon" onclick="menutoggle()">
</div> 
   
</div>
</div>

<div class="small-container">
    <div class="row row-2">
        <h2>All Products</h2>
        <select>
           <option>Default Sorting</option> 
           <option>Sort by price</option> 
           <option>Sort by popularity</option> 
           <option>Sort by rating</option> 
           <option>Sort by sale<option> 
        </select>
    </div>
  <div class="row">
    <div class="col-4">
        <img src="../images/prod2.jpg">
        <h4>Samsung Galaxy Note 20 5G</h4>
        <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-o"></i>
         </div>
        <p>KSh.80,999</p>
    </div> 
       <div class="col-4">
        <img src="../images/prod3i.jpg">
        <h4>Apple iPad Pro 11 2020 256GB WiFi + Cellular Space Grey</h4>
        <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-o"></i>
       </div>
       <p>KSh.119,999</p>
       </div>
        <div class="col-4">
            <img src="../images/prod4.webp">
            <h4>HP Envy x360 13-BD0063 2-IN-1 Core i5-1135G7 256GB SSD 8GB 13.3″ (FHD) Touchscreen Win 10</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
    
            </div>
            <p>KSh.60,999</p>
        </div>
            <div class="col-4">
                <img src="../images/prod5i.jpg">
                <h4>Samsung 65'' Smart TV UA65BU8000UXKE Crystal UHD 4K</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
        
                </div>
                <p>KSh.70,000</p>
            </div>
 
 <div class="col-4">
    <img src="../images/prod 6i.webp">
    <h4>HP Envy X360 15 Amd Ryzen™ 7 5700U 1.8GHz 512GB SSD 16GB 15.6″ (1920×1080) TouchScreen Win10</h4>
    <div class="rating">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star-half-o"></i>

    </div>
    <p>KSh.90,000</p>
</div>
<div class="col-4">
    <img src="../images/prod7.webp">
    <h4>Canon EOS 4000D DSLR Camera and EF-S 18-55 mm</h4>
    <div class="rating">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star-half-o"></i>

    </div>
    <p>KSh.45,000</p>
</div>
<div class="col-4">
    <img src="../images/prod8.webp">
    <h4>Amazon Echo Dot (4th Gen) 6HR 15W Portable Mini Bluetooth/WiFi Speaker BLACK</h4>
    <div class="rating">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star-half-o"></i>
    </div>
    <p>KSh.8,499</p>
</div>
<div class="col-4">
    <img src="../images/prod9.jpg">
    <h4>LG FH4G6VDYG6 Front Load Washing Machine, 9KG - Silver</h4>
    <div class="rating">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star-half-o"></i>

       </div>
       <p>KSh.89,955</p>
      </div>
   </div>
  <div class="page-btn">
    <span>1</span>
    <span><a href="bags.php">2</a></span>
    <span><a href="utensils.php">3</a></span>
    <span>4</span>
    <span>&#8594;</span>

  </div>

</div> 
<!--footer-->
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col-1">
                <h3>Download our App</h3>
                <p>Download App for Android and ios mobile phone</p>
            <div class="app-logo">
                <img src="../images/store.jpg">
            </div>
        </div>
            <div class="footer-col-2">
                <img src="../images/logo.png">
                <p>Our purpose its to offer a place where you can order high quality products with a first delivery</p>
            </div>
            <div class="footer-col-3">
                <h3>Follow us</h3>
                <ul>
                    <li>Facebook</li>
                    <li>Instagram</li>
                    <li>Twitter</li>
                </ul>
            </div>
        </div>
        <hr>
        <p class="Copyright">&#169Copyright 2022 - SHOPIFY</p>
    </div>
</div>
<!--js for toggle menu-->
<script>
    var MenuItems = document.getElementById("MenuItems")
     MenuItems.style.maxHeight = "0px";

     function menutoggle(){
        if(MenuItems.style.maxHeight == "0px")
            {
                MenuItems.style.maxHeight = "200px";
            }
        else
            {
                MenuItems.style.maxHeight = "0px";
 
            }

     }
</script>

</body>
</html>
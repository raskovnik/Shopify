<!DOCTYPE html>
<html lang="en">
<head>
    <meta chartset="UFT-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHOPIFY</title>
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
<!--featured categories-->

<div class="categories">
<div class="small-container">
   <div class="row">
    <div class="col-3">
        <img src="../images/phones.jpg" >
    </div>
    <div class="col-3">
        <img src="../images/elc.jpg">
    </div>  
</div>
</div>
</div>
<!--featured products-->
<div class="small-container">
    <h2 class="title">Featured Products</h2>
    <div class="row">
       <div class="col-4">
        <a href=""><img src="../images/prod2.jpg"></a>
        <a href=""><h4>Samsung Galaxy Note 20 5G</h4></a>
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
                <h4>Samsung 65" Smart TV UA65BU8000UXKE Crystal UHD 4K</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
        
                </div>
                <p>KSh.70,000</p>
            </div>
    </div>
    <h2 class="title">Latest Products</h2>
    <div class="row">
    <div class="col-4">
        <img src="../images/prod 6i.webp">
        <h4>HP Envy X360 15 Amd Ryzen™ 7 5700U 1.8GHz 512GB SSD 16GB 15.6″ (1920x1080) TouchScreen Win10</h4>
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
</div>
<!--offer-->
<div class="offer">
  <div class="small-container"> 
      <div class="row">
        <div class="col-2">
           <img src="../images/exclusive.jpg" class="offer-img">
           </div>
           <div class="col-2">
             <p>Exclusively Available on Shopify</p>
            <h1>Smart Watch</h1>
            <small>Apple Watch SE 2 2022 44mm</small>
            <br><a href="" class="btn">Buy Now &#8594;</a>
          </div>
        </div>
  </div>   
</div>
<!--brands-->
<div class="brands">
    <div class="small-container">
        <div class="row">
            <div class="col-5">
              <img src="../images/logo1.jpg">  
            </div>
            <div class="col-5">
                <img src="../images/logo2.png">  
              </div>
              <div class="col-5">
                <img src="../images/logo3.jpg">  
              </div>
              <div class="col-5">
                <img src="../images/logo4.png">  
              </div>
              <div class="col-5">
                <img src="../images/logo5.png">  
              </div>
              <div class="col-5">
                <img src="../images/logo6.jpg">  
              </div>
        </div>
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
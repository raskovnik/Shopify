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
 <nav>
    <ul id="MenuItems">
        <li><a href="index.php">Home</a></li>
        <li><a href="products.php">Products</a></li>
		<li><a href="fetchItems.php">Ongoing deliveries</a></li>
        <li><a href="">About</a></li>
        <li><a href="">Contact</a></li>
		<li><a href="login.php">Account</a></li>
      </ul>
</nav>
<a href="cart.php"><img src="../images/cart.svg" width="30px" height="30px"></a>
<img src="../images/menu bar.png" class="menu-icon" onclick="menutoggle()">
</div> 
   
</div>
<!--cart items details-->
<div class="small-container cart-page">
    <table>
        <tr>
            <th>Product</th>   
            <th>Quantity</th>  
            <th>Subtotal</th>  
        </tr>
        <tr>
            <td>
              <div class="cart-info">
                <img src="../images/prod3i.jpg">
                <div>
                    <p>Apple iPad Pro 11 2020 256GB WiFi + Cellular Space Grey</p>
                    <small>Price:KSh.199,999</small>
                    <br>
                    <a href="">Remove</a>
                </div>
              </div>
            </td>
            <td><input type="number" value="1" min="1"></td>
            <td>KSh.199,999</td>
        </tr>
        <tr>
            <td>
              <div class="cart-info">
                <img src="../images/prod2.jpg">
                <div>
                    <p>Samsung Galaxy Note 20 5G</p>
                    <small>Price:KSh.80,999</small>
                    <br>
                    <a href="">Remove</a>
                </div>
              </div>
            </td>
            <td><input type="number" value="1" min="1"></td>
            <td>KSh.80,999</td>
        </tr>
    </table>
    <div class="total-price">
        <table>
            <tr>
                <td>Subtotal</td>
                <td>KSh.200,000</td>
            </tr>
            <tr>
                <td>Delivery Fee</td>
                <td>KSh.200,000</td>
            </tr>
            <tr>
                <td>Total</td>
                <td>KSh.200,000</td>
            </tr>
        </table>
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
        <p class="Copyright">Copyright 2022 - SHOPIFY</p>
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
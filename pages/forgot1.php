<!DOCTYPE html>
<html lang="en">
<head>
    <meta chartset="UFT-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account - SHOPIFY</title>
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
        <li><a href="">About</a></li>
        <li><a href="">Contact</a></li>
        <li><a href="">Account</a></li>
      </ul>
</nav>
<a href="cart.php"><img src="cart.svg" width="30px" height="30px"></a>
<img src="../images/menu bar.png" class="menu-icon" onclick="menutoggle()">
</div> 
</div>
<!--account page-->
<div class="account-page">
    <div class="container">
        <div class="row">
            <div class="col-2">
                <img src="../images/smile.png" width="100%">
            </div>
            <div class="col-2">
                <div class="form-container">
                    <div class="form-btn">
                        <span>Reset Password</span>
                        <hr id="Indicator">
                    </div>
                    <form id="Reset">
                        <input type="email" placeholder="Email">
                        <input type="text" placeholder="New Password">
                        <input type="text" placeholder="Confirm Password">
                        <button type="submit" class="btn" onclick="alert('Details submitted successfully')"><a href="account.php">Register</a></button>
                    </form>
                </div>
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
<!--js for toggle form-->
<script>
    var LoginForm = document.getElementById("LoginForm");
    var RegForm = document.getElementById("RegForm");
    var Indicator = document.getElementById("Indicator");

    function register()
    {
        RegForm.style.transform = "translateX(0px)";
        LoginForm.style.transform = "translateX(0px)";
        Indicator.style.transform = "translateX(100px)";
    }
    
    function login(){s
        RegForm.style.transform = "translateX(300px)";
        LoginForm.style.transform = "translateX(300px)";
        Indicator.style.transform = "translateX(0px)";
    }
</script>

</body>
</html>
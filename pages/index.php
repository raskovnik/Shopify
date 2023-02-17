<?php
    session_start();
    include "../scripts/connect.php";
    if (!isset($_SESSION["cart-items"])) {
        $_SESSION["cart-items"] = [];
    }
?>

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
    <?php
        if ($_SESSION["email"]) {
            include "navbar.php";
        } else {
            include "navbar2.php";
        }
    ?>
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
    
    <?php
    $sql = "SELECT * FROM products WHERE id<=4";
    $res = mysqli_query($conn, $sql);
    if ($res) {
        echo '<div class="row">';
        while ($row = mysqli_fetch_assoc($res)) {
            echo "<div class='col-4'>";
            echo '<a href="../scripts/productDetails.php?product=' . $row["id"] . '">';
                    echo '<img src="../images/'.$row["image"].'">';
                    echo '<p>'.$row["description"].'</p>';
                    echo '<div class=rating>';
                    if (floor($row["rating"]) == $row["rating"]) {
                        for ($i = 1; $i<=floor($row["rating"]); $i++) {
                            echo '<i class="fa fa-star"></i>';
                        }
                        echo '<span>(' . $row["rating"] . ')</span>';
                    } else {
                        for ($i = 1; $i<$row["rating"]; $i++) {
                            echo '<i class="fa fa-star"></i>';
                        }
                        echo '<i class="fa fa-star-o"></i>';
                        echo '<span>(' . $row["rating"] . ')</span>';
                    }
                echo '</div>';
                echo '<p>Ksh. '.number_format($row["price"], 2).'</p>';
                echo '</div>';
            echo '</a>';
        }
        echo '</div>';
    }
    ?>
    <h2 class="title">Latest Products</h2>
    <?php
    $sql = "SELECT * FROM products WHERE id>4";
    $res = mysqli_query($conn, $sql);
    if ($res) {
        echo '<div class="row">';
        while ($row = mysqli_fetch_assoc($res)) {
            echo "<div class='col-4'>";
            echo '<a href="../scripts/productDetails.php?product=' . $row["id"] . '">';
                    echo '<img src="../images/'.$row["image"].'">';
                    echo '<p>'.$row["description"].'</p>';
                    echo '<div class=rating>';
                    if (floor($row["rating"]) == $row["rating"]) {
                        for ($i = 1; $i<=floor($row["rating"]); $i++) {
                            echo '<i class="fa fa-star"></i>';
                        }
                        echo '<span>(' . $row["rating"] . ')</span>';
                    } else {
                        for ($i = 1; $i<$row["rating"]; $i++) {
                            echo '<i class="fa fa-star"></i>';
                        }
                        echo '<i class="fa fa-star-o"></i>';
                        if (is_null( $row["rating"])) {
                            
                        } else {
                            echo '<span>(' . $row["rating"] . ')</span>';
                        }

                    }
                echo '</div>';
                echo '<p>Ksh. '.number_format($row["price"], 2).'</p>';
                echo '</div>';
            echo '</a>';
        }
        echo '</div>';
    }
    ?>
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
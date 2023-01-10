<?php
    session_start();
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
<?php
        if ($_SESSION["email"]) {
            include "navbar.php";
        } else {
            include "navbar2.php";
        }
    ?>
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
                echo '<p>'.$row["price"].'</p>';
                echo '</div>';
            echo '</a>';
        }
        echo '</div>';
    }

    $sql = "SELECT * FROM products WHERE id>4 and id<=8";
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
                echo '<p>'.$row["price"].'</p>';
                echo '</div>';
            echo '</a>';
        }
        echo '</div>';
    }
    ?>
    
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
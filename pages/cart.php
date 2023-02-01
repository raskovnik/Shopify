<?php
session_start();
    include "../scripts/connect.php"
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

<?php
        include "connect.php";
        $product = $_GET["orderId"];
        $sql = "SELECT * FROM `cart` WHERE productId='$product'";
        $result = mysqli_query($conn, $sql);
        echo "Cart Items";
        if ($result) {
            if (mysqli_num_rows($result) > 0) {
                echo '<div class="row">';

                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<div class="col-4">';
                            echo 'Order Number: '.$row["productId"].'<br><br>';
                            echo 'Quantity: '.$row["quantity"].'';
                        echo '</div>';
                    echo '</a>';
                }
                echo '</div>';
            } else {
                echo "<div style='height: 200px;
                width: 400px;            
                position: fixed;
                top: 50%;
                left: 50%;
                margin-top: -100px;
                margin-left: -200px;'>No product(s) found</div>";
            }
            // echo '<a href="../pages/products.php"><button style="width: 30%; background-color: blue; height: 40px">Back</button></a>';
        }
    ?>
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
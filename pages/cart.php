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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <style>
        td {
            padding: 0px;
            word-wrap: break-word;
            border-collapse: collapse;
        }
        table {
            table-layout: fixed;
             border-collapse: collapse;
            width: 100%;
        }
    </style>
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
    ?>
    <table id="cart-table">
            <th>Item</th>
            <th>Description</th>
            <th>Quantity</th>
            <th>Price</th>
            <?php
                $total=0;
                foreach($_SESSION["cart-items"] as $item => $qty) {
                    $sql = "SELECT * FROM `products` WHERE id=$item";
                    $result = mysqli_query($conn, $sql);
                    if ($result) {
                        $row = mysqli_fetch_assoc($result);
                        echo '<tr>';
                            echo '<td><div style="text-align: center;"><img src="../images/' . $row["image"] . '"></div></td>';
                            echo '<td><p>'.$row["description"].'</p></td>';
                            echo '<td>';
                                echo '<form method="POST">';
                                    echo '<div id="prod-id"><input type="number" name="prod" id="prod" style="display:none" value='.$item.'></div>';
                                    echo '<input type="number" name="quantity" min="0" value='.$qty.'>';
                                    echo '<button class="btn" name="update" value="update">Update</button>';
                                echo '</form>';
                            echo '</td>';
                            echo '<td><p>Ksh. '.number_format($row["price"] * $qty, 2).'</p></td>';
                            $total += $row["price"]* $qty;
                            
                        echo '</tr>';
                    }
                }
                echo '<tr>';
                echo '<td><b>Total<b></td>';
                echo '<td colspan="3" style="text-align: right;"><b>Ksh. '.number_format($total, 2).'</b><td>';
                echo '</tr>';
            ?>
    </table>

    <?php
        if (array_key_exists('update', $_POST)) {
            $pid = $_POST["prod"];
            foreach($_SESSION["cart-items"] as $item => $qty) {
                if ($item == $pid) {
                    $_SESSION["cart-items"][$item] = $_POST["quantity"];
                    if ($_POST["quantity"] == 0) {
                        unset($_SESSION["cart-items"][$item]);
                    }
                    header("location:cart.php");
                    
                }
            }
            foreach($_SESSION["cart-items"] as $item => $qty) {
                echo $item;
                echo $qty;
            }
            // 
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
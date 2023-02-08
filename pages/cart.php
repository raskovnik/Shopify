<?php
session_start();
    include "../scripts/connect.php"
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
        if (count($_SESSION["cart-items"]) != 0) {
            echo '<form method="POST">';
                echo '<button class="btn" name="clear" style="width: 15%; margin: 10px;">Clear Cart</button>';
                echo '<button class="btn" name="proceed" style="width: 15%; margin: 10px;">Proceed to Payment</button>';
            echo '</form>';
        }

        if (array_key_exists("clear", $_POST)) {
            $_SESSION["cart-items"] = [];
            header("location:cart.php");
        }
    ?>
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
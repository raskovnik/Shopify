<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
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
                <li><a href="../pages/index.php">Home</a></li>
                <li><a href="../pages/products.php">Products</a></li>
                <li><a href="">About</a></li>
                <li><a href="">Contact</a></li>
                <li><a href="../pages/login.php">Account</a></li>
            </ul>
        </nav>
        <a href="../pages/cart.php"><img src="../images/cart.svg" width="30px" height="30px"></a>
        <img src="../images/menu bar.png" class="menu-icon" onclick="menutoggle()">
        </div> 
        
        </div>
        </div>
        
        <?php
            include "connect.php";
            $product = $_GET["product"];
            $sql = "SELECT * FROM products WHERE id=$product";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                echo '</div>';
                echo '<div class="col-4">';
                echo '<div class="flex-container">';
                    echo '<div><img style="width: 75%; padding: auto; margin: auto" src="../images/'.$row["image"].'"></div>';
                    echo '<div>';
                    echo '<p><b>Seller</b></p>';
                    echo '<p><a href="#" bg-color="blue">'.$row["seller"].'</a></p>';
                    echo '<p><b>Description</b></p>';
                    echo '<p>'.$row["description"].'</p>';
                    echo '<p><b>Rating</b></p>';
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
                    echo '<p><b>Verified Reviews</b></p>';
                    echo '<p>'.$row["reviews"].'</p>';
                    echo '<p><b>In Stock</b></p>';
                    echo '<p>'.$row["qty"].'</p>';
                    echo '<p><b>Price</b></p>';
                    echo '<p>Ksh. '.number_format($row["price"], 2).'</p>';
                    echo '<button class="btn">Add to Cart</button>';
                    echo '</div>';
                echo '</div>';
                echo '</div>';
                echo '<h3>Similar Products</h3>';
                $tag = $row["tags"];
                $sql = "SELECT * FROM `products` WHERE tags LIKE '%$tag%' and id!=$product";
                $similar = mysqli_query($conn, $sql);

                if ($similar) {
                    if (mysqli_num_rows($similar) > 0) {
                        echo '<div class="row">';
                        while ($row = mysqli_fetch_assoc($similar)) {
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
                }
            } else {
                echo "<div style='height: 200px;
                width: 400px;            
                position: fixed;
                top: 50%;
                left: 50%;
                margin-top: -100px;
                margin-left: -200px;'>Error occurred while fetching item</div>";
            }
        ?>
    </body>
</html>
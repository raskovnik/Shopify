<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,600;0,700;1,300;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style='text-align: center'>
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
        $product = $_GET["search"];
        $sql = "SELECT * FROM `products` WHERE description LIKE '%$product%'";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            if (mysqli_num_rows($result) > 0) {
                echo '<h2 style="text-align: left">Search results for '.$product.'</h2>';
                echo '<div class="row">';
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<a href="../scripts/productDetails.php?product=' . $row["id"] . '">';
                        echo '<div class="col-4">';
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
</body>
</html>

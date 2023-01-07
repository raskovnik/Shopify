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
    
    <?php
        include "connect.php";
        $product = $_GET["search"];
        $sql = "SELECT * FROM `products` WHERE description LIKE '%$product%'";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            if (mysqli_num_rows($result) > 0) {
                echo '<div class="row">';
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<div class="col-4">
                        <img src="../images/prod2.jpg">
                        <h4>'.$row["description"].'</h4>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <p>'.$product.'</p>
                    </div>';
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

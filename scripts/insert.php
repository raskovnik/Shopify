<?php
    include "connect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="insert.php">
        <input type="text" name="productID" placeholder="Product">
        <input type="text" name="location" placeholder="Location">
        <input type="submit" name="submit" value="submit">

    </form>

    <?php
        if (isset($_POST["submit"])) {
            $product = $_POST["productID"];
            $location = $_POST["location"];

            $sql = "INSERT INTO  delivery VALUES($product, '$location')";
            mysqli_query($conn, $sql);
        }
    ?>
</body>
</html>
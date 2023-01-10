<?php
    include "conn.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert items</title>
	<link rel="stylesheet" href="../css/login.css">
</head>
<body>
<div class="log">
        <article>
        <section>
            <div class="login">
    <form method="POST" action="insert.php">
	<h1>Delivery Location Details(Shipping Service)</h1>
        <input type="text" name="productID" placeholder="ProductID"><br>
        <input type="text" name="currentLocation" placeholder="Current Location"><br>
        <input type="submit" name="submit" value="submit">

    </form>
	</section>
        </article>
        </div>
        </div>

    <?php
        if (isset($_POST["submit"])) {
            $productID = $_POST["productID"];
            $currentLocation = $_POST["currentLocation"];

            $sql = "INSERT INTO  delivery VALUES($productID, '$currentLocation')";
            mysqli_query($con, $sql);
        }
    ?>
</body>
</html>

<?php
    session_start();
    include "../scripts/connect.php";
?>

<!DOCTYPE>
<html>
    <link rel="stylesheet" href="../css/login.css">
    <title>
        Add
    </title>
    <body>
        <?php
            include "../scripts/connect.php";
        ?>
        <div class="log">
            <article>
                <section>
                    <div class="login">
                        <h2>Add product</h2>

            <form method="POST" action="addproduct.php" enctype="multipart/form-data">
                <label for="ptype"> Product type: </label>
                <select id="ptype" name="ptype" required style="width:69.5%;height: 30px;border-radius:10px;border-color: blue;">
                    <option value="phn" selected>Phones</option>
                    <option value="tns">Utensils</option>
                    <option value="bgs">Bags</option>
                </select><br><br>
                <label for="pname">Product name: </label>
                <input type="text" id="pname" required name="pname" style="width:69.5%;height: 30px;border-radius:10px;border-color: blue;"><br><br>
                <label for="pimage">Product Image :</label><br>
                <input type="file" id="pimage" required name="pimage" style="width:60%;height: 30px;border-radius:10px;border-color: blue;"><br><br>
                <label for="desc">Description : </label>
                <textarea type="text" required name="desc" id="pdesc" style="width:69.5%;height: 30px;border-radius:10px;border-color: blue;"></textarea><br><br>
                <label for="price">Price : </label><br>
                <input type="text" required name="price" id="price" style="width:69.5%;height: 30px;border-radius:10px;border-color: blue;"><br><br>
                <label for="qty">Quantity: </label><br>
                <input type="number" id="qty" required name="qty" style="width:69.5%;height: 30px;border-radius:10px;border-color: blue;"><br><br>
                <input type="submit" name="submit" value="Submit">
            </form>

            <?php
                if (isset($_POST["submit"])) {
                    $tag = $_POST["ptype"];
                    $description = $_POST["desc"];
                    $qty = $_POST["qty"];
                    $price = $_POST["price"];
                    $seller = $_SESSION["email"];
                    $image = $_FILES["pimage"]["name"];

                    $sql = "INSERT INTO `products`(`description`, `qty`, `price`, `seller`, `tags`, `image`) VALUES('$description', $qty, $price, '$seller', '$tag', '$image')";
                    if (mysqli_query($conn, $sql)) {
                        if (isset($_FILES["pimage"])) {
                            $target_dir = "/Shopify/images/";
                            move_uploaded_file($_FILES['pimage']['tmp_name'], $_SERVER['DOCUMENT_ROOT'].$target_dir.$_FILES['pimage']['name']);
                            echo "Product added successfully";
                        }
                    } else {
                        echo "alert('Product not added. Try again')";
                    }
                }
            ?>
            </section>
            </article>
            </div>
        </div>
    </body>
</html>
<?php
    include "../scripts/connect.php";
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>
            login
        </title>
        <link rel="stylesheet" href="../css/login.css">
    </head>
    <body>
        <div class="log">
        <article>
        <section>
            <div class="login">
            <h2>Company Details</h2>
            <?php
            ?>
            <form action="sellers.php" method="POST">
                <input type="email" style="width:69.5%;height: 30px;border-radius:10px;border-color: blue;" name="email" placeholder="Email Adress"><br><br>
                <input type="text" name="bank" placeholder="Bank Account Number" style="width:69.5%;height: 30px;border-radius:10px;border-color: blue;"><br><br>
                <textarea type="text" placeholder="Company Details" name="desc" id="pdesc" style="width:69.5%;height: 30px;border-radius:10px;border-color: blue;"></textarea><br><br>
                <input type="submit" name="submit" value="Submit"><br><br>
            </form>
            <p id="cr">&#169 2022</p>
            </div>
            <?php
                if (isset($_POST["submit"])) {
                    $email = $_POST["email"];
                    $description = $_POST["desc"];
                    $payment = $_POST["bank"];

                    $sql = "INSERT INTO `company` VALUES('$email', '$description', '$payment')";
                    if (mysqli_query($conn, $sql)) {
                        header("location:../pages/index.php");
                    }
                }
            ?>
        </section>
        </article>

        </div>
    </body>
</html>
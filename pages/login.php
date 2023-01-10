<?php
    session_start();
    include "../scripts/connect.php";
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
            <h2>Log in</h2> 
            <form class="n" method="POST" action='login.php'>
                <label for="email"><h4>Enter your email address</h4></label><br>
                <input type="text" id="email" name="email"  style="width:69.5%;height: 30px;border-radius:10px;border-color: blue;" ><br>
                <label for="pwd"><h4>Password</h4></label><br>
                <input type="password" id="pwd" name="pwd" style="width:69.5%;height: 30px;border-radius:10px;border-color: blue;"><br><br>
                <input type="submit" value="submit" name="submit"><br><br>
            </form>
            <a href="reg.php">Register</a><br>
            <a href="forgot.php" target="_blank">Forgot password</a><br>
            <p id="cr">&#169 2022</p>
            <?php
                if (isset($_POST["submit"])) {
                    $email = $_POST["email"];
                    $password = $_POST["pwd"];

                    $sql = "SELECT * FROM `users` WHERE `email`='$email' AND `password`='$password'";
                    if (mysqli_num_rows(mysqli_query($conn, $sql)) != 1) {
                        echo "Input correct credentials";
                    } else {
                        $_SESSION["email"] = $email;
                        header("location:../pages/index.php");
                    }
                }
            ?>
        </section>
        </article>
        </div>
        </div>
    </body>
</html>
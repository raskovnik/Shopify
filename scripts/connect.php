<?php
    session_start();
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "shopify";

    $conn = mysqli_connect($servername, $username, $password);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $db = mysqli_select_db($conn, $dbname);

?>
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

</head>
<body>
<div class="log">
        <article>
        <section>
            <div class="login">
    <form method="POST" action="shippingdet.php">
	<h2>Delivery Details</h2>
  <p>Shipping Method:<select id="shipping_method" name="shipping_method">
  <label for="fast_delivery" id="fast_delivery" name="fast_delivery">
			Fast delivery
	</label>
	<option value="fast_delivery">
		Fast delivery
	</option>
	<label for="normal_delivery" id="normal_delivery" name="normal_delivery">
		Normal delivery
	</label>
	<option value="normal_delivery">
	 Normal delivery
	</option>
  </select></p>
  <p>Shipping Fee: $4.99</p>
<form>
  <h2>Address Details</h2>
  <article>
  <table>
	
		<tr>
		<td>
  <label for="address" id="address" name="address">Address:</label>
		</td>
		<td>
  <input type="textbox" name="address" id="address"></input><br>
		</td>
		</tr>
		<tr>
		<td>
  <label for="city" id="city" name="city">City:</label>
		</td>
		<td>
  <input type="textbox" name="state" id="state"></input><br>
		</td>
		</tr>
		<tr>
		<td>
  <label for="state" id="state" name="state">State:</label>
		</td>
		<td>
  <input type="textbox" name="zip_code" id="zip_code"></input><br>
		</td>
		</tr>
		<tr>
		<td>
  <label for="name" id="zip_code" name="zip_code">ZIP code:</label>
		</td>
		<td>
  <input type="textbox" name="zip_code" id="zip_code"></input><br>
		</td>
		</tr>
	</table>
  <h2>Pick Up Location</h2>
  <table>
	<tr>
	<td>
	<label for="location" id="store_name" name="store_name">Store name:</label>
	</td>
	<td>
	<input type="textbox" id="store_name" name="store_name"
	</td>
	</tr>
	<tr>
	<td>
	<label for="del_address" id="del_address" name="del_address">Address:</label>
	</td>
	<td>
	<input type="textbox" id="del_address" name="del_address">
	</td>
	</tr>
	</table>
	</article>
  <h2>Payment Info</h2>
  <p>Payment Method: Credit Card</p>
  <label for="credit_card_no" id="credit_card_no" name="credit_card_no">Credit card Number:</label>
  <input type="textbox" id="credit_card_no" name="credit_card_no">
  <label for="pin" id="pin" name="pin">Pin:</label>
  <input type="password" id="pin" name="pin">
  <div class="buttons">
	<a href="cart.php"><button>Cancel</button></a>
	<a href="index.php"><button>Submit</button></a>
 </div>
</form>

</div>

    <?php
        if (isset($_POST["submit"])) {

            $shipping_method = $_POST["shipping_method"];
            $address = $_POST["address"];
			$city = $_POST["city"];
			$state = $_POST["state"];
			$zip_code = $_POST["zip_code"];
			$store_name = $_POST["store_name"];
			$del_address = $_POST["del_address"];
			$credit_card_no = $_POST["credit_card_no"];
			$pin = $_POST["pin"];
			

            $sql = "INSERT INTO  addressDetails VALUES('$shipping_method', '$address', '$city', '$state', '$zip_code')";
			$sql = "INSERT INTO  pickupLocation VALUES ('$store_name', '$del_address')";
			$sql = "INSERT INTO paymentInfo VALUES('$credit_card_no', '$pin')";
            mysqli_query($con, $sql);
			
        }
    ?>
</body>
</html>

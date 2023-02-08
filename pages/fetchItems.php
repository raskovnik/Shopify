<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delivery status</title>
	<link rel="stylesheet" href="../css/login.css">
</head>
<body>
<h1><strong>Ongoing deliveries</strong></h1>
<style>
table {
	width:100%
}
</style>

<table border="1"style="overflow:scroll;background-color:#ADD8E6; ">
		<tr style="background-color:#F0E68C">
			<td>No</td>
			<td>ProductID</td>
			<td>Current location</td>
			<td>Product Name</td>
		</tr>
		<?php
		include("getitems.php");
		?>
		</table>
		
</body>
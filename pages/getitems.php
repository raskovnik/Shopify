<?php
include('conn.php');
$sql="SELECT delivery.productID,delivery.currentLocation,products.name FROM delivery INNER JOIN products ON delivery.productID=products.productID";
$result=mysqli_query($con,$sql);
$count=mysqli_num_rows($result);
if($count>0){
for($count=0;$row=mysqli_fetch_assoc($result);$count++){
	$productID=$row['productID'];
print("<tr>");
$no=$count+1;
print("<td>$no</td>");
foreach($row as $key=>$value)
	print("<td>$value</td>");
print("</tr>");
}
}else{
print("**You have not requested for any deliveries**");

}

?>
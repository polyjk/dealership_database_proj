<?php
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "cars";
	
	$conn = new mysqli ($servername, $username, $password, $dbname) or
	die("Connect failed: %s\n". $conn -> error);

	$sql = "SELECT for_sale.model_Code, for_sale.car_Mileage, for_sale.sale_Price, for_sale.model_Year
FROM for_sale
WHERE for_sale.manufacturer_Code = 'H' OR for_sale.manufacturer_Code = 'F'";

	$result = $conn -> query($sql) 
	or die($conn->error);

	if($result->num_rows > 0){
		echo "<table style='border: solid 1px black;'>
			<tr>
				<th>Model Code</th>
			<th>Mileage</th>
			<th>Sale Price</th>
			<th>Model Year</th>
			
			</tr>";
}

	
	while ($row = $result -> fetch_assoc()) {
		echo '<tr>
			<td> '.$row['model_Code'].' </td>
			<td> '.$row['car_Mileage'].' </td>
			<td> '.$row['sale_Price'].' </td>
			<td> '.$row['model_Year'].' </td>
			
		      </tr>';	
	}
	echo "</table>";

?>
	
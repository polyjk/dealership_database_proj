<?php
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "cars";
	
	$conn = new mysqli ($servername, $username, $password, $dbname) or
	die("Connect failed: %s\n". $conn -> error);

	$sql = "SELECT for_sale.manufacturer_Code, COUNT(for_Sale.sale_ID) AS `amount`
		FROM for_sale
		GROUP BY for_sale.manufacturer_Code";

	$result = $conn -> query($sql) 
	or die($conn->error);

	if($result->num_rows > 0){
		echo "<table style='border: solid 1px black;'>
			<tr>
				<th>Manufacturer Code</th>
				<th>Number Sold</th>
			
			</tr>";
}

	
	while ($row = $result -> fetch_assoc()) {
		echo '<tr>
			<td> '.$row['manufacturer_Code'].' </td>
			<td> '.$row['amount'].' </td>
		      </tr>';	
	}
	echo "</table>";

?>
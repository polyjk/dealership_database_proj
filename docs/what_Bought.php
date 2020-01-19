<?php
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "cars";
	
	$conn = new mysqli ($servername, $username, $password, $dbname) or
	die("Connect failed: %s\n". $conn -> error);

	$sql = "SELECT customers.customer_fName, customers.customer_lname, sold.model_Code
		FROM customers INNER JOIN sold
		ON customers.customer_ID = sold.customer_ID";

	$result = $conn -> query($sql) 
	or die($conn->error);

	if($result->num_rows > 0){
		echo "<table style='border: solid 1px black;'>
			<tr>
				<th>Customer First Name</th>
				<th>Customer Last Name</th>
			<th>Model Code</th>
			
			</tr>";
}

	
	while ($row = $result -> fetch_assoc()) {
		echo '<tr>
			<td> '.$row['customer_fName'].' </td>
			<td> '.$row['customer_lname'].' </td>
			<td> '.$row['model_Code'].' </td>
			
		      </tr>';	
	}
	echo "</table>";

?>
	
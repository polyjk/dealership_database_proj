<?php
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "cars";
	
	$conn = new mysqli ($servername, $username, $password, $dbname) or
	die("Connect failed: %s\n". $conn -> error);

	$sql = "SELECT * FROM car_models";

	$result = $conn -> query($sql) 
	or die($conn->error);

	if($result->num_rows > 0){
		echo "<table style='border: solid 1px black;'>
			<tr>
			
			<th>Model Code</th>
			<th>Manufacturer Code</th>
			<th>Model Name</th>
			

			</tr>";
}

	
	while ($row = $result -> fetch_assoc()) {
		echo '<tr>

			<td> '.$row['model_Code'].' </td>
			<td> '.$row['manufacturer_Name'].' </td>
			<td> '.$row['model_Name'].' </td>

		      </tr>';	
	}
	echo "</table>";

?>
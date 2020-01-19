<?php
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "cars";
	
	$conn = new mysqli ($servername, $username, $password, $dbname) or
	die("Connect failed: %s\n". $conn -> error);

	$sql = "SELECT * FROM car_manufacturer";

	$result = $conn -> query($sql) 
	or die($conn->error);

	if($result->num_rows > 0){
		echo "<table style='border: solid 1px black;'>
			<tr>

			<th>Manufacturer Code</th>
			<th>Manufacturer Name</th>

			</tr>";
}

	
	while ($row = $result -> fetch_assoc()) {
		echo '<tr>

			<td> '.$row['manufacturer_Code'].' </td>
			<td> '.$row['manufacturer_Name'].' </td>

		      </tr>';	
	}
	echo "</table>";

?>
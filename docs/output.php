<?php
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "cars";
	
	$conn = new mysqli ($servername, $username, $password, $dbname) or
	die("Connect failed: %s\n". $conn -> error);

	$sql = "SELECT * FROM employee";

	$result = $conn -> query($sql) 
	or die($conn->error);

	if($result->num_rows > 0){
		echo "<table style='border: solid 1px black;'>
			<tr>
				<th>ID</th>
				<th>First Name</th>
			<th>Last Name</th>
			<th>No. of Sales</th>
			<th>Sales Amount</th>
			</tr>";
}

	
	while ($row = $result -> fetch_assoc()) {
		echo '<tr>
			<td> '.$row['emp_ID'].' </td>
			<td> '.$row['emp_fName'].' </td>
			<td> '.$row['emp_lName'].' </td>
			<td> '.$row['num_Sales'].' </td>
			<td> '.$row['sales_Amount'].' </td>
		      </tr>';	
	}
	echo "</table>";

?>
	
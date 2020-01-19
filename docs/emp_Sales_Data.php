<?php
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "cars";
	
	$conn = new mysqli ($servername, $username, $password, $dbname) or
	die("Connect failed: %s\n". $conn -> error);

	$sql = "SELECT emp_fname, emp_lname, sales_Amount
		FROM employee";

	$result = $conn -> query($sql) 
	or die($conn->error);

	if($result->num_rows > 0){
		echo "<table style='border: solid 1px black;'>
			<tr>
				<th>Employee First Name</th>
				<th>Employee Last Name</th>
			<th>$ Amount Sold</th>

			
			</tr>";
}

	
	while ($row = $result -> fetch_assoc()) {
		echo '<tr>
			<td> '.$row['emp_fname'].' </td>
			<td> '.$row['emp_lname'].' </td>
			<td> '.$row['sales_Amount'].' </td>
		      </tr>';	
	}
	echo "</table>";

?>
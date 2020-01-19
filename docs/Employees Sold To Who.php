<?php
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "cars";
	
	$conn = new mysqli ($servername, $username, $password, $dbname) or
	die("Connect failed: %s\n". $conn -> error);

	$sql = "SELECT GROUP_CONCAT(employee.emp_fName, ' ', employee.emp_lName) AS `Employee Name`,
		GROUP_CONCAT(customers.customer_fName, ' ', customers.customer_lname) AS `Sold To`,
       			 sold.model_Code AS `Car Sold`
		FROM (employee INNER JOIN sold ON employee.emp_ID = sold.employee_ID) 
			INNER JOIN customers ON sold.customer_ID = customers.customer_ID
			GROUP BY sold.sale_ID";

	$result = $conn -> query($sql) 
	or die($conn->error);

	if($result->num_rows > 0){
		echo "<table style='border: solid 1px black;'>
			<tr>
				<th>Employee Name</th>
				<th>Sold To</th>
			<th>Car Sold</th>

			
			</tr>";
}

	
	while ($row = $result -> fetch_assoc()) {
		echo '<tr>
			<td> '.$row['Employee Name'].' </td>
			<td> '.$row['Sold To'].' </td>
			<td> '.$row['Car Sold'].' </td>
		      </tr>';	
	}
	echo "</table>";

?>
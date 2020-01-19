<form action="<?php echo $_SERVER['PHP_SELF']; ?>"method="post">

	
	Manufacturer Code: <input type="text" name="manufacturerCODEtb"/> <br/>
	Manufacturer Name: <input type="text" name="manufacturerNAMEtb"/> <br/>


	<input type ="submit" value="Insert" name="inserttb"/> <br/>
</form>

<?php
	if(isset($_POST['inserttb'])) {

		
		$manufacturerCODE = $_POST['manufacturerCODEtb']; //gets Manufacturer code 
		$manufacturerNAME = $_POST['manufacturerNAMEtb']; //gets Manufacturer name

		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "cars";
	
		//Creates connection to cars db
		$conn = new mysqli($servername, $username, $password, $dbname);

		//embed insert statement in PHP
		$sql = "INSERT INTO car_manufacturers (manufacturer_Code, manufacturer_Name)   
			VALUES ('$manufacturerCODE', '$manufacturerNAME')";

		$result = $conn -> query($sql);
	}
?>
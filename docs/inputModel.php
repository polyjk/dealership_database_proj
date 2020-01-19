<form action="<?php echo $_SERVER['PHP_SELF']; ?>"method="post">

	Model Code: <input type="text" name="modelCODEtb"/> <br/>
	Manufacturer Code: <input type="text" name="manufacturerCODEtb"/> <br/>
	Model Name: <input type="text" name="modelNAMEtb"/> <br/>


	<input type ="submit" value="Insert" name="inserttb"/> <br/>
</form>

<?php
	if(isset($_POST['inserttb'])) {

		$modelCODE = $_POST['manufacturerCODEtb']; 			//gets model code
		$manufacturerCODE = $_POST['manufacturerCODEtb'];   //gets Manufacturer code 
		$modelNAME = $_POST['modelNAMEtb']; 				//gets model name

		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "cars";
	
		//Creates connection to cars db
		$conn = new mysqli($servername, $username, $password, $dbname);

		//embed insert statement in PHP
		$sql = "INSERT INTO car_models (model_Code, manufacturer_Code, model_Name)   
			VALUES ('$modelCODE', '$manufacturerCODE', '$modelNAME')";

		$result = $conn -> query($sql);
	}
?>
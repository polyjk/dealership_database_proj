<form action="<?php echo $_SERVER['PHP_SELF']; ?>"method="post">

	ID: <input type="text" name="IDtb"/> <br/>
	Manufacturer Code: <input type="text" name="manufacturertb"/> <br/>
	Model Code: <input type ="text" name ="modeltb"/> <br/>
	Mileage: <input type ="text" name ="mileagetb"/> <br/>
	Price: <input type ="text" name ="pricetb"/> <br/>
	Model Year: <input type ="text" name ="yeartb"/> <br/> 

	<input type ="submit" value="Insert" name="inserttb"/> <br/>
</form>

<?php
	if(isset($_POST['inserttb'])) {

		$id = $_POST['IDtb'];  			  //gets Sale ID
		$manufacturer = $_POST['manufacturertb']; //gets Manufacturer code 
		$model = $_POST['modeltb']; 		  //gets model code
		$mileage = $_POST['mileagetb'];		  //gets car's mileage 
		$price = $_POST['pricetb'];		  //gets asking price for car
		$modelYear = $_POST['yeartb'];		  //gets car's model year

		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "cars";
	
		//Creates connection to cars db
		$conn = new mysqli($servername, $username, $password, $dbname);

		//embed insert statement in PHP
		$sql = "INSERT INTO for_Sale (sale_ID, model_Code, manufacturer_Code, car_Mileage, sale_Price, model_Year)   
			VALUES ('$id', '$model', '$manufacturer', '$mileage', '$price', '$modelYear')";

		$result = $conn -> query($sql);
	}
?>
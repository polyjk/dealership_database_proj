# dealership_database_proj
A MySQL car dealership database project

*************COPY OF "database project report2.word"********************
refer to the word document for relational schema map etc





Database for Vehicles R Us

By

Poly Khammany






















PROJECT REQUIREMENTS

An automotive dealership company called Vehicles R Us sells all types of vehicles to customers in the area. The database being designed should be able to keep track of information related to car sales.
The database will hold various information regarding the dealership’s employees, car attributes, and contact information of customers.  The dealership will initially hold 10 vehicles on record from Ford, Honda, Volkswagen, BMW, and Toyota. Customers will be able to select what car they want from a list of the current available car lot. When a sale is made an employee’s sales numbers will rise and customer information will be taken. When the lot has space, vehicles may be entered in to fill the space. The database will have a vehicle’s manufacturer brand, car model, mileage, year, and sale price.
The following database interactions are expected:
A.      Display sale information of employee, customer sold to, and the car model code.
B.      Show employee sales numbers.
C.      Analyze the sales of all manufacturers and display their sales data.
D.      Lists currently available car’s information of selected manufacturer brands.
E.       List of all customers who have purchased vehicles.

DATA MODELING
 
Relational Schema:
        	car_Manufacturers(manufacturer_Code[PK], manufacturer_Name)
        	car_Models(model_Code[PK], manufacturer_Code[FK], model_Name)
        	for_sale(sale_ID[PK], model_Code[FK], manufacturer_Code[FK], car_Mileage,    	sale_Price, model_Year)
        	customers(customer_ID[PK], sale_ID[FK], customer_fName, customer_lname)
        	employee(emp_ID[FK], sales_Amount, num_Sales, emp_fName, emp_lName)
        	sold(sale_ID[PK], model_Code[FK], manufacturer_Code[FK], customer_ID[FK], employee_ID[FK], car_Mileage, sale_Price, model_Year)
 
  

Normalization:
        	In each of the given tables we have taken steps to ensure that each non-key attribute is non-transitively dependent on the key attribute of the respective table to achieve 3rd Normal Form. For example, by splitting the tables car_Manufacturers and car_Models into two we ensure that the model_Name attribute is not dependent on any attribute other than model_Code (i.e. manufacturer_Name).








IMPLEMENTATION

Here, we establish connection the database with one of our queries. We declare our database variables, then put them in $conn as attributes for a connection. $result will either establish connection to our database or error.

 
	
If $result connects then it creates our column names, then fetches database information from our query to fill the rows. Finally, echo prints our created table.

 


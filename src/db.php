<?php
include("config/db.php");
DB::$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

class DB
{
	public static mysqli $conn;

	//Return the query result of the given query
	public function query(string $query): mysqli_result
	{
		return DB::$conn->query($query);
	}

	/**Checks if the login value's are valid
	*  Returns a user class if succesful
	*  Returns false if unsuccesful**/
	public function login(string $user, string $password): User | false
	{
		$result = $this->query("SELECT * FROM users WHERE Password = \"$password\" AND FirstName = \"$user\" ");

		if (mysqli_num_rows($result) >= 1) {
			$data = $result->fetch_assoc();
			return new User($data["id"], $data["FirstName"], $data["LastName"], $data["email"], $data["password"]);
		}

		return false;
	}

	/**Gets the column with the defined id in the User table within the database
	*  Returns a customer class if succesful
	*  Returns false if unsuccesful**/
	public function getUserById(int $id): User | false
	{
		$result = $this->query("SELECT * FROM users WHERE id = ".$id);

		if (mysqli_num_rows($result) >= 1) {
			$data = $result->fetch_assoc();
			return new User($data["id"], $data["FirstName"], $data["LastName"], $data["email"], $data["password"]);
		}

		return false;
	}

	/**Gets the column with the defined id in the cutomer table within the database
	*  Returns a customer class if succesful
	*  Returns false if unsuccesful**/
	public function getCustomerById(int $id): Customer | false
	{
		$result = $this->query("SELECT * FROM customers WHERE id = ".$id);

		if (mysqli_num_rows($result) >= 1) {
			$data = $result->fetch_assoc();
			return new Customer($data["id"], $data["FirstName"], $data["LastName"], $data["Description"], $data["Adress"], $data["Last act."]);
		}

		return false;
	}

	/**Gets if the column with the defined id is an admin in the user table
	*  Returns true if succesful
	*  Returns false if unsuccesful**/
	public function getAdminById(int $id): true | false
	{
		$result = $this->query("SELECT * FROM users WHERE id = ".$id." AND admin = 1 ");

		if (mysqli_num_rows($result) >= 1) {
			$data = $result->fetch_assoc();
			return true;
		}

		return false;
	}

	//Add new column to the user table within the database
	public function addUser(String $fName, String $lName, String $email, String $password)
	{
		$this->query("INSERT INTO users (FirstName,LastName,Email,Password) VALUES(\"$fName\",\"$lName\",\"$email\",\"$password\")");
	}

	//Add new column to the customer table within the database
	public function addCustomer(String $fName, String $lName, String $desc, String $address, String $status)
	{
		$this->query("INSERT INTO customers (FirstName,LastName,Description,Adress,Status) VALUES(\"$fName\",\"$lName\",\"$desc\",\"$address\",\"$status\")");
	}

	//Update values within the customer table within the database
	public function updateCustomer(String $fName, String $lName, String $desc, String $address, String $status){
		$this->query("UPDATE customers SET FirstName = \"$fName\", LastName = \"$lName\", Description = \"$desc\", Adress = \"$address\", Status = \"$status\")");
	}

	//Update values within the user table within the database
	public function updateUser(String $fName, String $lName, String $email, String $password){
		$this->query("UPDATE users SET FirstName = \"$fName\", LastName = \"$lName\", Email = \"$email\", Password = \"$password\"");
	}



}
?>

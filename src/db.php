<?php
require_once(__DIR__ . "/user.php");
require_once(__DIR__ . "/../config/db.php");
DB::$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

class DB
{
	public static mysqli $conn;

	public static function query(string $query): mysqli_result
	{
		return DB::$conn->query($query);
	}

	public static function login(string $user, string $password): User | bool
	{
		$result = self::query("SELECT * FROM users WHERE Password = \"$password\" AND `Email` = \"$user\" ");

		if (mysqli_num_rows($result) >= 1) {
			$data = $result->fetch_assoc();
			return new User($data["id"], $data["FirstName"], $data["LastName"], $data["Email"], $data["Admin"], $data["Password"]);
		}

		return false;
	}

	public static function getUserById(int $id): User | bool
	{
		$result = self::query("SELECT * FROM users WHERE id = ".$id);

		if (mysqli_num_rows($result) >= 1) {
			$data = $result->fetch_assoc();
			return new User($data["id"], $data["FirstName"], $data["LastName"], $data["Email"], $data["Admin"], $data["Password"]);
		}

		return false;
	}

	public static function getCustomerById(int $id): Customer | bool
	{
		$result = self::query("SELECT * FROM customers WHERE id = ".$id);

		if (mysqli_num_rows($result) >= 1) {
			$data = $result->fetch_assoc();
			return new Customer($data["id"], $data["FirstName"], $data["LastName"], $data["Description"], $data["Adress"], $data["Last act."]);
		}

		return false;
	}

	public static function addUser(String $fName, String $lName, String $email, String $password)
	{
		self::query("INSERT INTO users (FirstName,LastName,Email,Password) VALUES(\"$fName\",\"$lName\",\"$email\",\"$password\")");
	}

	public static function addCustomer(String $fName, String $lName, String $desc, String $address, String $status)
	{
		self::query("INSERT INTO customers (FirstName,LastName,Description,Adress,Status) VALUES(\"$fName\",\"$lName\",\"$desc\",\"$address\",\"$status\")");
	}

	public static function updateCustomer(String $fName, String $lName, String $desc, String $address, String $status){
		self::query("UPDATE customers SET FirstName = \"$fName\", LastName = \"$lName\", Description = \"$desc\", Adress = \"$address\", Status = \"$status\")");
	}
}
?>

<?php
include("config/db.php");
DB::$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

class DB
{
	public static mysqli $conn;

	public function query(string $query): mysqli_result
	{
		return DB::$conn->query($query);
	}

	public function login(string $user, string $password): User | false
	{
		$result = $this->query("SELECT * FROM users WHERE Password = \"$password\" AND FirstName = \"$user\" ");

		if (mysqli_num_rows($result) >= 1) {
			$data = $result->fetch_assoc();
			return new User($data["id"], $data["FirstName"], $data["LastName"], $data["email"], $data["password"]);
		}

		return false;
	}

	public function getById(int $id): User
	{
		$result = $this->query("SELECT * FROM users WHERE id = ".$id);

		if (mysqli_num_rows($result) >= 1) {
			$data = $result->fetch_assoc();
			return new User($data["id"], $data["FirstName"], $data["LastName"], $data["email"], $data["password"]);
		}

		return false;
	}

	public function addUser(String $fName, String $lName, String $email, String $password)
	{
		$this->query("INSERT INTO users (FirstName,LastName,Email,Password) VALUES(\"$fName\",\"$lName\",\"$email\",\"$password\")");
	}

	public function addCustomer(String $fName, String $lName, String $desc, String $address, String $status)
	{
		$this->query("INSERT INTO customers (FirstName,LastName,Description,Adress,Status) VALUES(\"$fName\",\"$lName\",\"$desc\",\"$address\",\"$status\")");
	}
}
?>

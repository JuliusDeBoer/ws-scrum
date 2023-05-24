<?php
DB::$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

class DB
{
	public $conn;

	// @param query Sql query
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

}
?>

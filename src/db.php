<?php
class DB
{
	private $db;

	public function __construct()
	{
		$this->db = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
	}

	public function query($query)
	{
		return $this->db->query($query);
	}

	public function login($user, $password)
	{
		$res = $this->query("SELECT * FROM users WHERE Password = \"$password\" AND FirstName = \"$user\" ");
		if (mysqli_num_rows($res) >= 0) {
			return new User($user, $pass);
		}

		return false;
	}

}
?>
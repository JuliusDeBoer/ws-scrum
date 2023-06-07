<?php
class User
{
	//Variables
	public int $id;
	public string $firstName;
	public string $lastName;
	public bool $admin;
	public string $password;

	//Instantiate variables
	public function __construct(int $id, string $firstName, string $lastName, bool $admin = false, string $password)
	{
		$this->id = $id;
		$this->firstName = $firstName;
		$this->lastName = $lastName;
		$this->password = $password;
		$this->admin = $admin;
	}
}
?>

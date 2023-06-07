<?php
class User
{
	//Variables
	public int $id;
	public string $firstName;
	public string $lastName;
	public bool $admin;
	public string $password;
	public string $email;

	//Instantiate variables
	public function __construct(int $id, string $firstName, string $lastName, string $email, bool $admin = false)
	{
		$this->id = $id;
		$this->firstName = $firstName;
		$this->lastName = $lastName;
		$this->admin = $admin;
		$this->email = $email;
	}
}
?>

<?php
class User
{
	public string $user;
	public string $firstName;
	public string $lastName;
	public bool $admin;
	public string $password;

	public function __construct($user, $firstName, $lastName, $admin, $password)
	{
		$this->user = $user;
		$this->password = $password;
		$this->firstName = $firstName;
		$this->lastName = $lastName;
		$this->password = $password;
		$this->admin = $admin;
		$this->password = $password;
	}
}
?>
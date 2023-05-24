<?php
class User
{
	public int $id;
	public string $firstName;
	public string $lastName;
	public bool $admin;
	public string $password;

	public function __construct(int $id, string $firstName, string $lastName, bool $admin, string $password)
	{
		$this->id = $id;
		$this->password = $password;
		$this->firstName = $firstName;
		$this->lastName = $lastName;
		$this->password = $password;
		$this->admin = $admin;
		$this->password = $password;
	}
}
?>

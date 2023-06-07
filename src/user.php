<?php
class User
{
	public int $id;
	public string $firstName;
	public string $lastName;
	public bool $admin;
	public string $password;
	public string $email;

	public function __construct(int $id, string $firstName, string $lastName, string $email, bool $admin, string $password)
	{
		$this->id = $id;
		$this->password = $password;
		$this->firstName = $firstName;
		$this->lastName = $lastName;
		$this->admin = $admin;
		$this->email = $email;
	}
}
?>

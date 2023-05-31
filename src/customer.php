<?php
class Customer
{
	public int $id;
	public string $firstName;
	public string $lastName;
	public string $description;
	public string $address;
  public string $date;

	public function __construct(int $id, string $firstName, string $lastName, string $description, string $address, string $date)
	{
		$this->id = $id;
		$this->firstName = $firstName;
		$this->lastName = $lastName;
		$this->description = $description;
		$this->address = $address;
    $this->date = $date;
	}

	public function export(): string {
		$firstName = $this->firstName;
		$lastName = $this->lastName;
		$address = $this->address;
		$date = $this->date;
		$description = $this->description;

		return
			"Summary of $firstName $lastName
			Residing at: \"$address\"
			Date of last change: $date

			$description";
	}
}
?>

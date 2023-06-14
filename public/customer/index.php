<?php
require_once(__DIR__ . "/../../src/db.php");
require_once(__DIR__ . "/../../src/customer.php");
require_once(__DIR__ . "/../../src/account.php");
require_once(__DIR__ . "/../../src/email.php");
requireLogin();

if(isset($_POST["Send mail"])) {
	$customer = new Customer($_POST["id"], $_POST["firstname"], $_POST["lastname"], $_POST["discription"], $_["address"], $_POST["status"], 0);
	sendMail($_POST["to"], "Exported", $customer->export());
	header("location: dashboard");
	exit;
}

if(isset($_POST["firstname"])) {
	if($_POST["id"] == -1) {
		DB::addCustomer($_POST["firstname"], $_POST["lastname"], $_POST["discription"], $_POST["address"], $_POST["status"]);
	} else {
		DB::updateCustomer($_POST["id"], $_POST["firstname"], $_POST["lastname"], $_POST["discription"], $_POST["address"], $_POST["status"]);
	}
	header("location: dashboard");
	exit;
}

$row = new Customer(-1, "", "", "", "", "", "");
	if(isset($_GET["id"])) {

	$row = DB::getCustomerById($_GET["id"]);
	if($row == false) {
		header("location: dashboard");
		exit;
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Customer</title>
  <link rel="stylesheet" href="../../public/style.css">
</head>
<body>
	<div class="container">
			<div class="customer">
				<form action="#" method="post">
				<div class="custInfo">
					<div>
						<label for="firstname">firstname</label>
						<input type="text" name="firstname" value="<?= $row->firstName ?>" required>
					</div>
					<div>
						<label for="lastname">lastname</label>
						<input type="text" name="lastname" value="<?= $row->lastName ?>" required>
					</div>
					<div>
						<label for="address">address</label>
						<input type="text" name="address" value="<?= $row->address ?>" required>
					</div>
				</div>
				<div class="custInfo">
					<div>
						<label for="discription">discription</label>
						<input type="text" name="discription" value="<?= $row->description ?>" required>
					</div>
					<div>
						<label for="status">status</label>
						<input type="text" name="status" value="<?= $row->status ?>" required>
					</div>
				</div>
				<input value="<?= $row->id ?>" type="hidden" name="id">
				<input value="submit" type="submit" name="submit">
				<input type="email" name="to">
				<input value="Send email" type="submit" name="mail">
				<a href="dashboard">back</a>
			</form>
		</div>
	</div>
</body>
</html>

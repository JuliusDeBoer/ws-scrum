<?php
require_once(__DIR__ . "/../../src/db.php");
requireLogin();
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
						<input type="text" name="firstname" required>
					</div>
					<div>
						<label for="lastname">lastname</label>
						<input type="text" name="lastname" required>
					</div>
					<div>
						<label for="address">address</label>
						<input type="text" name="address" required>
					</div>
				</div>
				<div class="custInfo">
					<div>
						<label for="discription">discription</label>
						<input type="text" name="discription" required>
					</div>
					<div>
						<label for="status">status</label>
						<input type="text" name="status" required>
					</div>
					<div>
						<label for="lastAtc">last action</label>
						<input type="text" name="lastAtc" required>
					</div>
				</div>
				<input value="submit" type="submit" name="submit">
				<a href="#">back</a>
			</form>
		</div>
	</div>
</body>
</html>

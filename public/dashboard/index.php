<?php
require_once(__DIR__ . "/../../src/account.php");
require_once(__DIR__ . "/../../src/db.php");
requireLogin();
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link rel="stylesheet" href="../../public/style.css">
</head>
<body>
    <div class="dashboard">
        <nav>
            <ul>
                <li>Home</li>
                <li>Excerpts</li>
                <li>Customers</li>
                <li>Logout</li>
            </ul>
        </nav>
        <div class="home">
            <div class="excerptCustomer">
                <h3>Excerpts</h3>
                <div class="excerptsCustomers">
                    <ul>
                        <li>Excerpts</li>
                    </ul>
                </div>
            </div>
            <div class="greeting">
                <h1>Hello 'user'</h1>
            </div>
            <div class="excerptCustomer">
                <h3>Customers</h3>
                <div class="excerptsCustomers">
                    <ul>
											<?php
												foreach(DB::query("SELECT * FROM `customers`")->fetch_all(MYSQLI_ASSOC) as $row) {
													?>
														<li>
															<a href="customer?id=<?= $row["id"] ?>">
																<h2><?= $row["FirstName"] ?> <?= $row["LastName"] ?></h2>
															</a>
														</li>
													<?php
												}
											?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

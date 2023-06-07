<?php
require_once(__DIR__ . "/../src/account.php");

if(isset($_POST["email"]) && isset($_POST["password"])) {
	if(login($_POST["email"], $_POST["password"])) {
		header("location: " . $_SERVER['REQUEST_URI'] ."/dashboard");
	}
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login page</title>
  <link rel="stylesheet" href="../public/style.css">
</head>
<body>
  <div class="container">
		<div class="error">
			<h2>Error</h2>
			<h3>Wrong email or password</h3>
		</div>
    <div class="content">
      <h1>Login</h1>
      <div class="login">
        <form action="#" method="post">
          <label for="email">email</label>
          <input type="email" name="email" required>
          <br>
          <label for="password">password</label>
          <input type="password" name="password" required>
          <br>
          <input value="login" type="submit" name="login">
        </form>
      </div>
    </div>
  </div>
</body>
</html>

<?php
require_once("../src/email.php");

$result = sendMail("boerjulius@gmail.com", "teehee", "you found me");

if($result) {
	print("It worked!");
} else {
	print("It did not do the thingy");
}

exit();

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

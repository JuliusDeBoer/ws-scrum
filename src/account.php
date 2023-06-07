<?php
require_once(__DIR__ . "/db.php");

session_start();

function requireLogin(): void {
	if(!isset($_SESSION["auth"])) {
		header("location: " . $_SERVER['REQUEST_URI'] . "/..");
	}
}

function login(string $username, string $password): bool {
	$result = DB::login($username, $password);

	// Succesful login
	if($result != false) {
		$_SESSION["auth"] = $result->id;
		return true;
	}

	return false;
}
?>

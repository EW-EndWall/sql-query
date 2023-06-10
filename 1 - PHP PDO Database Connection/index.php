<?php
$servername = "localhost";
$database = "databasename";
$username = "username";
$password = "password";

try {
	$db = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
}
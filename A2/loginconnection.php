<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "A2";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// check the error
if ($conn->connect_error) {
	die("Failed to connect " . $conn->connect_error);
}















?>

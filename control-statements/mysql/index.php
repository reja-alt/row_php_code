<?php

// MySQLi object-oriented procedure
$server_name = 'localhost';
$username = 'root';
$password = '';


// Creating connection
$conn = new Mysqli($server_name, $username, $password);

// Checking connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";
?>

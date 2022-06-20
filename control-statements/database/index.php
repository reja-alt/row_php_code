<?php
require 'config.php';

$dsn = "mysql:host=$localhost;dbname=$db;charset=UTF8";

try {
	$pdo = new PDO($dsn, $username, $password);

	if ($pdo) {
		echo "Connected to the $db database successfully!";
	}
} catch (PDOException $e) {
	echo $e->getMessage();
}

// insert a single publisher
// $name = 'Macmillan';
$sql = "INSERT INTO employees(Name, Surname, email, phone) VALUES('Macmillan', 'mam', enfsdn@gmail.com, '38787')";

$statement = $pdo->prepare($sql);
$statement->execute($sql);
echo "New record created successfully";
// $statement->execute([
// 	':name' => $name
// ]);

// $publisher_id = $pdo->lastInsertId();

// echo 'The publisher id ' . $publisher_id . ' was inserted';


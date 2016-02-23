<?php
$servername = "localhost";
$username = "root";
$password = "";		
$filename = "db-save/create_ddb0005.sql";
try {
		// login root et psw ''
		$bddtruc = new PDO('mysql:host=localhost;dbname=site_incidents', 
			'root', $password); 
} catch (Exception $e) {
	// Create connection
	$conn = new mysqli($servername, $username, $password);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}

	// Create database
	$sql = "CREATE DATABASE site_incidents";
	if ($conn->query($sql) === TRUE) {
	    $user_error = "Database site_incidents created successfully";
	} else {
	    $user_error = "Error creating database: " . $conn->error;
	}

	$conn->close();

	$db = new PDO("mysql:host=$servername;dbname=site_incidents", $username, $password);

	$query = file_get_contents($filename);

	$stmt = $db->prepare($query);

	if ($stmt->execute())
	     $user_error = $user_error .". ". $filename . " was a success.";
	else 
	     $user_error = $user_error .". ". $filename . " was a fail.";

	$bddtruc = new PDO('mysql:host=localhost;dbname=site_incidents', 
		'root', $password);

}

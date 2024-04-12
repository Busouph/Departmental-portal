
<?php
	$host = 'localhost';
	$dbname = 'nacoss'; // Make sure this matches your actual database name
	$username = 'root';
	$password = '';
	
	try {
		$pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
		// Set PDO to throw exceptions on errors
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch (PDOException $e) {
		echo "Connection failed: " . $e->getMessage();
		exit();
	}
	
?>



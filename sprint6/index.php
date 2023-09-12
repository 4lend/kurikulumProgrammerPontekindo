
<?php 

// PDO

$dsn = "mysql:host=localhost;dbname=MyMedSos;charset=UTF8";
$user = "4lend";
$password = "nix";

try {
	$pdo = new PDO($dsn, $user, $password);

	if ($pdo) {
		echo "Connected to the $db database successfully!";
	}
} catch (PDOException $e) {
	echo $e->getMessage();
}

?>

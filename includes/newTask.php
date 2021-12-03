<?php 
	$servername = "localhost";
	$username = "root";
	$password = "mysql";
	$dbname = "backend";
	$connecter = "mysql:host=" . $servername . ";dbname=" . $dbname . ";";

	$taak = $_POST["taak"];
	$wie = $_POST["wie"];
	$deadline = $_POST["deadline"];

	$pdo = new PDO($connecter, $username, $password);
	$statement = $pdo->prepare("CREATE IN taak set taak = :taak, wie = :wie, deadline = :deadline");
	
	$statement->bindParam(":taak", $taak);
	$statement->bindParam(":wie", $wie);
	$statement->bindParam(":deadline", $deadline);
	$statement->execute();
?>
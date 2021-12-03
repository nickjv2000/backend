<?php
	$servername = "localhost";
	$username = "root";
	$password = "mysql";
	$dbname = "camping";
	$connecter = "mysql:host=" . $servername . ";dbname=" . $dbname . ";";

	$taak = $_POST["taak"];
	$wie = $_POST["wie"];
	$deadline = $_POST["deadline"];

	$pdo = new PDO($connector, $username, $password);
	$statement = $pdo->prepare("UPDATE taak SET taak = :taak, wie = :wie, deadline = :deadline");

	$statement->bindParam(":taak", $taak);
	$statement->bindParam(":wie", $wie);
	$statement->bindParam(":deadline", $deadline);
	$statement->execute();

?>
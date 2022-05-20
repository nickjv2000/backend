<?php
	GetDatabaseConnection();
	include('../includes/connection.php');
	$id = $_GET['taak_id'];

	$pdo = new PDO($connecter, $username, $password);
	$statement = $pdo->prepare("DELETE FROM tasks WHERE taak_id =".$id);
	$statement->execute();
	header("Location: http://localhost/back-end/backend/php/index.php");
?>

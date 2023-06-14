<?php 
	include('../includes/connection.php');
	GetDatabaseConnection();
	$id = $_POST["id"];
	$taak = $_POST["taak"];
	$naam = $_POST["naam"];
	$deadline = $_POST["deadline"];
	$tijd = $_POST["tijd"];
	$status = $_POST["status"];
	$lijsten_id = $_POST["lijsten_id"];
	newTask($id, $taak, $naam, $deadline, $tijd, $status, $lijsten_id);
	header("Location: http://localhost/backend/php/index.php");
	die();
?>

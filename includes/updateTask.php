<?php
	include('../includes/connection.php');
	GetDatabaseConnection();
	$id = $_POST["id"];
  	$taak = $_POST["taak"];
  	$naam = $_POST["naam"];
  	$deadline = $_POST["deadline"];
  	$tijd = $_POST["tijd"];
  	$status = $_POST["status"];
	updateTask($id, $taak, $naam, $deadline, $tijd, $status);
	header("Location: http://localhost/back-end/backend/php/index.php");
	die();
?>

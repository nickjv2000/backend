<?php
	include('../includes/connection.php');
	GetDatabaseConnection();
	$id = $_POST["lijst_id"];
  	$naam = $_POST["naam_lijst"];

	updateList($id, $naam);
	header("Location: http://localhost/backend/php/index.php");
	die();
?>
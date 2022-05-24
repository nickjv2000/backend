<?php
	include('../includes/connection.php');
	GetDatabaseConnection();
	$id = $_POST['taak_id'];
	echo $id;
	$query = $connec->prepare("DELETE FROM tasks WHERE taak_id = :id");
	$query->bindParam(":id", $id);
	$query->execute();
	header("Location: http://localhost/back-end/backend/php/index.php");
	die();
?>

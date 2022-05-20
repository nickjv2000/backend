<?php 
	include('../includes/connection.php');
	GetDatabaseConnection();
	grabinfo($id, $taak, $naam, $deadline, $tijd, $status);
	newTask($id, $taak, $naam, $deadline, $tijd, $status, $lijsten_id);
	header("Location: http://localhost/back-end/backend/php/index.php");
?>

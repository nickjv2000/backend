<?php
	include('../includes/connection.php');
	GetDatabaseConnection();
	grabInfo($id, $taak, $naam, $deadline, $tijd, $status);
	updateTask($id, $taak, $naam, $deadline, $tijd, $status);
	header("Location: http://localhost/back-end/backend/php/index.php");
?>

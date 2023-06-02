<?php
	include('../includes/connection.php');
	GetDatabaseConnection();	
	$id = $_POST["lijst_id"];
	deleteList($id);
	header("Location: http://localhost/back-end/backend/php/index.php");
	die();
?>

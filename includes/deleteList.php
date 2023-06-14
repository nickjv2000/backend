<?php
	include('../includes/connection.php');
	GetDatabaseConnection();	
	$id = $_POST["lijst_id"];
	deleteList($id);
	header("Location: http://localhost/backend/php/index.php");
	die();
?>

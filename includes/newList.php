<?php 
	include('../includes/connection.php');
	$lijst = $_POST["naam_lijst"];
	newList($lijst);
	header("Location: http://localhost/back-end/backend/php/index.php");
	die();
?>

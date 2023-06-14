<?php 
	include('../includes/connection.php');
	$lijst = $_POST["naam_lijst"];
	newList($lijst);
	header("Location: http://localhost/backend/php/index.php");
	die();
?>

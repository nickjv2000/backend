<?php 
	$servername = "localhost";
	$username = "root";
	$password = "mysql";
	$dbname = "backend";
	$connecter = "mysql:host=" . $servername . ";dbname=" . $dbname . ";";

	$lijst = $_POST["naam_lijst"];

	$pdo = new PDO($connecter, $username, $password);
	$statement = $pdo->prepare("INSERT INTO lijsten (naam_lijst)
		VALUES (:lijst)");
	$statement->bindParam("lijst", $lijst);
	$statement->execute();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<title>Lijst aangemaakt</title>
</head>
<body>

<?php
  include('../includes/connection.php');
  GetDatabaseConnection();
?>

<h1 class="mt-5"><center> Lijst aangemaakt</center></h1>
<div class="container">
<center><a class="btn-lg btn btn-dark text-white align-self-center mt-3" href="../php/index.php?">Hoofdscherm</a></center>
</body>
</html>
<?php
	$servername = "localhost";
	$username = "root";
	$password = "mysql";
	$dbname = "camping";
	$connecter = "mysql:host=" . $servername . ";dbname=" . $dbname . ";";

	$taak = $_POST["taak"];
	$wie = $_POST["wie"];
	$deadline = $_POST["deadline"];

	$pdo = new PDO($connector, $username, $password);
	$statement = $pdo->prepare("UPDATE taak SET taak = :taak, wie = :wie, deadline = :deadline");

	$statement->bindParam(":taak", $taak);
	$statement->bindParam(":wie", $wie);
	$statement->bindParam(":deadline", $deadline);
	$statement->execute();

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<title>Updated Taak</title>
</head>
<body>

<?php
  include('../includes/connection.php');
  GetDatabaseConnection();
?>

<h1 class="mt-5"><center> Taak updated</center></h1>
<div class="container">
<center><a class="btn-lg btn btn-dark text-white align-self-center mt-3" href="../php/main.php?">Hoofdscherm</a></center>
</body>
</html>
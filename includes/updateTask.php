<?php
	$servername = "localhost";
	$username = "root";
	$password = "mysql";
	$dbname = "backend";
	$connecter = "mysql:host=" . $servername . ";dbname=" . $dbname . ";";

	$id = $_GET['taak_id'];
	$taak = $_POST["taak"];
	$naam = $_POST["naam"];
	$deadline = $_POST["deadline"];
	$tijd = $_POST["tijd"];
	$status = $_POST["status"];

	$pdo = new PDO($connector, $username, $password);
	$statement = $pdo->prepare("UPDATE tasks SET taak = :taak, naam = :naam, deadline = :deadline, tijd = :tijd, status = :tijd WHERE 'tasks'.'taak_id' =".$id);
	$statement->bindParam(":taak", $taak);
	$statement->bindParam(":naam", $naam);
	$statement->bindParam(":deadline", $deadline);
	$statement->bindParam(":tijd", $tijd);
	$statement->bindParam(":status", $status);
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
<?php
	$servername = "localhost";
	$username = "root";
	$password = "mysql";
	$dbname = "backend";
	$connecter = "mysql:host=" . $servername . ";dbname=" . $dbname . ";";

	$id = $_GET['taak_id'];

	$pdo = new PDO($connecter, $username, $password);
	$statement = $pdo->prepare("DELETE FROM tasks WHERE taak_id =".$id);
	$statement->execute();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<title>Taak Verwijderd</title>
</head>
<body>

<?php
  include('../includes/connection.php');
  GetDatabaseConnection();
?>

<h1 class="mt-5"><center> Taak Verwijderd</center></h1>
<div class="container">
<center><a class="btn-lg btn btn-dark text-white align-self-center mt-3" href="../php/index.php?">Hoofdscherm <?php echo $id?></a></center>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Create Task</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

<?php 
	include('../includes/connection.php');
	GetDatabaseConnection();
?>

<div class="container">

	<h1 class="mt-5"> Creëer Taak </h2>

<?php 
  include('../includes/header.php');
?>

<div class="align-self-center mt-5">
    <h1>Maak hier een nieuwe taak</h1>
    <form action="../includes/newTask.php" method="post">
        <p><h4>Taak</h4></p>
        <p><input type="text" name="taak" placeholder="Vul taak in" required></p>
        <p><h4>Naam van persoon die de taak uitvoerd</h4></p>
        <p><input type="text" name="naam" placeholder="Vul naam in" size="30" required></p>
        <p><h4>Deadline van de taak</h4></p>
        <p><input type="Text" name="deadline" placeholder="Vul deadline in" required></p>
        <p><h4>Tijd voor de taak</h4></p>
        <p><input type="Text" name="tijd" placeholder="Vul tijd in" required></p>
        <p><h4>Status van de taak</h4></p>
        <p><input type="Text" name="status" value="Nieuw" required readonly></p>
        <p><a href="main.php"><input class="btn btn-dark mt-3" type="submit" value="Creëer"></a></p>
    </form>
</div>
</body>
</html>
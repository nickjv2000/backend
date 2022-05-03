<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<title>Delete Taak</title>
</head>
<body>

<?php
  include('../includes/connection.php');
  GetDatabaseConnection();

  $id = $_GET["id"];
  $getid = GetTaskID($id);
  $taak = $getid["taak"];
  $naam = $getid["naam"];
  $deadline = $getid["deadline"];
?>

<div class="container">

	<h1 class="mt-5"> Delete Taak </h2>

<?php 
  include('../includes/header.php');
?>

<div class="align-self-center mt-5">
    <h1>Bewerk hier <?php echo $getid['taak']; ?></h1>
    <form action="../includes/deleteTask.php" method="post">
        <p><h4>Naam = <?php echo $taak ?></h4></p>
        <p><input type="text" hidden name="taak" placeholder="Taak" required value="<?php echo $taak ?>"></p>
        <p><h4>Naam = <?php echo $naam ?></h4></p>
        <p><input type="text" hidden name="naam" placeholder="Naam" required value="<?php echo $naam ?>"></p>
        <p><h4>Deadline = <?php echo $deadline ?></h4></p>
        <p><input type="text" hidden name="deadline" placeholder="Deadline" required value="<?php echo $deadline ?>"></p>
        <p><input class="btn btn-dark" type="submit" onclick="return confirm('Bevestig verwijderen')" value="Delete"></p>
    </form>
</div>
</body>
</html>
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
  grabInfo($id, $taak, $naam, $deadline, $tijd, $status);
?>

<div class="container">

	<h1 class="mt-5"> Delete Taak </h2>

<?php 
  include('../includes/header.php');
?>

<div class="align-self-center mt-5">
    <h1>Verwijder hier <?php echo $getid['taak']; ?> voor <?php echo $getid['naam'] ?></h1>
    <form action="../includes/deleteTask.php" method="post">
        <p><h4>Id = <?php echo $id ?></h4></p>
        <p><input type="text" hidden name="taak_id" placeholder="ID" required value="<?php echo $id ?> readonly"></p>
        <p><h4>Taak = <?php echo $taak ?></h4></p>
        <p><input type="text" hidden name="taak" placeholder="Taak" required value="<?php echo $taak ?>"></p>
        <p><h4>Naam = <?php echo $naam ?></h4></p>
        <p><input type="text" hidden name="naam" placeholder="Naam" required value="<?php echo $naam ?>"></p>
        <p><h4>Deadline = <?php echo $deadline ?></h4></p>
        <p><input type="text" hidden name="deadline" placeholder="Deadline" required value="<?php echo $deadline ?>"></p>
        <p><h4>Tijd = <?php echo $tijd ?></h4></p>
        <p><input type="text" hidden name="tijd" placeholder="tijd" required value="<?php echo $tijd ?>"></p>
        <p><h4>Status = <?php echo $status ?></h4></p>
        <p><input type="text" hidden name="status" placeholder="status" required value="<?php echo $status ?>"></p>
        <p><input class="btn btn-dark" type="submit" onclick="return confirm('Bevestig verwijderen')" value="Delete"></p>
    </form>
</div>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<title>Update taak</title>
</head>
<body>

<?php
  include('../includes/connection.php');
  GetDatabaseConnection();
?>

<div class="container">

	<h1 class="mt-5"> Update Taak </h2>

<?php 
  include('../includes/header.php');
?>

<div class="align-self-center mt-5">
    <h1>Bewerk hier <?php echo $gettaak['taak']; ?></h1>
    <form action="../includes/updateTask.php" method="post">
        <p class="mt-2"><h4>Taak</h4></p>
        <p><input type="text" name="taak" placeholder="Taak" required value="<?php echo $taak ?>"></p>
        <p><h4>Naam</h4></p>
        <p><input type="text" name="naam" placeholder="Naam" required value="<?php echo $wie ?>"></p>
        <p><h4>Deadline</h4></p>
        <p><input type="text" name="deadline" placeholder="Deadline" required value="<?php echo $deadline ?>"></p>

        <p><input class="btn btn-dark" type="submit" value="Update"></p>
    </form>
</div>
</body>
</html>
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

	<h1 class="mt-5"> Creëer Lijst </h2>

<?php 
  include('../includes/header.php');
?>

<div class="align-self-center mt-5">
    <h1>Maak hier een nieuwe lijst</h1>
    <form action="../includes/newList.php" method="post">
        <p class="mt-2"><h4>Lijst</h4></p>
        <p><input type="text" name="naam_lijst" placeholder="Vul lijst naam in" required></p>
        <p><a href="main.php"><input class="btn btn-dark mt-3" type="submit" value="Creëer"></a></p>
    </form>
</div>
</body>
</html>
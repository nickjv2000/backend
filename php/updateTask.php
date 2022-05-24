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
    $id = $_GET["id"];
    $getid = GetTaskID($id);
    $taak = $getid["taak"];
    $naam = $getid["naam"];
    $deadline = $getid["deadline"];
    $tijd = $getid["tijd"];
    $status = $getid["status"];
?>

<div class="container">

	<h1 class="mt-5"> Update Taak </h2>

<?php 
  include('../includes/header.php');
?>

<div class="align-self-center mt-5">
    <form action="../includes/updateTask.php" method="post">
        <p><input type="text"  name="id" placeholder="Id" hidden required value="<?php echo $id ?>"></p>
        <p class="mt-2"><h4> Taak </h4></p>
        <p><input type="text" name="taak" placeholder="Taak" required value="<?php echo $taak ?>"></p>
        <p><h4> Naam </h4></p>
        <p><input type="text" name="naam" placeholder="Naam" required value="<?php echo $naam ?>"></p>
        <p><h4> Deadline </h4></p>
        <p><input type="text" name="deadline" placeholder="Deadline" required value="<?php echo $deadline ?>"></p>
        <p><h4> Tijd </h4></p>
        <p><input type="text" name="tijd" placeholder="tijd" readonly required value="<?php echo $tijd ?>"></p>
        <p>
            <select id="tijd" name="tijd" required value="<?php echo $tijd ?>">
                <option value="1">1 uur</option>
                <option value="2">2 uur</option>
                <option value="1">3 uur</option>
                <option value="2">4 uur</option>
                <option value="1">5 uur</option>
                <option value="2">6 uur</option>
                <option value="1">7 uur</option>
                <option value="2">8 uur</option>
                <option value="1">9 uur</option>
                <option value="2">10 uur</option>
            </select>   
        </p>

        <p><h4> Status </h4></p>
        <p>
            <select id="status" name="status" value="<?php echo $status ?>">
                <option value="Nieuw">Nieuw</option>
                <option value="Bezig">Bezig</option>
                <option value="Klaar">Klaar</option>
            </select>    
        </p>
        <p><input class="btn btn-dark mt-3" type="submit" onclick="return confirm('Bevestig update')" value="Update"></p>
    </form>
</div>
</body>
</html>
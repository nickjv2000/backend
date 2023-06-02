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
    $id = $_GET["id"];
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
        <p><h4>Tijd in uren voor de taak</h4></p>
        <p><input type="text" name="tijd" placeholder="Vuul de tijd in" required></p>
<!--             <select id="tijd" name="tijd">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="1">3</option>
                <option value="2">4</option>
                <option value="1">5</option>
                <option value="2">6</option>
                <option value="1">7</option>
                <option value="2">8</option>
                <option value="1">9</option>
                <option value="2">10</option>
            </select>   --> 
        </p>
        <p><h4>Status van de taak</h4></p>
        <p>
            <select id="status" name="status" readonly>
                <option value="Nieuw">Nieuw</option>
                <option value="Bezig">Bezig</option>
            </select>    
        </p>
        <p><input type="Text" name="lijsten_id" value="<?php echo $id ?>" required hidden></p>
        <p><a href="main.php"><input class="btn btn-dark mt-3" type="submit" value="Creëer"></a></p>
    </form>
</div>
</body>
</html>
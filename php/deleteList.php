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
  $getid = GetListID($id);
  $naam = $getid["naam_lijst"];
?>

<div class="container">
	<h1 class="mt-5"> Delete Taak </h1>

<?php 
  include('../includes/header.php');
?>
	<div class="align-self-center mt-5">
    <h1>Verwijder hier <?php echo $getid['naam_lijst'] ?></h1>
    	<form action="../includes/deleteList.php" method="post">
        	<p><h4>Id = <?php echo $id ?></h4></p>
        	<p><input type="text" hidden name="lijst_id" placeholder="ID" required value="<?php echo $id ?>" readonly></p>
        	<p><h4>Naam = <?php echo $naam ?></h4></p>
        	<p><input type="text" hidden name="naam" placeholder="Naam" required value="<?php echo $naam ?>"></p>
        	<p><input class="btn btn-dark" type="submit" onclick="return confirm('Bevestig verwijderen, alle taken worden mee verwijderd')" value="Delete"></p>
    	</form>
	</div>
<br>
<h1>Taken die verwijderd worden</h1>
  <?php 
    $query = $connec->prepare("SELECT * FROM tasks where lijsten_id = ".$id);
    $query->execute();
    $taken = $query->fetchall();
    foreach($taken as $count){
  ?>
  <div class="float-left mr-3">
    <div class="mt-3 mr-3">
      <div class="card">
        <div class="card-body">
          <h1><u> Taak </u></h1>
          <h4> Taak: <?php echo $count["taak"]; ?> </h4>
          <h4> Naam: <?php echo $count["naam"]; ?> </h4>
          <h4> Deadline: <?php echo $count["deadline"]; ?> </h4>
          <h4> Tijd: <?php echo $count["tijd"]; ?> </h4>
          <h4> Status: <?php echo $count["status"]; ?> </h4>
        </div>
      </div>
 	  </div>
  </div>
  <?php } ?>
</div>
</body>
</html>
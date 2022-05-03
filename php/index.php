<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title> Back-end </title>
</head>
<body>

<?php
  include('../includes/connection.php');
  GetDatabaseConnection();
  taskData();
?>

<div id="container" class="mb-5 ml-2 w-75 mt-2 justify-content-center mx-auto">

<?php 
  include('../includes/header.php');
?>
<br>
<?php
  $query = $connec->prepare("SELECT * FROM tasks");
  $query->execute();
  $taken = $query->fetchall();
  foreach($taken as $count){
?>
  <div class="mt-5 float-left mr-3 ">
    <div class="card">
        <div class="card-body">
          <h1><u> Taak </u></h1>
          <h4> <?php echo $count["taak"]; ?> </h4>
          <h4> <?php echo $count["naam"]; ?> </h4>
          <h4> <?php echo $count["deadline"]; ?> </h4>
          <a class="btn-lg btn btn-dark text-white align-self-center mt-3" href="updateTask.php?id=<?= $count["taak_id"] ?>">Update taak </a>
          <a class="btn-lg btn btn-dark text-white align-self-center mt-3" href="deleteTask.php?id=<?= $count["taak_id"] ?>">Delete taak </a>
        </div>
    </div>
  </div>
<?php } ?>
</div>
</body>
</html>
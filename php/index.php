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
?>

<div id="container" class="mb-5 ml-2 w-75 mt-2 justify-content-center mx-auto">

<?php 
  include('../includes/header.php');
?>



<div class="mt-5">
<?php 
 $query = $connec->prepare("SELECT * FROM lijsten");
 $query->execute();
 $taking = $query->fetchall();
 foreach($taking as $counting){
?>
<div class="float-left mr-3">
  <div class="card">
    <div class="card-body">
      <h1> <?php echo $counting["naam_lijst"]; ?> </h1> 

      <?php 
      if($_POST['sort_task_tijd'] == true) {
        "SELECT * FROM tasks ORDER BY `tasks`.`tijd` ASC";
      }

      if($_POST['sort_task_status'] == true) {
        "SELECT * FROM tasks ORDER BY `tasks`.`status` ASC";
      }
      ?>

      <form name="Task properties" class="mt-3 mb-2" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <button type="submit" name="sort_task_tijd" class="button btn-lg btn btn-light" value="1"> Sorteer op tijd </button>
        <button type="submit" name="sort_task_status" class="button btn-lg btn btn-light" value="1"> Sorteer op status </button>
      </form>
      <a class="btn-lg btn btn-dark text-white align-self-center mb-3" href="createTask.php?id=<?= $counting["lijst_id"] ?>">Nieuwe taak </a>
      <br>
      <?php 
        $query = $connec->prepare("SELECT * FROM tasks where lijsten_id = ".$counting["lijst_id"]);
        $query->execute();
        $taken = $query->fetchall();
        foreach($taken as $count){
      ?>
      <div class="mt-3 mr-3">
        <div class="card">
          <div class="card-body">
            <h1><u> Taak </u></h1>
            <h4> Taak: <?php echo $count["taak"]; ?> </h4>
            <h4> Naam: <?php echo $count["naam"]; ?> </h4>
            <h4> Deadline: <?php echo $count["deadline"]; ?> </h4>
            <h4> Tijd: <?php echo $count["tijd"]; ?> </h4>
            <h4> Status: <?php echo $count["status"]; ?> </h4>
            <a class="btn-lg btn btn-dark text-white align-self-center mt-3" href="updateTask.php?id=<?= $count["taak_id"] ?>">Update taak </a>
            <a class="btn-lg btn btn-dark text-white align-self-center mt-3" href="deleteTask.php?id=<?= $count["taak_id"] ?>">Delete taak </a>
          </div>
        </div>
      </div>
      <?php } ?>
    </div>
  </div>
</div>
<?php } ?>
</body>
</html>
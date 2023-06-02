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
            <form name="Task properties" class="mt-3 mb-2" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">   
              <button type="submit" name="sort_task_tijd" class="button btn-lg btn btn-light" value="1"> Sorteer op tijd </button>
              <button type="submit" name="sort_task_status" class="button btn-lg btn btn-light" value="1"> Sorteer op status </button> 
            </form>
          <a class="btn-lg btn btn-dark text-white align-self-center mb-3" href="createTask.php?id=<?= $counting["lijst_id"] ?>">Nieuwe taak </a>
          <a class="btn-lg btn btn-dark text-white align-self-center mb-3" href="deleteList.php?id=<?= $counting["lijst_id"] ?>">Delete lijst </a>
          <a class="btn-lg btn btn-dark text-white align-self-center mb-3" href="updateList.php?id=<?= $counting["lijst_id"] ?>">Update lijst </a>
    <br>
    <?php
      include('../includes/indexContent.php');
    ?>
        </div>
      </div>
    </div>
  </div>
</div>
<?php } ?>
</body>
</html>
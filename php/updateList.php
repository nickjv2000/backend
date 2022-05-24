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
    $getid = GetListID($id);
    $naam = $getid["naam_lijst"];

?>

<div class="container">

	<h1 class="mt-5"> Update Lijst Naam </h2>

<?php 
  include('../includes/header.php');
?>

<div class="align-self-center mt-5">
    <form action="../includes/updateList.php" method="post">
        <p><input type="text"  name="lijst_id" placeholder="Id" hidden required value="<?php echo $id ?>"></p>
        <p><h4> Naam </h4></p>
        <p><input type="text" name="naam_lijst" placeholder="Naam" required value="<?php echo $naam ?>"></p>
        <p><input class="btn btn-dark mt-3" type="submit" onclick="return confirm('Bevestig update')" value="Update"></p>
    </form>
</div>
</body>
</html>
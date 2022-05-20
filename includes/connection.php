<?php 
$connec = GetDatabaseConnection();

/** Maak verbinding met de database door middel van PDO
 * Geef een message als de connectie faalt
 * verbind de connectie aan $connec **/
function GetDatabaseConnection() {
	$servername = "localhost";
	$username = "root";
	$password = "mysql";
	$dbname = "backend";

	try {
 		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
 		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 		return $conn;
 		echo "success";
	}
	catch(PDOException $e){
 		echo "Connection Failed: " . $e->getMessage();
	}
}

/** Select alle data van de database 
 * waar het id daat meegegeven word gelijk is aan taak_id in de database **/
function GetTaskId($id){
	$connec = GetDatabaseConnection();
    $query = $connec->prepare("SELECT * FROM tasks WHERE taak_id = :id");
    $query->bindParam(":id", $id);
    $query->execute();
    return $query->fetch();
}

/** Pak alle data in de database van tasks **/
function taskData() {
	$connec = GetDatabaseConnection();
	$query = $connec->prepare("SELECT * FROM tasks");
	$query->execute();
	$taken = $query->fetchall();
}

/** Maak een nieuwe lijst aan **/
function newList($lijst){
	$connec = GetDatabaseConnection();
	$query = $connec->prepare("INSERT INTO lijsten (naam_lijst)
		VALUES(:lijst)");
	$query->bindParam("lijst", $lijst);
	$query->execute();
}

/** Pak alle informatie die word meegegeven
 * Update alle informatie doormiddel van parameters **/
function updateTask($id, $taak, $naam, $deadline, $tijd, $status){
	$connec = GetDatabaseConnection();
	$query = $connec->prepare("UPDATE tasks SET taak = :taak, naam = :naam, deadline = :deadline, tijd = :tijd, status = :tijd WHERE 'tasks'.'taak_id' =".$id);
	$query->bindParam(":taak", $taak);
	$query->bindParam(":naam", $naam);
	$query->bindParam(":deadline", $deadline);
	$query->bindParam(":tijd", $tijd);
	$query->bindParam(":status", $status);
	$query->execute();

}

/** Pak alle infor die word ingevuld 
 * Maak een taak aan bij de ingevoerde lijst door middel van parameters **/
function newTask($id, $taak, $naam, $deadline, $tijd, $status, $lijsten_id){
	$connec = GetDatabaseConnection();
	$query = $connec->prepare("INSERT INTO tasks (taak, naam, deadline, tijd, status, lijsten_id)
		VALUES (:taak, :naam, :deadline, :tijd, :status, :lijsten_id)");
	$query->bindParam(":taak", $taak);
	$query->bindParam(":naam", $naam);
	$query->bindParam(":deadline", $deadline);
	$query->bindParam(":tijd", $tijd);
	$query->bindParam(":status", $status);
	$query->bindParam(":lijsten_id", $lijsten_id);
	$query->execute();
}

/** Pak het id
 * connect met de database en pak alle informatie die hoort bij het id
 * Om in de code te gebruiken**/
function grabInfo($id, $taak, $naam, $deadline, $tijd, $status){
	$id = $_GET["id"];
  	$getid = GetTaskID($id);
  	$taak = $getid["taak"];
  	$naam = $getid["naam"];
  	$deadline = $getid["deadline"];
  	$tijd = $getid["tijd"];
  	$status = $getid["status"];
}
?>
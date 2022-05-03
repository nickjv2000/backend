<?php 
$connec = GetDatabaseConnection();

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

function GetTaskId($id){
	$connec = GetDatabaseConnection();
    $query = $connec->prepare("SELECT * FROM tasks WHERE taak_id = :id");
    $query->bindParam(":id", $id);
    $query->execute();
    return $query->fetch();
}

function taskData() {
	$connec = GetDatabaseConnection();
	$query = $connec->prepare("SELECT * FROM tasks");
	$query->execute();
	$taken = $query->fetchall();
}

function deleteTaak($id){
	$connec = GetDatabaseConnection();
	$query = $connec->prepare("DELETE FROM tasks WHERE id = :id");
	$query->bindParam(":id", $id);
	$query->execute();
}
?>
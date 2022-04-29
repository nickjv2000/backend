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

function taskData() {
	$connec = GetDatabaseConnection();
	$query = $connec->prepare("SELECT * FROM tasks");
	$query->execute();
	$taken = $query->fetchall();
}

function deleteTask() {
	$connec = GetDatabaseConnection();
	$query = $connec->prepare("DELETE FROM tasks WHERE taak = :taak");
	$query->bindParam(":taak", $taak);
	$query->execute();
}
?>
<?php
//Initialization of some variables for maintaining database data
$user="root";
$pass="";
$server="localhost";
$dbname='student_system';

try {
	//Creating a PDO to connect with database
	$pdo =new PDO("mysql:host=$server;dbname=$dbname",$user,$pass);
	$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
	echo "error: " . $e->getMessage();
}

?>
<?php

// $dbServerName = "localhost";
// $dbUsername = "root";
// $dbPassword = "";
// $dbName = "ecs417";

$dbhost = getenv("MYSQL_SERVICE_HOST"); 
$dbport = getenv("MYSQL_SERVICE_PORT"); 
$dbuser = getenv("DATABASE_USER"); 
$dbpwd = getenv("DATABASE_PASSWORD"); 
$dbname = getenv("DATABASE_NAME"); 

// Creates connection
$conn = mysqli_connect($dbServerName, $dbUsername, $dbPassword, $dbName);

// Checks connection
if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);}
?>

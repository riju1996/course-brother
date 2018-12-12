<?php
$servername = "localhost";
$username = "root";
$password = "";
$mysql_database = "nextgenshiksha";

// Create connection
$conn = new mysqli($servername, $username, $password, $mysql_database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>
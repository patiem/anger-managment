<?php
$servername = "localhost";
$username = "mikulska";
$password = "unkle123";
$dbname = "mikulska";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>
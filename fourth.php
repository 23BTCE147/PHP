<?php

$servername = "localhost";
$username = "shushanth";
$password = "shu";
$dbname = "products";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully!";
$conn->close();
?>
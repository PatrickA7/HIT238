<?php
$servername = "localhost";
$username = "palegria_basicUser";
$password = "Sandy28";
$dbName = "palegria_TeamPatrick";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>

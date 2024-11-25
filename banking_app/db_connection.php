<?php
$servername = "127.0.0.1";  // Use 127.0.0.1 instead of localhost
$username = "root";
$password = "";  // No password
$dbname = "banking_app";
$port = 3307;    // Specify the custom MySQL port

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

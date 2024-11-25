<?php
$servername = "127.0.0.1";  
$username = "root";
$password = "";  
$database = "employeedb";  
$port = 3307;   

try {
    $conn = new PDO("mysql:host=$servername;port=$port;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";  
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>

<?php
include 'db_connection.php';

$sql = "SELECT * FROM customers";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"]. " - Name: " . $row["name"]. " - Email: " . $row["email"]. " - Phone: " . $row["phone"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>

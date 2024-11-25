<?php
include 'db_connection.php';

$sql = "SELECT accounts.account_number, accounts.account_type, accounts.balance, customers.name 
        FROM accounts 
        INNER JOIN customers ON accounts.customer_id = customers.id";  // Corrected join condition
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "Account No: " . $row["account_number"] . " - Type: " . $row["account_type"] . " - Balance: " . $row["balance"] . " - Customer: " . $row["name"] . "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>


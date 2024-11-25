<?php
include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the form fields are set
    if (isset($_POST["atype"]) && isset($_POST["balance"]) && isset($_POST["cid"])) {
        $atype = $_POST["atype"];
        $balance = $_POST["balance"];
        $customer_id = $_POST["cid"];  // Assuming 'cid' is the customer ID input

        // Ensure customer_id exists in customers table before inserting
        $checkCustomerSql = "SELECT id FROM customers WHERE id = '$customer_id'";
        $customerResult = $conn->query($checkCustomerSql);

        if ($customerResult->num_rows > 0) {
            // Use customer_id to insert the account
            $sql = "INSERT INTO accounts (account_type, balance, customer_id) VALUES ('$atype', '$balance', '$customer_id')";

            if ($conn->query($sql) === TRUE) {
                echo "New account created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        } else {
            echo "Error: Customer ID does not exist.";
        }
    } else {
        echo "Error: Please fill in all fields.";
    }
    $conn->close();
}
?>
<form method="post">
    Account Number: <input type="text" name="cid"><br>
    Account Type: <select name="atype">
                    <option value="S">Savings</option>
                    <option value="C">Current</option>
                  </select><br>
    Balance: <input type="text" name="balance"><br>
    Customer ID: <input type="text" name="cid"><br>  <!-- Make sure this matches your input field -->
    <input type="submit" value="Submit">
</form>

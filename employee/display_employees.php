<?php
include 'db.php';  // Include the database connection

// Fetch all employees
$sql = "SELECT * FROM EMPDETAILS";
$stmt = $conn->prepare($sql);
$stmt->execute();

$employees = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo "<h2>Employee Details</h2>";
echo "<table border='1'>";
echo "<tr><th>EmpID</th><th>Name</th><th>Designation</th><th>Department</th><th>DOJ</th><th>Salary</th></tr>";

foreach ($employees as $employee) {
    echo "<tr>
            <td>{$employee['EMPID']}</td>
            <td>{$employee['ENAME']}</td>
            <td>{$employee['DESIG']}</td>
            <td>{$employee['DEPT']}</td>
            <td>{$employee['DOJ']}</td>
            <td>{$employee['SALARY']}</td>
          </tr>";
}

echo "</table>";
?>

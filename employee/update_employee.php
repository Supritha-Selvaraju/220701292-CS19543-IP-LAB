<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $empid = $_POST['empid'];
    $ename = $_POST['ename'];
    $desig = $_POST['desig'];
    $dept = $_POST['dept'];
    $doj = $_POST['doj'];
    $salary = $_POST['salary'];

    // Update query
    $sql = "UPDATE EMPDETAILS SET ENAME = :ename, DESIG = :desig, DEPT = :dept, DOJ = :doj, SALARY = :salary WHERE EMPID = :empid";
    
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':empid', $empid);
    $stmt->bindParam(':ename', $ename);
    $stmt->bindParam(':desig', $desig);
    $stmt->bindParam(':dept', $dept);
    $stmt->bindParam(':doj', $doj);
    $stmt->bindParam(':salary', $salary);

    if ($stmt->execute()) {
        echo "Employee updated successfully!";
    } else {
        echo "Failed to update employee!";
    }
}
?>

<form method="POST" action="update_employee.php">
    EmpID: <input type="text" name="empid" required><br>
    Name: <input type="text" name="ename" required><br>
    Designation: <input type="text" name="desig" required><br>
    Department: <input type="text" name="dept" required><br>
    Date of Joining (DOJ): <input type="date" name="doj" required><br>
    Salary: <input type="number" name="salary" step="0.01" required><br>
    <input type="submit" value="Update Employee">
</form>

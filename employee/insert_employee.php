<?php
include 'db.php';  // Include the database connection

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $ename = $_POST['ename'];
    $desig = $_POST['desig'];
    $dept = $_POST['dept'];
    $doj = $_POST['doj'];
    $salary = $_POST['salary'];

    // Insert query
    $sql = "INSERT INTO EMPDETAILS (ENAME, DESIG, DEPT, DOJ, SALARY) 
            VALUES (:ename, :desig, :dept, :doj, :salary)";
    
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':ename', $ename);
    $stmt->bindParam(':desig', $desig);
    $stmt->bindParam(':dept', $dept);
    $stmt->bindParam(':doj', $doj);
    $stmt->bindParam(':salary', $salary);

    if ($stmt->execute()) {
        echo "Employee added successfully!";
    } else {
        echo "Failed to add employee!";
    }
}
?>

<form method="POST" action="insert_employee.php">
    Name: <input type="text" name="ename" required><br>
    Designation: <input type="text" name="desig" required><br>
    Department: <input type="text" name="dept" required><br>
    Date of Joining (DOJ): <input type="date" name="doj" required><br>
    Salary: <input type="number" name="salary" step="0.01" required><br>
    <input type="submit" value="Add Employee">
</form>

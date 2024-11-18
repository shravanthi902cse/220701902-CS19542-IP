<?php
include 'config/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ename = $_POST['ename'];
    $desig = $_POST['desig'];
    $dept = $_POST['dept'];
    $doj = $_POST['doj'];
    $salary = $_POST['salary'];

    $sql = "INSERT INTO EMPDETAILS (ENAME, DESIG, DEPT, DOJ, SALARY) 
            VALUES ('$ename', '$desig', '$dept', '$doj', '$salary')";

    if ($conn->query($sql) === TRUE) {
        echo "New employee added successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Employee</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Add Employee Details</h2>
    <form action="insert_employee.php" method="POST">
        <label for="ename">Employee Name:</label>
        <input type="text" id="ename" name="ename" required><br><br>
        
        <label for="desig">Designation:</label>
        <input type="text" id="desig" name="desig" required><br><br>
        
        <label for="dept">Department:</label>
        <input type="text" id="dept" name="dept" required><br><br>
        
        <label for="doj">Date of Joining:</label>
        <input type="date" id="doj" name="doj" required><br><br>
        
        <label for="salary">Salary:</label>
        <input type="number" id="salary" name="salary" step="0.01" required><br><br>
        
        <button type="submit">Add Employee</button>
    </form>
    <a href="index.php">Back to Home</a>
</body>
</html>

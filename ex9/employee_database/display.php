<?php
include 'config/db.php';

$sql = "SELECT * FROM EMPDETAILS";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Employee Details</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Employee Details</h2>
    <table>
        <tr>
            <th>EmpID</th>
            <th>Name</th>
            <th>Designation</th>
            <th>Department</th>
            <th>Date of Joining</th>
            <th>Salary</th>
        </tr>

        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row["EMPID"] . "</td>
                        <td>" . $row["ENAME"] . "</td>
                        <td>" . $row["DESIG"] . "</td>
                        <td>" . $row["DEPT"] . "</td>
                        <td>" . $row["DOJ"] . "</td>
                        <td>" . $row["SALARY"] . "</td>
                    </tr>";
            }
        } else {
            echo "<tr><td colspan='6'>No employee records found</td></tr>";
        }
        $conn->close();
        ?>
    </table>
    <a href="index.php">Back to Home</a>
</body>
</html>

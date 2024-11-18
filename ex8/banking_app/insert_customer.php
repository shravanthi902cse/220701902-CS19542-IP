<?php
include 'config/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cname = $_POST['cname'];

    $sql = "INSERT INTO CUSTOMER (CNAME) VALUES ('$cname')";

    if ($conn->query($sql) === TRUE) {
        echo "New customer added successfully!";
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
    <title>Banking Application</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Banking Application</h2>
    <p>New customer added successfully!</p>
    <a href="index.php">Back to Home</a>
</body>
</html>

<?php
include 'config/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cid = $_POST['cid'];
    $atype = strtoupper($_POST['atype']);
    $balance = $_POST['balance'];

    // Validate ATYPE
    if ($atype != 'S' && $atype != 'C') {
        die("Invalid account type. Use 'S' for Savings or 'C' for Current.");
    }

    $sql = "INSERT INTO ACCOUNT (ATYPE, BALANCE, CID) VALUES ('$atype', $balance, $cid)";

    if ($conn->query($sql) === TRUE) {
        echo "New account created successfully!";
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
    <p>New account created successfully!</p>
    <a href="index.php">Back to Home</a>
</body>
</html>

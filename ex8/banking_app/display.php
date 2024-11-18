<?php
include 'config/db.php';

echo "<h2>Customer Information</h2>";
$result = $conn->query("SELECT * FROM CUSTOMER");
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "CID: " . $row['CID'] . " | Name: " . $row['CNAME'] . "<br>";
    }
} else {
    echo "No customers found.";
}

echo "<h2>Account Information</h2>";
$result = $conn->query("SELECT ACCOUNT.ANO, ACCOUNT.ATYPE, ACCOUNT.BALANCE, CUSTOMER.CNAME FROM ACCOUNT JOIN CUSTOMER ON ACCOUNT.CID = CUSTOMER.CID");
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "ANO: " . $row['ANO'] . " | Type: " . $row['ATYPE'] . " | Balance: " . $row['BALANCE'] . " | Customer: " . $row['CNAME'] . "<br>";
    }
} else {
    echo "No accounts found.";
}
$conn->close();
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
    <a href="index.php">Back to Home</a>
</body>
</html>

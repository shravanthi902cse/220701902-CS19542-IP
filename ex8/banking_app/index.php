<?php include 'config/db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Banking Application</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Banking Application</h2>

    <form action="insert_customer.php" method="POST">
        <h3>Insert Customer Information</h3>
        <label for="cname">Customer Name:</label>
        <input type="text" id="cname" name="cname" required>
        <button type="submit">Add Customer</button>
    </form>

    <form action="insert_account.php" method="POST">
        <h3>Insert Account Information</h3>
        <label for="cid">Customer ID:</label>
        <input type="number" id="cid" name="cid" required>
        <label for="atype">Account Type (S/C):</label>
        <input type="text" id="atype" name="atype" maxlength="1" required>
        <label for="balance">Initial Balance:</label>
        <input type="number" step="0.01" id="balance" name="balance" required>
        <button type="submit">Add Account</button>
    </form>

    <a href="display.php">View Customer and Account Information</a>
</body>
</html>

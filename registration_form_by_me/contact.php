<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <h1>Contact Us</h1>
        <p>If you need assistance, please email us at <a href="mailto:support@example.com">support@example.com</a>.</p>
        <a href="dashboard.php" class="btn btn-primary">Back to Dashboard</a>
    </div>
</body>
</html>

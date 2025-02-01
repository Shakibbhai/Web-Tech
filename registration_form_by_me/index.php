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
    <title>User Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container mt-4">
        <?php
        echo "<div class='alert alert-success'>You logged in successfully.</div>";
        ?>
        <h1>Welcome to the Dashboard</h1>
        <p>Hello, <strong><?php echo $_SESSION["user"]; ?></strong>! Use the links below to navigate:</p>
        
        <!-- Navigation Links -->
        <div class="list-group">
            <a href="profile.php" class="list-group-item list-group-item-action">Profile</a>
            <a href="settings.php" class="list-group-item list-group-item-action">Settings</a>
            <a href="message.php" class="list-group-item list-group-item-action">Messages</a>
            <a href="help.php" class="list-group-item list-group-item-action">Help Center</a>
        </div>
        
        <!-- Logout Button -->
        <div class="mt-3">
            <a href="logout.php" class="btn btn-warning">Logout</a>
        </div>
    </div>
</body>
</html>

<?php
// Start session and check if user is logged in
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: login.php");
    exit();
}



// Database connection
$host = "localhost"; // Update with your database host
$username = "root";  // Update with your database username
$password = "";      // Update with your database password
$dbname = "test1"; // Update with your database name

$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch messages from the database
$sql = "SELECT id,full_name, email FROM users";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messages</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-4">
        <h1>Messages</h1>
        <div class="list-group">
            <?php
            if ($result->num_rows > 0) {
                // Output each message
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='list-group-item'>";
                    echo "<p class='mb-1'>id: " . htmlspecialchars($row['id']) . "</p>";
                    echo "<h5 class='mb-1'>" . htmlspecialchars($row['full_name']) . "</h5>";
                    echo "<p class='mb-1'>Email: " . htmlspecialchars($row['email']) . "</p>";

                    echo "</div>";
                }
            } else {
                echo "<div class='alert alert-info'>No messages found.</div>";
            }
            ?>
        </div>
        <div class="mt-3">
            <a href="index.php" class="btn btn-primary">Back to Dashboard</a>
        </div>
    </div>
</body>
</html>
<?php
// Close the database connection
$conn->close();
?>

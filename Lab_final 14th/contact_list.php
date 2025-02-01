<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: admin.html');
    exit;
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lab_final";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, name, email, subject, message FROM contacts";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Contact List</title>
    <link rel="stylesheet" type="text/css" href="1452.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>Contact List</h1>
            <nav>
                <ul>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </nav>
        </header>
        <main>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Subject</th>
                    <th>Message</th>
                </tr>
                <?php
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>
                            <td>".$row['id']."</td>
                            <td>".$row['name']."</td>
                            <td>".$row['email']."</td>
                            <td>".$row['subject']."</td>
                            <td>".$row['message']."</td>
                        </tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>No records found</td></tr>";
                }
                $conn->close();
                ?>
            </table>
        </main>
        <footer>
            <p>&copy;  2025, Nazmus Shakib</p>
        </footer>
    </div>
</body>
</html>

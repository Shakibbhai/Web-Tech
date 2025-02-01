<?php
session_start();

$servername = "localhost";
$db_username = "root";
$db_password = "";
$dbname = "lab_final";

// Create connection
$conn = new mysqli($servername, $db_username, $db_password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$username = $_POST['username'];
$password = md5($_POST['password']); // Hash the password

$sql = "SELECT * FROM admins WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $_SESSION['loggedin'] = true;
    header('Location: contact_list.php');
} else {
    echo "Invalid login credentials";
}

$conn->close();
?>

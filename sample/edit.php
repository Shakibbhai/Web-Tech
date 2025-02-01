<?php
require("db_config.php");
include("header.php");
include("menu.php");
?>
<div id="main_content">
<br><br><br>
<?php
// Create connection
$conn = new mysqli($servername, $username, $password, $dbName);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// SQL query to select the user by ID
$sql = "SELECT * FROM `user` WHERE id = " . $_GET["id"];

if ($result = $conn->query($sql)) {
  // Query executed successfully
}

if ($result->num_rows > 0) {
  // Output data of each row
  while ($row = $result->fetch_assoc()) {
    echo '<form action="editaction.php" method="post">';
    echo 'First Name: <input type="text" name="fname" value="' . $row["firstname"] . '"/> <br>';
    echo 'Last Name: <input type="text" name="lname" value="' . $row["lastname"] . '"/><br>';
    echo 'Email: <input type="email" name="email" value="' . $row["email"] . '"/><br>';
    echo 'Phone Number: <input type="text" name="Phone Number" value="' . $row["PhoneNumber"] . '"/><br>'; // Added phone number input
    echo '<input type="hidden" name="id" value="' . $row["id"] . '"/>';
    echo '<input type="submit" name="submit" value="Submit"/><br>';
    echo '</form>';
  }
} else {
  echo "No data found.";
}

$conn->close();
?>
</div>
<?php
include("footer.php");
?>

<?php
require("db_config.php");
include("header.php");
include("menu.php");
?>
<div id="main_content">

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
  // Check if the query returns any results
  if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
      echo "ID: " . $row["id"] . " - Name: " . $row["firstname"] . " " . $row["lastname"] . " - Email: " . $row["email"] . " - Phone: " . $row["PhoneNumber"] . "<br>"; // Added phone
    }
  } else {
    echo "0 results";
  }
} else {
  echo "Error executing query: " . $conn->error;
}

// Close the connection
$conn->close();
?>

</div>
<?php
include("footer.php");
?>

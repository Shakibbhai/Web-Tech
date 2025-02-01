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

// SQL query to select all fields from the `user` table
$sql = "SELECT * FROM `user`";

if ($result = $conn->query($sql)) {
  // Check if there are any rows returned
  if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
      echo "ID: " . $row["id"] . " - Name: " . $row["firstname"] . " " . $row["lastname"] . " - Email: " . $row["email"] . " - Phone: " . $row["PhoneNumber"] . " <a style='color:white;' href='details.php?id=" . $row["id"] . "'>detail</a> | <a style='color:white;' href='delete.php?id=" . $row["id"] . "'>delete</a> | <a style='color:white;' href='edit.php?id=" . $row["id"] . "'>edit</a><br>";
    }
  } else {
    echo "0 results";
  }
  // Free result set
  $result->free();
} else {
  echo "Error executing query: " . $conn->error;
}

// Close connection
$conn->close();
?>

</div>
<?php
include("footer.php");
?>

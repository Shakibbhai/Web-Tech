<?php
require("db_config.php");
include("header.php");
include("menu.php");
?>
<div id="main_content">

<?php
echo $_POST["fname"] . "<br>";
echo $_POST["lname"] . "<br>";
echo $_REQUEST["email"] . "<br>";
echo $_POST["PhoneNumber"] . "<br>"; // Display the phone number
echo $_POST["id"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbName);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

// Update query to include phone
$sql = "UPDATE `user` SET `firstname` = '" . $_POST["fname"] . "', `lastname` = '" . $_POST["lname"] . "', `email` = '" . $_POST["email"] . "', `phone` = '" . $_POST["PhoneNumber"] . "' WHERE id=" . $_POST["id"];

echo $sql;

if ($conn->query($sql)) {
    echo "Data updated successfully!!!";
} else {
    echo 'There was an error, please try again later!!!';
}
$conn->close();
?>

</div>
<?php
include("footer.php");
?>

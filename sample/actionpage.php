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
echo $_POST["PhoneNumber"] . "<br>";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbName);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$sql = "INSERT INTO `user`(`firstname`, `lastname`, `email`,`PhoneNumber`) VALUES ('" . $_POST["fname"] . "','" . $_POST["lname"] . "','" . $_POST["email"] . "','" . $_POST["PhoneNumber"]. "')";

echo $sql;

if ($conn->query($sql)) {
    echo "row inserted successfully!!!";
}
else
{

    echo 'there was an error, please try again later!!!';
}
$conn->close();
?>


</div>
<?php
include("footer.php");
?>
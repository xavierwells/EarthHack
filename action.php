<!DOCTYPE html>
<html>
<body>
<?php
$host = "localhost";
    $dbusername = "root";
    $dbpassword = "root";
    $dbname = "xpire_foods";
    // Create connection
    $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
	
	if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}
  //echo "Connected successfully";

 if (isset($_POST['quantity'])) {
$quantity = $_POST['quantity'];
 }
 
 if (isset($_POST['description'])) {
$desc = $_POST['description'];
 }
 
 if (isset($_POST['expires'])) {
$exp = $_POST['expires'];
 }

$sql = "INSERT INTO food (expiry, name, quantity)
values ('$exp','$desc','$quantity')";
if ($conn->query($sql)){
//echo "New record is inserted sucessfully";
}
header('Location: index.php#item1');
?>
</body>
</html>
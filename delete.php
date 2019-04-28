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

 if (isset($_POST['Identity'])) {
$Identity = $_POST['Identity'];
 }

$sql = "DELETE FROM food WHERE ID='$Identity'"; 
if(mysqli_query($conn, $sql)){ 
    echo "Record was deleted successfully."; 
}  
else{ 
    echo "ERROR: Could not able to execute $sql. "  
                                   . mysqli_error($conn); 
} 
mysqli_close($conn);  
header('Location: index.php#item2');
?>
</body>
</html>
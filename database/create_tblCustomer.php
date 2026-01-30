<?php
require_once "config.php";

$sql = "CREATE TABLE Customer (
    customerID INT AUTO_INCREMENT PRIMARY KEY,
    
)";

if (mysqli_query($conn, $sql)) {echo "Succesfully created staff table";}

?>
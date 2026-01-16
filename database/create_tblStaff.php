<?php
require_once "config.php";

$sql = "CREATE TABLE Staff (
    staffID INT AUTO_INCREMENT PRIMARY KEY,
    staffEmail varchar(255),
    staffFirstName varchar(255),
    staffLastName varchar(255)
)";

if (mysqli_query($conn, $sql)) {echo "Succesfully created staff table";}

?>
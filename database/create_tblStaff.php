<?php
require_once "config.php";

$sql = "CREATE TABLE Staff (
    staffID INT AUTO_INCREMENT PRIMARY KEY,
    staffFirstName varchar(255),
    staffLastName varchar(255),
    staffEmail varchar(255),
    staffPassword varchar(255)
)";

if (mysqli_query($conn, $sql)) {echo "Succesfully created staff table";}

?>
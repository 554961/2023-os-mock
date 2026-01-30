<?php
require_once "config.php";

$sql = "CREATE TABLE Customer (
    customerID INT AUTO_INCREMENT PRIMARY KEY,
    customerEmail varchar(255),
    customerPassword varchar(255),
    customerFirstName varchar(255),
    customerLastName varchar(255),
    accountCreationDate DATE            -- use CURRENT_DATE();
)";

if (mysqli_query($conn, $sql)) {echo "Succesfully created customer table";}

?>
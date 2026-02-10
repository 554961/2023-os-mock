<?php
require_once "config.php";
// create sql query and check for errors

$sql = "CREATE TABLE Customer (
    customerID INT AUTO_INCREMENT PRIMARY KEY,
    customerEmail varchar(255),
    customerPassword varchar(255),
    customerFirstName varchar(255),
    customerLastName varchar(255),
    customerAge INT,
    accountCreationDate DATE DEFAULT CURRENT_DATE()
)";

if (mysqli_query($conn, $sql)) {echo "Succesfully created customer table";}

?>
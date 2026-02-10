<?php
require_once "config.php";

// create sql query and check for errors
$sql = "CREATE TABLE Booking (
    bookingID INT AUTO_INCREMENT PRIMARY KEY,
    bookingDescription varchar(255),
    bookingDate DATE,
    customerID INT,
    CONSTRAINT FK_booking_customerID FOREIGN KEY (customerID) 
            REFERENCES customer(customerID)         
            ON DELETE CASCADE
            ON UPDATE CASCADE
)";

if (mysqli_query($conn, $sql)) {echo "Succesfully created booking table";}

?>
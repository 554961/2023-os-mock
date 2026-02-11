<?php
require_once "config.php";

// create sql query and check for errors
$sql = "CREATE TABLE Ticket (
    ticketID INT AUTO_INCREMENT PRIMARY KEY,
    ticketDescription varchar(255),
    ticketDate DATE DEFAULT CURRENT_DATE,
    customerID INT, 
    CONSTRAINT FK_ticket_customerID FOREIGN KEY (customerID) 
            REFERENCES customer(customerID)         
            ON DELETE CASCADE
            ON UPDATE CASCADE
)";

if (mysqli_query($conn, $sql)) {echo "Succesfully created ticket table";}

?>
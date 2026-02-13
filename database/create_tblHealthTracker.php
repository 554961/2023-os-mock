<?php
require_once "config.php";

// create sql query and check for errors
$sql = "CREATE TABLE HealthTracker (
    trackerID INT AUTO_INCREMENT PRIMARY KEY,
    trackerDate DATE DEFAULT CURRENT_DATE,
    trackerWeight INT,
    trackerTargetWeight INT,
    trackerBodyFatPercentage FLOAT,
    trackerTargetFatPercentage FLOAT,
    trackerPushupCount INT,
    trackerTargetPushupCount INT,
    trackerDiet varchar(255),
    customerID INT,
    CONSTRAINT FK_tracker_customerID FOREIGN KEY (customerID) 
            REFERENCES customer(customerID)         
            ON DELETE CASCADE
            ON UPDATE CASCADE
)";

if (mysqli_query($conn, $sql)) {echo "Succesfully created HealthTracker table";}

?>
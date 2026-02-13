<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/2023-os-mock/database/config.php";

session_start();


//check if the user is a staff member. if they are, then send them back
//because staff members cant be on this page
if (isset($_SESSION["isStaff"]) && $_SESSION["isStaff"])
    {
        header("location:../../index.php?error=customerOnly");
    }

// if the customer is logged in, then they can access the page and start processing 

if (isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"] == true)
    {
        
    }
else
    {
        header("location:../../login/index.php?error=notLoggedIn");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Dashboard</title>

</head>
<body>
    <!-- include navbar -->
    <?php require_once $_SERVER["DOCUMENT_ROOT"] . "/2023-os-mock/templates/navbar.php" ?>
    
    <!-- present to the user their personal bookings -->
        <h1 class="alert alert-info">Your Bookings</h1>
        <table class="table">
            <tr>
                <th>bookingID</th>
                <th>bookingDescription</th>
                <th>bookingDate</th>
                <th>customerID</th>
            </tr>
            
            <?php
                $sql = "SELECT * FROM booking WHERE customerID = " . $_SESSION["customerID"];
                $result = mysqli_query($conn, $sql);
                
                while ($row = mysqli_fetch_assoc($result))
                    {
                        echo "<tr>";
                        
                        echo "<td>".$row["bookingID"]."</td>";
                        echo "<td>".$row["bookingDescription"]."</td>";
                        echo "<td>".$row["bookingDate"]."</td>";
                        echo "<td>".$row["customerID"]."</td>";
                        
                        echo "</tr>";

                    }
            ?>
        </table>

    <!-- present to the user their tickets -->
    <main>
        <h1 class="alert alert-info">Your Tickets</h1>
        <table class="table">
            <tr>
                <th>ticketID</th>
                <th>ticketDescription</th>
                <th>ticketDate</th>
                <th>customerID</th>
            </tr>
            
            <?php
                $sql = "SELECT * FROM ticket WHERE customerID = " . $_SESSION["customerID"];
                $result = mysqli_query($conn, $sql);
                
                while ($row = mysqli_fetch_assoc($result))
                    {
                        echo "<tr>";
                        
                        echo "<td>".$row["ticketID"]."</td>";
                        echo "<td>".$row["ticketDescription"]."</td>";
                        echo "<td>".$row["ticketDate"]."</td>";
                        echo "<td>".$row["customerID"]."</td>";
                        
                        echo "</tr>";

                    }
            ?>
        </table>

    <!-- present to the user their health tracking tool -->

        <h1 class="alert alert-info">Your Health Tracking Tool</h1>
        <table class="table">
            <tr>
                <th>trackerID</th>
                <th>trackerDate</th>
                <th>trackerWeight</th>
                <th>trackerTargetWeight</th>
                <th>trackerBodyFatPercentage</th>
                <th>trackerTargetFatPercentage</th>
                <th>trackerPushupCount</th>
                <th>trackerTargetPushupCount</th>
                <th>trackerDiet</th>
                <th>customerID</th>
            </tr>
            
            <?php
                $sql = "SELECT * FROM healthtracker WHERE customerID = " . $_SESSION["customerID"];
                $result = mysqli_query($conn, $sql);
                
                while ($row = mysqli_fetch_assoc($result))
                    {
                        echo "<tr>";
                        
                        echo "<td>".$row["trackerID"]."</td>";
                        echo "<td>".$row["trackerDate"]."</td>";
                        echo "<td>".$row["trackerWeight"]."</td>";
                        echo "<td>".$row["trackerTargetWeight"]."</td>";
                        echo "<td>".$row["trackerBodyFatPercentage"]."</td>";
                        echo "<td>".$row["trackerTargetFatPercentage"]."</td>";
                        echo "<td>".$row["trackerPushupCount"]."</td>";
                        echo "<td>".$row["trackerTargetPushupCount"]."</td>";
                        echo "<td>".$row["trackerDiet"]."</td>";
                        echo "<td>".$row["customerID"]."</td>";
                        
                        echo "</tr>";

                    }
            ?>
        </table>

        <!-- a button to logout -->
        <h2><a style="color:green" href="../../logout">Logout?</a></h2>

    </main>
    <br><br><br><br><br><br><br><br><br><br>
    <!-- include footer -->
    <?php require_once $_SERVER["DOCUMENT_ROOT"] . "/2023-os-mock/templates/footer.php" ?>
</body>
</html>
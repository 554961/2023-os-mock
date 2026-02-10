<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/2023-os-mock/database/config.php";

session_start();

if (isset($_SESSION["isStaff"]) && $_SESSION["isStaff"])
    {
        header("location:../../index.php?error=customerOnly");
    }


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
    <main>
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

        <h2><a style="color:green" href="../../logout">Logout?</a></h2>

    </main>
    <!-- include footer -->
    <?php require_once $_SERVER["DOCUMENT_ROOT"] . "/2023-os-mock/templates/footer.php" ?>
</body>
</html>
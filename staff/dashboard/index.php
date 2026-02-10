<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/2023-os-mock/database/config.php";

session_start();


if (isset($_SESSION["isStaff"]) && $_SESSION["isStaff"])
{

}
else
{
    header("location:../../index.php?error=unauthorised");
}    

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Login</title>
</head>
<body>
    <!-- navbar -->
    <?php require_once $_SERVER["DOCUMENT_ROOT"] . "/2023-os-mock/templates/navbar.php"; ?>
    <main>
        
        
        
        <h1 class="alert alert-info">All Bookings</h1>
        <table class="table">
            <tr>
                <th>bookingID</th>
                <th>bookingDescription</th>
                <th>bookingDate</th>
                <th>customerID</th>
            </tr>
            
            <?php
                $sql = "SELECT * FROM booking";
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
        
        <br><br><hr><br><br>
        
        <h1 class="alert alert-info">All Customer Data</h1>
        <table class="table">
            <tr>
                <th>customerID</th>
                <th>customerEmail</th>
                <th>customerFirstName</th>
                <th>customerLastName</th>
                <th>customerAge</th>
                <th>accountCreationDate</th>
            </tr>
            
            <?php
                $sql = "SELECT * FROM customer";
                $result = mysqli_query($conn, $sql);
                
                while ($row = mysqli_fetch_assoc($result))
                    {
                        echo "<tr>";
                        
                        echo "<td>".$row["customerID"]."</td>";
                        echo "<td>".$row["customerEmail"]."</td>";
                        echo "<td>".$row["customerFirstName"]."</td>";
                        echo "<td>".$row["customerLastName"]."</td>";
                        echo "<td>".$row["customerAge"]."</td>";
                        echo "<td>".$row["accountCreationDate"]."</td>";
                        
                        echo "</tr>";
                        }
                        ?>
        </table>
        
        <h2><a style="color:green" href="../../logout">Logout?</a></h2>
    </main>
    <!-- footer -->
    <?php require_once $_SERVER["DOCUMENT_ROOT"] . "/2023-os-mock/templates/footer.php"; ?>
</body>
</html>

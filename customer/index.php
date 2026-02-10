<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/2023-os-mock/database/config.php";

session_start();

if (isset($_SESSION["isStaff"]) && $_SESSION["isStaff"])
    {
        header("location:../../index.php?error=customerOnly");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Page</title>

</head>
<body>
    <!-- include navbar -->
    <?php require_once $_SERVER["DOCUMENT_ROOT"] . "/2023-os-mock/templates/navbar.php" ?>
    
    <h1 style="text-align:center">Quick Links</h1>:
    <ul style="text-align:center">
        <li><a style="color:purple" href="dashboard/">Your Dashboard</a></li>
        <li><a style="color:purple" href="book-risk-assessment/">Book A Risk Assessment</a></li>
        <li><a style="color:purple" href="personalised-health-advice/">Your Personalised Health Advice</a></li>
        <li><a style="color:purple" href="personalised-health-tracking-tool/">Your Personalised Health Tracking Tool</a></li>
        <h4><a style="color:green" href="../../logout">Logout?</a></h4>

    </ul>

    <br><br>
    
    
    <!-- include the chatbot -->
     <?php require_once $_SERVER["DOCUMENT_ROOT"] . "/2023-os-mock/templates/chatbot.php" ?>
    
    
    <!-- include footer -->
    <?php require_once $_SERVER["DOCUMENT_ROOT"] . "/2023-os-mock/templates/footer.php" ?>
</body>
</html>
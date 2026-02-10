<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/2023-os-mock/database/config.php";

session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

</head>
<body>
    <!-- include navbar -->
    <?php require_once $_SERVER["DOCUMENT_ROOT"] . "/2023-os-mock/templates/navbar.php" ?>
    
    
    
    
    <!-- include the chatbot -->
     <?php require_once $_SERVER["DOCUMENT_ROOT"] . "/2023-os-mock/templates/chatbot.php" ?>
    
    
    <!-- include footer -->
    <?php require_once $_SERVER["DOCUMENT_ROOT"] . "/2023-os-mock/templates/footer.php" ?>
</body>
</html>
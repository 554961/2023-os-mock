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
    <title></title>

</head>
<body>
    <!-- include navbar -->
    <?php require_once $_SERVER["DOCUMENT_ROOT"] . "/2023-os-mock/templates/navbar.php" ?>
    
    
        <main>
        
    </main>
    
    
    
    
    <!-- include footer -->
    <?php require_once $_SERVER["DOCUMENT_ROOT"] . "/2023-os-mock/templates/footer.php" ?>
</body>
</html>
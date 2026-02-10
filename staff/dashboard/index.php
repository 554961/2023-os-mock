<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/2023-os-mock/database/config.php";

session_start();




if (isset($_SESSION["isStaff"]) && $_SESSION["isStaff"])
{
    echo "hi staff";
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
        
    </main>

    <!-- footer -->
    <?php require_once $_SERVER["DOCUMENT_ROOT"] . "/2023-os-mock/templates/footer.php"; ?>
</body>
</html>

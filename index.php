<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <!-- my custom css -->
     <link rel="stylesheet" href="styles/home.css">

</head>
<body>
    <!-- Include navbar -->
    <?php require_once $_SERVER["DOCUMENT_ROOT"] . "/2023-os-mock/templates/navbar.php" ?>
    
    
    
    
    
    <div id="weather_data" class="alert alert-info">
        <!-- add background image -->
         <img src="images/weather_logo.png" alt="weather logo" style="position:absolute; width:5%; margin-top:10%;">
        <h2 class="alert alert-info">Latest Weather Information: </h2>
        <br>
    </div>
    
    
    
    <!-- Weather API with JS -->
    <script src="weather_api.js"></script>
    
    
    <!-- Include footer -->
    <?php require_once $_SERVER["DOCUMENT_ROOT"] . "/2023-os-mock/templates/footer.php" ?>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <!-- my custom css -->
    <link rel="stylesheet" href="styles/home.css">
        
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

</head>
<body>
    <!-- Include navbar -->
    <?php require_once $_SERVER["DOCUMENT_ROOT"] . "/2023-os-mock/templates/navbar.php" ?>
    

    <!-- Hero -->
    <div style="display:block; text-align:center">
        <h1 class="alert alert-info">Welcome to the <strong>Health Advice Group</strong></h1>
        <p style="background-image: url('/2023-os-mock/images/margaret.jpg'); z-index:-1; display:block; margin:auto; "></p>
    </div>

    <div style="position:absolute; margin-left:42%; margin-top:10%">
        <h3 style="margin-left:8%; text-decoration:underline">We are here to help.</h3>
        <hr>
        <ul style="text-align:center">
            <li><a style="color:purple" href="customer/dashboard/">Your Dashboard</a></li>
            <li><a style="color:purple" href="customer/book-risk-assessment/">Book A Risk Assessment</a></li>
            <li><a style="color:purple" href="customer/personalised-health-advice/">Your Personalised Health Advice</a></li>
            <li><a style="color:purple" href="customer/personalised-health-tracking-tool/">Your Personalised Health Tracking Tool</a></li>
        </ul>
    </div>
    
    
    <!-- Weather API -->
    <div id="weather_data" class="alert alert-info" style="margin-left:74%;">
        <!-- add background image -->
         <img src="images/weather_logo.png" alt="weather logo" style="width:25%; margin-top:10%;">
        <h2 class="alert alert-info">Latest Weather Data: </h2>
        <br>
        <!-- Weather API with JS -->
        <script src="weather_api.js"></script>
    </div>



    <!-- Air Quality API -->
    <div id="air_quality_data" class="alert alert-info" style="margin-left:1%; position:absolute; margin-top:10%">
        <!-- add background image -->
         <img src="images/air_quality.png" alt="weather logo" style="width:25%; margin-top:10%;">
        <h2 class="alert alert-info"> Latest Air Quality Data: </h2>
        <br>
        <!-- Weather API with JS -->
        <script src="air_quality_api.js"></script>
    </div>
    
    
    <!-- include the chatbot -->
     <?php require_once $_SERVER["DOCUMENT_ROOT"] . "/2023-os-mock/templates/chatbot.php" ?>
    
    
    <!-- Include footer -->
    <?php require_once $_SERVER["DOCUMENT_ROOT"] . "/2023-os-mock/templates/footer.php" ?>

</body>
</html>
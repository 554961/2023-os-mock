<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- Custom CSS -->
    <!-- <link rel="stylesheet" href="styles/home.css"> -->

    <style>
        body {
            margin: 0;
        }

        /* Hero section */
        .hero {
            text-align: center;
            padding: 30px 15px;
        }

        /* Quick links */
        .quick-links {
            text-align: center;
            margin: 40px 0;
        }

        .quick-links ul {
            list-style: none;
            padding: 0;
        }

        .quick-links li {
            margin: 10px 0;
        }

        .quick-links a {
            color: purple;
            font-weight: bold;
        }

        /* Add spacing before data section */
        .data-section {
            margin-top: 40px;
            margin-bottom: 40px;
        }

        /* Image styling */
        .data-section img {
            width: 25%;
            margin-bottom: 15px;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <?php require_once $_SERVER["DOCUMENT_ROOT"] . "/2023-os-mock/templates/navbar.php"; ?>

    <!-- Hero Section -->
    <div class="hero">
        <h1 class="alert alert-info">
            Welcome to the <strong>Health Advice Group</strong>
        </h1>
    </div>

    <!-- Quick Links -->
    <div class="quick-links">
        <h3 style="text-decoration: underline;">We are here to help.</h3>
        <hr style="width:300px; margin:10px auto;">
        <ul>
            <li><a href="customer/dashboard/">Your Dashboard</a></li>
            <li><a href="customer/book-risk-assessment/">Book A Risk Assessment</a></li>
            <li><a href="customer/personalised-health-advice/">Your Personalised Health Advice</a></li>
            <li><a href="customer/personalised-health-tracking-tool/">Your Personalised Health Tracking Tool</a></li>
        </ul>
    </div>

    <!-- Weather & Air Quality Section -->
    <div class="container data-section">
        <div class="row">

            <!-- Weather API -->
            <div class="col-md-6 col-sm-12">
                <div id="weather_data" class="alert alert-info">
                    <img src="images/weather_logo.png" alt="Weather logo">
                    <h2>Latest Weather Data:</h2>
                    <script src="weather_api.js"></script>
                </div>
            </div>

            <!-- Air Quality API -->
            <div class="col-md-6 col-sm-12">
                <div id="air_quality_data" class="alert alert-info">
                    <img src="images/air_quality.png" alt="Air quality logo">
                    <h2>Latest Air Quality Data:</h2>
                    <script src="air_quality_api.js"></script>
                </div>
            </div>

        </div>
    </div>

    <!-- Chatbot -->
    <?php require_once $_SERVER["DOCUMENT_ROOT"] . "/2023-os-mock/templates/chatbot.php"; ?>

    <!-- Footer -->
    <?php require_once $_SERVER["DOCUMENT_ROOT"] . "/2023-os-mock/templates/footer.php"; ?>

    <!-- Bootstrap JS (optional but recommended) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</body>
</html>

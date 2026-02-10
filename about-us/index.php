<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About Us</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<!-- include navbar -->
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/2023-os-mock/templates/navbar.php" ?>


<div class="container my-5">
    <div class="row align-items-center">
        <div class="col-md-6">
            <h1>About Us</h1>
            <p class="lead">
                We are passionate about helping others with all their healthcare concerns.
            </p>
            <p>
                Founded in 2026, Health Advice Group focuses on innovation, reliability, and customer
                satisfaction. Our mission is to provide medical services that make you, not only feel, but actually become physically better.
            </p>
        </div>
        <div class="col-md-6 text-center">
            <img src="/2023-os-mock/images/margaret.jpg" class="img-fluid rounded" style="width: 100%;" alt="About us image">
        </div>
    </div>

    <hr class="my-5">

    <div class="row">
        <div class="col-md-4">
            <h4><strong>Our Mission</strong></h4>
            <p>
                To provide information to anyone in need.
            </p>
        </div>
        <div class="col-md-4">
            <h4><strong>Our Vision</strong></h4>
            <p>
                To become trusted in our industry through support and integrity.
            </p>
        </div>
        <div class="col-md-4">
            <h4><strong>Our Values</strong></h4>
            <p>
                Customer first and never giving up.
            </p>
        </div>
    </div>
</div>

    
<!-- include footer -->
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/2023-os-mock/templates/footer.php" ?>

</body>
</html>

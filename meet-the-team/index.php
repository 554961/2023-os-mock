<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About Us</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        .images
        {
            width:580px;
            height:320px;
            border: 3px solid blueviolet;
        }
    </style>
</head>
<body>

<!-- include navbar -->
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/2023-os-mock/templates/navbar.php" ?>

<h1 class="alert alert-success" style="text-align: center;"> Meet The Team </h1>

<div class="container my-5">
    <div class="row align-items-center">
            <div class="col-md-6 text-center">
                <h2 style="text-decoration: underline;">Johnny - Doctor</h2>
                <img class="images" src="/2023-os-mock/images/johnny.png" class="img-fluid rounded"  alt="picture of a staff member">
                <h4>"love carin for the team me yeah" - Johnny (proper lad)</h4>
            </div>
            <div class="col-md-6 text-center">
                <h2 style="text-decoration: underline;">Margaret - Lead Nurse</h2>
                <img class="images" src="/2023-os-mock/images/margaret.jpg" class="img-fluid rounded"  alt="picture of a staff member">
                <h4>"I don't need to wash my hands again, I already did it yesterday." - Margaret</h4>
            </div>
            <div class="col-md-6 text-center">
                <h2 style="text-decoration: underline;">Gertrude - Nurse</h2>
                <img class="images" src="/2023-os-mock/images/gertrude.png" class="img-fluid rounded"  alt="picture of a staff member">
                <h4>"Hopefully it'll eventually fix itself." - Gertrude</h4>
            </div>
            <div class="col-md-6 text-center">
                <h2 style="text-decoration: underline;">Cornelia - Nurse</h2>
                <img class="images" src="/2023-os-mock/images/cornelia.png" class="img-fluid rounded"  alt="picture of a staff member">
                <h4>"Dosage is more of a vibe than a number." - Cornelia</h4>
            </div>
            <div class="col-md-6 text-center">
                <h2 style="text-decoration: underline;">Geraldine - Training Nurse</h2>
                <img class="images" src="/2023-os-mock/images/geraldine.png" class="img-fluid rounded" alt="picture of a staff member">
                <h4>"It's probably nothing..." - Geraldine</h4>
            </div>
            <div class="col-md-6 text-center">
                <h2 style="text-decoration: underline;">Big Bertha - Receptionist</h2>
                <img class="images" src="/2023-os-mock/images/bigbertha.jpg" class="img-fluid rounded" alt="picture of a staff member">
                <h4>"Of course I know how to roll a joint." - Big Bertha</h4>
            </div>
    </div>
</div>
<hr>

<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/2023-os-mock/templates/chatbot.php" ?>
    
<!-- include footer -->
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/2023-os-mock/templates/footer.php" ?>

</body>
</html>

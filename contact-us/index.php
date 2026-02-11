<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/2023-os-mock/database/config.php";

session_start();

//check if the user is a staff member. if they are, then send them back
//because staff members cant be on this page
if (isset($_SESSION["isStaff"]) && $_SESSION["isStaff"])
    {
        header("location:../../index.php?error=customerOnly");
    }

// if the customer is logged in, then they can access the page and start processing 
if (isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"] == true)
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST")
        {
            $description = $_POST["desc"];

            $sql = "SELECT customerID FROM customer WHERE '" . $_SESSION["email"] . "' = customerEmail";
    
            $result = mysqli_query($conn, $sql);
            
            $id = mysqli_fetch_array($result)["customerID"];
            
            $sql = "INSERT INTO ticket (ticketDescription, customerID)
                    VALUES ('$description', '$id')";

            if ($result = mysqli_query($conn, $sql)) 
                {
                    echo "Successfully created support ticket.";
                }


        }

    }
// if they are not logged in, send them back to get logged in
else
    {
        header("location:../login/index.php?error=notLoggedIn");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <style>
    .register-all {
      background: linear-gradient(135deg, #eafff1, #d7f7e5);
      min-height: 50vh;
      display: flex;
      align-items: center;
      justify-content: center;
      font-family: system-ui, sans-serif;
    }
    .register-card {
      padding-left:10px;
      padding-right:10px;
      max-width: 420px;
      width: 100%;
      border: none;
      border-radius: 18px;
      box-shadow: 0 10px 25px rgba(0,0,0,0.08);
      background: rgba(255,255,255,0.9);
      backdrop-filter: blur(8px);
    }
    .form-control:focus {
      border-color: #42c77a;
      box-shadow: 0 0 0 0.2rem rgba(66, 199, 122, 0.25);
    }
    .btn-green {
      background: #42c77a;
      border: none;
    }
    .btn-green:hover {
      background: #36b66b;
    }
  </style>
</head>
<body>

    <!-- include navbar -->
    <?php require_once $_SERVER["DOCUMENT_ROOT"] . "/2023-os-mock/templates/navbar.php" ?>
    
    <!-- form for booking risk assessment -->
    <main>
    <div class="register-all" style="">
        <div class="card register-card p-4">
        <h3 class="text-center fw-bold mb-1"> Contact Us</h3>

        <form method="POST">
          <div class="mb-3">
              <label class="form-label"> Ticket Description</label>
              <input required type="text" class="form-control" placeholder="Enter your issue" name="desc">
          </div>
          
          <button type="submit" class="btn btn-green text-white w-100 py-2 fw-semibold">
              Contact
          </button>
          <br><br>
        </form>

        </div>
    </div>

    </main>
    
    
    <!-- include footer -->
    <?php require_once $_SERVER["DOCUMENT_ROOT"] . "/2023-os-mock/templates/footer.php" ?>
</body>
</html>
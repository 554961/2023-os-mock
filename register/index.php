<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/2023-os-mock/database/config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
  //use CURRENT_DATE();
  $fname = htmlspecialchars($_POST["fname"]);
  $lname = htmlspecialchars($_POST["lname"]);
  $email = htmlspecialchars($_POST["email"]);
  $password = htmlspecialchars($_POST["password"]);
  $age = htmlspecialchars($_POST["age"]);

  // this will store all errors that user might encounter
  $allErrors = [];

  // validating information
  // notes for reader: 
  // 1. we dont need to check for emptyness of data as they are required in the form
    if (strlen($fname) < 3 || strlen($lname) < 3)
    {
      array_push($allErrors,"ERROR: First AND Last name must contain more than 2 characters");

    }
    if ($age < 0 || $age > 120)
    {
      array_push($allErrors,"ERROR: Invalid age value");
    }
    if (strlen($password) < 6)
    {
      array_push($allErrors,"ERROR: Password length must be at least 6 characters");
    }

    else
    {
      $isValid = true;
    }

    // display errors, if any
    if (count($allErrors) > 0)
    {
      foreach ($allErrors as $error)
      {
        echo "$error<br>";
      }
    }
    // successful register
    else
    {
      echo "Account Created Successfully!";

      // hash password
      $password = password_hash($password, PASSWORD_DEFAULT);
     
      $sql = "INSERT INTO customer (`customerEmail`, `customerPassword`, `customerFirstName`, `customerLastName`,
                                    `customerAge`)
              VALUES (?,?,?,?,?)";

      // prepared statement to insert
      $stmt = mysqli_prepare($conn, $sql);
      mysqli_stmt_bind_param($stmt, "ssssi", $email, $password, $fname, $lname, $age);
      mysqli_stmt_execute($stmt);
    
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
    .register-all {
      background: linear-gradient(135deg, #eafff1, #d7f7e5);
      min-height: 100vh;
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
    
    <div class="register-all">
        <div class="card register-card p-4">
        <h3 class="text-center fw-bold mb-1"> Create Account</h3>
        <p class="text-center text-muted mb-4"> Register to get started</p>

        <form method="POST">
          <div class="mb-3">
              <label class="form-label"> First Name</label>
              <input required type="text" class="form-control" placeholder="Enter your name" name="fname">
          </div>
          <div class="mb-3">
              <label class="form-label"> Last Name</label>
              <input required type="text" class="form-control" placeholder="Enter your name" name="lname">
          </div>
          <div class="mb-3">
              <label class="form-label"> Age</label>
              <input required type="number" class="form-control" placeholder="Enter your age" name="age">
          </div>

          <div class="mb-3">
              <label class="form-label"> Email</label>
              <input required type="email" class="form-control" placeholder="Enter your email" name="email">
          </div>

          <div class="mb-3">
              <label class="form-label"> Password</label>
              <input required type="password" class="form-control" placeholder="Create a password" name="password">
          </div>

          <button type="submit" class="btn btn-green text-white w-100 py-2 fw-semibold">
              Register
          </button>

          <p class="text-center mt-3 mb-0 text-muted">
              Already have an account? <a href="../login" class="text-success fw-semibold text-decoration-none">Login</a>
          </p>
          </form>
        </div>
    </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


    
    
    
    <!-- include footer -->
    <?php require_once $_SERVER["DOCUMENT_ROOT"] . "/2023-os-mock/templates/footer.php" ?>
</body>
</html>
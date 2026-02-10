<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/2023-os-mock/database/config.php";

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
      <form method="POST">
        <div class="card register-card p-4">
        <h3 class="text-center fw-bold mb-1"> Login to your account</h3>

          <div class="mb-3">
              <label class="form-label"> Email</label>
              <input type="email" class="form-control" placeholder="Enter your email" name="email">
          </div>

          <div class="mb-3">
              <label class="form-label"> Password</label>
              <input type="password" class="form-control" placeholder="Create a password" name="password">
          </div>
          
          <button type="submit" class="btn btn-green text-white w-100 py-2 fw-semibold">
              Login
          </button>

          <p class="text-center mt-3 mb-0 text-muted">
              Don't have an account? <a href="../register" class="text-success fw-semibold text-decoration-none">Register</a>
          </p>
          <?php
          if ($_SERVER["REQUEST_METHOD"] == "POST")
          {
            $email = mysqli_real_escape_string($conn, $_POST["email"]);
            $password = mysqli_real_escape_string($conn, $_POST["password"]);

            $sql = "SELECT customerPassword FROM customer WHERE customerEmail = ?";

            $stmt = mysqli_prepare($conn, $sql);
            mysqli_stmt_bind_param($stmt,"s", $email);
            if (!mysqli_stmt_execute($stmt))
            {
              echo "Failed executing prepared statement";
            }  

              $result = mysqli_stmt_get_result($stmt);
              while ($row = mysqli_fetch_assoc($result))
              {
                if (password_verify($password, $row["customerPassword"]))
                {
                  echo "Succesfully logged in as user " . $email;
                  $_SESSION["loggedIn"] = true;
                  $_SESSION["email"]    = $email;
                  header("Location: ../");
                } 
              }
              echo "<br><p class='alert alert-danger'>Invalid email or password. Please try again.</p> <br>";
          }
          ?>
      </form>
    </div>
    
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


    
    
    
    <!-- include footer -->
    <?php require_once $_SERVER["DOCUMENT_ROOT"] . "/2023-os-mock/templates/footer.php" ?>
</body>
</html>
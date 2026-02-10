<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/2023-os-mock/database/config.php";

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $email = mysqli_real_escape_string($conn, $_POST["email"]);
        $password = mysqli_real_escape_string($conn, $_POST["password"]);

        $sql = "SELECT staffPassword FROM staff WHERE staffEmail = ?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "s", $email);

        if (!mysqli_stmt_execute($stmt)) {
            echo "<p class='alert alert-danger mt-3'>Failed executing prepared statement.</p>";
        } else {
            $result = mysqli_stmt_get_result($stmt);
            $valid = false;

            while ($row = mysqli_fetch_assoc($result)) {
                if (password_verify($password, $row["staffPassword"])) {
                    $valid = true;
                    $_SESSION["loggedIn"] = true;
                    $_SESSION["isStaff"] = true;
                    $_SESSION["email"] = $email;
                    header("Location: ../index.php");
                }
            }

            if (!$valid) {
                echo "<p class='alert alert-danger mt-3'>Invalid email or password. Please try again.</p>";
            }
        }
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Login</title>

    <style>
        /* --- Page layout for sticky footer --- */
        html, body {
            height: 100%;
            margin: 0;
        }

        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        main {
            flex: 1; /* pushes footer to bottom when content is short */
        }

        /* --- Login page styles --- */
        .register-all {
            background: linear-gradient(135deg, #eafff1, #d7f7e5);
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: system-ui, sans-serif;
        }

        .register-card {
            padding-left: 10px;
            padding-right: 10px;
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
    <!-- navbar -->
    <?php require_once $_SERVER["DOCUMENT_ROOT"] . "/2023-os-mock/templates/navbar.php"; ?>

    <main>
        <div class="register-all">
            <form method="POST">
                <div class="card register-card p-4">
                    <h3 class="text-center fw-bold mb-1">Staff Login Only</h3>

                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" placeholder="Enter your email" name="email">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" placeholder="Enter your password" name="password">
                    </div>

                    <button type="submit" class="btn btn-green text-white w-100 py-2 fw-semibold">
                        Login
                    </button>
                </div>
            </form>
        </div>
    </main>

    <!-- footer -->
    <?php require_once $_SERVER["DOCUMENT_ROOT"] . "/2023-os-mock/templates/footer.php"; ?>
</body>
</html>

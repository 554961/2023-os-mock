<?php
require_once "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $firstName = mysqli_real_escape_string($conn, $_POST["fname"]);   
    $lastName =  mysqli_real_escape_string($conn, $_POST["lname"]);   
    $email =     mysqli_real_escape_string($conn, $_POST["email"]);   
    $pwd =       mysqli_real_escape_string($conn, $_POST["pwd"]);   

    $encryptedPwd = password_hash($pwd, PASSWORD_DEFAULT);

    $sql = "INSERT INTO staff (staffFirstName, staffLastName, staffEmail, staffPassword)
            VALUES (?,?,?,?)";

    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ssss", $firstName, $lastName, $email, $encryptedPwd);
    $result = mysqli_stmt_execute($stmt);

    if ($result)
    {
        echo "Successfully added staff member " . $firstName . " " . $lastName;
    }

}

?>

<h1>This is for staff use only.</h1>

<form method="POST">
    <h2>Add Staff Member</h2>
    
    <label>First Name</label>
    <input type="text" name="fname" required>
    <br>
    <label>Last Name</label>
    <input type="text" name="lname" required>
    <br>
    <label>Email</label>
    <input type="text" name="email" required>
    <br>
    <label>Password</label>
    <input type="password" name="pwd" required>

    <br>
    <button type="submit">Add Staff Member</button>
</form>
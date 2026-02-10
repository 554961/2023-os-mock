<?php
require_once "config.php";

session_start();


if (isset($_SESSION["isStaff"]) && $_SESSION["isStaff"])
{
    echo "welcome staff member";
}
else
{
    header("location:../../index.php?error=unauthorised");
}    

// check if form is submitted, then start processing
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $firstName = mysqli_real_escape_string($conn, $_POST["fname"]);   
    $lastName =  mysqli_real_escape_string($conn, $_POST["lname"]);   
    $email =     mysqli_real_escape_string($conn, $_POST["email"]);   
    $pwd =       mysqli_real_escape_string($conn, $_POST["pwd"]);   

    //encrypt the staff members raw password
    $encryptedPwd = password_hash($pwd, PASSWORD_DEFAULT);

    $sql = "INSERT INTO staff (staffFirstName, staffLastName, staffEmail, staffPassword)
            VALUES (?,?,?,?)";

    //prepare statement
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ssss", $firstName, $lastName, $email, $encryptedPwd);
    $result = mysqli_stmt_execute($stmt);

    if ($result)
    {
        echo "Successfully added staff member " . $firstName . " " . $lastName;
    }
    else
    {
        echo "Failed to create staff member." . mysqli_stmt_error($stmt);
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Staff Member Data</title>
</head>
<!-- This page is for staff members only -->
<h1>This is for staff use only.</h1>

<!-- simple form for adding staff data. -->
 <!-- doesnt need to be fancy as its just for backend staff usage -->
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
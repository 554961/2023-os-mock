<?php
// This config file is simply to create a reusable connection file for other php files
$conn = mysqli_connect("localhost", "root", "", "healthadvicegroup");
if ($conn === false) die("ERROR: Could not connect to database.". mysqli_connect_error());

?>
<?php

$conn = mysqli_connect("localhost", "root", "");
if ($conn === false) die("ERROR: Could not connect to database.". mysqli_connect_error());

$sql = "CREATE DATABASE HealthAdviceGroup";

mysqli_query($conn, $sql);

echo "Successfully created database";

?>
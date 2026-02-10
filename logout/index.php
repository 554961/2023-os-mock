<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/2023-os-mock/database/config.php";

// simply logs out the user then sends them back to the home page
session_start();
session_destroy();
session_unset();

// send them back
header("location: ../index.php?loggedOut=true");
?>
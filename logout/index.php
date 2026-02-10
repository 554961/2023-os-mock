<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/2023-os-mock/database/config.php";

session_start();

session_destroy();
session_unset();

header("location: ../index.php?loggedOut=true");
?>
<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/2023-os-mock/database/config.php";

if (session_status() !== PHP_SESSION_ACTIVE) session_start();

?>

<!-- favicon -->
<link rel="icon" href="/2023-os-mock/images/favicon.png" type="image/png">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- my custom css -->
 <link rel="stylesheet" href="/2023-os-mock/styles/navbar.css">
 <style>
  body
  {
    background: linear-gradient(135deg, #eafff1, #d7f7e5);
  }
 </style>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <!-- logo here -->
      <img id="logo" src="/2023-os-mock/images/favicon.png" alt="company logo" style="width: 5%; margin-top:1%;">
      <a class="navbar-brand active" href="/2023-os-mock/" style="color:#40e0d0;">Health Advice Group</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="/2023-os-mock/"><span class="glyphicon glyphicon-home"></span> Home</a></li>
      <li><a href="/2023-os-mock/info/">Information</a></li>
      <li><a href="/2023-os-mock/customer/book-risk-assessment">Book Risk Assessment</a></li>
      <li><a href="/2023-os-mock/customer/personalised-health-advice">Personalised Health Advice</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <?php
        if (isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"] == true)
          {
            if (isset($_SESSION["isStaff"]) && !$_SESSION["isStaff"])
              {
                echo '<li><a href="/2023-os-mock/customer"><span class="glyphicon glyphicon-plus"></span> Your Account <strong style=color:lightgreen;>' . $_SESSION["email"] . '</strong></a></li>';
              }
            else if (isset($_SESSION["isStaff"]) && $_SESSION["isStaff"])
 
              {
                echo '<li><a href="/2023-os-mock/staff"><span class="glyphicon glyphicon-plus"></span style="color:red"> STAFF MEMBER: <strong style=color:red;>' . $_SESSION["email"] . '</strong></a></li>';
              }
          }
        else
          {
            echo '<li><a href="/2023-os-mock/register"><span class="glyphicon glyphicon-user"></span> Register</a></li>';
            echo '<li><a href="/2023-os-mock/login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>';
          }
      ?>
    </ul>
  </div>
</nav>
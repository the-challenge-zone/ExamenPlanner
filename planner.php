<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Examen Planner</title>
    <link rel="shotcut icon" href="./favicon.ico">
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/calendar.css">
</head>
<body>
    <nav class="navbar navbar-expand navbar-light bg-dark sticky-top"> <!--Start navbar-->
        <div class="container"><!--Start container-->
            <button id="menu-toggle" class="btn btn-danger"><?php echo htmlspecialchars($_SESSION["username"]); ?></button> <!--Login button-->
            <a class="nav-link" href="#" style="color: #ffffff; border-bottom: 2px solid #d8c0fd;">Examen Planner</a> <!--Home button-->
            <a class="nav-link" href="bewerken.php" style="color: #ffffff;">Bewerken</a> <!--Klas rankings button-->
        </div> <!--End container-->
    </nav> <!--End navbar-->
    <div id="wrapper"> <!--Start wrapper-->
        <div id="sidebar-wrapper"> <!--Start sidebar wrapper-->
            <div class="container"> <!--Start container-->
                <ul class="sidebar-nav"> <!--Start sidebar-->
                    <a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>
                    <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
                </ul> <!--End sidebar-->
            </div> <!--End container-->
        </div> <!--End sidebar wrapper-->
        <div class="container"> <!--Start container-->
            <h1 class="display-3">Examen Planner</h1>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Zoeken</span>
                </div>
                <input id="search" type="text" class="form-control" aria-label="Search" aria-describedby="basic-addon1">
            </div>
            <div id="calendar"></div>
                <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.5.1/moment.min.js"></script>
            <br>
        </div>
    <script src="./js/jquery.js"></script>
    <script src="./js/popper.js"></script>
    <script src="./js/bootstrap.js"></script>
    <script src="./js/sidebar.js"></script>
    <script src="./js/calendar.js"></script>
</body>
</html>
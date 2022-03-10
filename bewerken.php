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
            <a class="nav-link" href="test.php" style="color: #ffffff;">Examen Planner</a> <!--Home button-->
            <a class="nav-link" href="#" style="color: #ffffff; border-bottom: 2px solid #d8c0fd;">Bewerken</a> <!--Klas rankings button-->
        </div> <!--End container-->
    </nav> <!--End navbar-->
</body>
</html>
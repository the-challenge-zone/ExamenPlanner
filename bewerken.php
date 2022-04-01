<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect them to login page
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
            <a class="nav-link" href="index.php" style="color: #ffffff;">Examen Planner</a> <!--Home button-->
            <a class="nav-link" href="#" style="color: #ffffff; border-bottom: 2px solid #d8c0fd;">Bewerken</a> <!--Klas rankings button-->
        </div> <!--End container-->
    </nav> <!--End navbar-->
    <div id="wrapper"> <!--Start wrapper-->
        <div id="sidebar-wrapper"> <!--Start sidebar wrapper-->
            <div class="container"> <!--Start container-->
                <ul class="sidebar-nav"> <!--Start sidebar-->
                <?php 
                if(!empty($login_err)){
                    echo '<div class="alert alert-danger">' . $login_err . '</div>';
                }        
                ?>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>" placeholder="username">
                        <span class="invalid-feedback"><?php echo $username_err; ?></span>
                    </div>    
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" placeholder="password">
                        <span class="invalid-feedback"><?php echo $password_err; ?></span>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </form>
                </ul> <!--End sidebar-->
            </div> <!--End container-->
        </div> <!--End sidebar wrapper-->
</body>
</html>
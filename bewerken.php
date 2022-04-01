<?php
// Initialize the session
//session_start();
 
// Check if the user is logged in, if not then redirect him to login page
//if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
//    header("location: index.php");
//    exit;
//}
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
            <button id="menu-toggle" class="btn btn-danger"><?php //echo htmlspecialchars($_SESSION["username"]); ?></button> <!--Login button-->
            <a class="nav-link" href="test.php" style="color: #ffffff;">Examen Planner</a> <!--Home button-->
            <a class="nav-link" href="#" style="color: #ffffff; border-bottom: 2px solid #d8c0fd;">Bewerken</a> <!--Klas rankings button-->
        </div> <!--End container-->
    </nav> <!--End navbar-->
    
    <form class="form-horizontal">
        <fieldset>

        <!-- Form Name -->
        <legend style="text-align:center;">Examen planner formulier</legend>

        <!-- Text input-->
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput" style = "margin-left: 45%">Examen naam</label>  
        <div class="col-md-4">
        <input id="textinput" name="textinput" type="text" placeholder="placeholder" class="form-control input-md" style = "margin-left: 105%">
            
        </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput"  style = "margin-left: 45%">Klas</label>  
        <div class="col-md-4">
        <input id="textinput" name="textinput" type="text" placeholder="placeholder" class="form-control input-md"  style = "margin-left: 105%">
            
        </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput"  style = "margin-left: 45%">Crebo</label>  
        <div class="col-md-4">
        <input id="textinput" name="textinput" type="text" placeholder="placeholder" class="form-control input-md"  style = "margin-left: 105%">
            
        </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput"  style = "margin-left: 45%">Kwalificatie</label>  
        <div class="col-md-4">
        <input id="textinput" name="textinput" type="text" placeholder="placeholder" class="form-control input-md"  style = "margin-left: 105%">
            
        </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput"  style = "margin-left: 45%">Cohort</label>  
        <div class="col-md-4">
        <input id="textinput" name="textinput" type="text" placeholder="placeholder" class="form-control input-md"  style = "margin-left: 105%">
            
        </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput"  style = "margin-left: 45%">Benaming exameneenheid</label>  
        <div class="col-md-4">
        <input id="textinput" name="textinput" type="text" placeholder="placeholder" class="form-control input-md"  style = "margin-left: 105%">
            
        </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput"  style = "margin-left: 45%">Code exameneenheid</label>  
        <div class="col-md-4">
        <input id="textinput" name="textinput" type="text" placeholder="placeholder" class="form-control input-md"  style = "margin-left: 105%">
            
        </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Afname vorm</label>  
        <div class="col-md-4">
        <input id="textinput" name="textinput" type="text" placeholder="placeholder" class="form-control input-md">
            
        </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Duur (min)</label>  
        <div class="col-md-4">
        <input id="textinput" name="textinput" type="text" placeholder="placeholder" class="form-control input-md">
            
        </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Dag</label>  
        <div class="col-md-4">
        <input id="textinput" name="textinput" type="text" placeholder="placeholder" class="form-control input-md">
            
        </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Datum -tijd v/t of v</label>  
        <div class="col-md-4">
        <input id="textinput" name="textinput" type="text" placeholder="placeholder" class="form-control input-md">
            
        </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">beoordelaar</label>  
        <div class="col-md-4">
        <input id="textinput" name="textinput" type="text" placeholder="placeholder" class="form-control input-md">
            
        </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Leverancier </label>  
        <div class="col-md-4">
        <input id="textinput" name="textinput" type="text" placeholder="placeholder" class="form-control input-md">
            
        </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Toezicht- lokaal</label>  
        <div class="col-md-4">
        <input id="textinput" name="textinput" type="text" placeholder="placeholder" class="form-control input-md">
            
        </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Aantal</label>  
        <div class="col-md-4">
        <input id="textinput" name="textinput" type="text" placeholder="placeholder" class="form-control input-md">
            
        </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Studentnummers</label>  
        <div class="col-md-4">
        <input id="textinput" name="textinput" type="text" placeholder="placeholder" class="form-control input-md">
            
        </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Cluster</label>  
        <div class="col-md-4">
        <input id="textinput" name="textinput" type="text" placeholder="placeholder" class="form-control input-md">
            
        </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Versie</label>  
        <div class="col-md-4">
        <input id="textinput" name="textinput" type="text" placeholder="placeholder" class="form-control input-md">
            
        </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Week</label>  
        <div class="col-md-4">
        <input id="textinput" name="textinput" type="text" placeholder="placeholder" class="form-control input-md">
            
        </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Locatie opmerking</label>  
        <div class="col-md-4">
        <input id="textinput" name="textinput" type="text" placeholder="placeholder" class="form-control input-md">
            
        </div>
        </div>

        </fieldset>
    </form>

</body>
</html>
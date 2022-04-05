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

        <button id="submit" class="btn btn-dark btn-lg btn-block">bruv kek</button>
        <!-- Text input Examen naam-->
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput" style = "margin-left: 45%">Examen naam</label>  
        <div class="col-md-4">
        <input id="textinput" name="textinput" type="text" placeholder="bijv. engels" class="form-control input-md" style = "margin-left: 105%">
            
        </div>
        </div>

        <!-- Text input Klas-->
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput" style = "margin-left: 45%">Klas</label>  
        <div class="col-md-4">
        <input id="textinput" name="textinput" type="text" placeholder="bijv. A.I.123" class="form-control input-md" style = "margin-left: 105%">
            
        </div>
        </div>

        <!-- Text input Crebo-->
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput" style = "margin-left: 45%">Crebo</label>  
        <div class="col-md-4">
        <input id="textinput" name="textinput" type="text" placeholder="crebo xD" class="form-control input-md" style = "margin-left: 105%">
            
        </div>
        </div>

        <!-- Text input Kwalificatie-->
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput" style = "margin-left: 45%">Kwalificatie</label>  
        <div class="col-md-4">
        <input id="textinput" name="textinput" type="text" placeholder="kwalificatie xD" class="form-control input-md" style = "margin-left: 105%">
            
        </div>
        </div>

        <!-- Text input Cohort-->
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput" style = "margin-left: 45%">Cohort</label>  
        <div class="col-md-4">
        <input id="textinput" name="textinput" type="text" placeholder="cohort :3" class="form-control input-md" style = "margin-left: 105%">
            
        </div>
        </div>

        <!-- Text input Benaming exameneenheid-->
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput" style = "margin-left: 45%">Benaming exameneenheid</label>  
        <div class="col-md-4">
        <input id="textinput" name="textinput" type="text" placeholder="ja" class="form-control input-md" style = "margin-left: 105%">
            
        </div>
        </div>

        <!-- Text input Code exameneenheid-->
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput" style = "margin-left: 45%">Code exameneenheid</label>  
        <div class="col-md-4">
        <input id="textinput" name="textinput" type="text" placeholder="ja 2" class="form-control input-md" style = "margin-left: 105%">
            
        </div>
        </div>

        <!-- Text input Afname vorm-->
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput" style = "margin-left: 45%">Afname vorm</label>  
        <div class="col-md-4">
        <input id="textinput" name="textinput" type="text" placeholder="bijv. digitaal" class="form-control input-md" style = "margin-left: 105%">
            
        </div>
        </div>

        <!-- Text input Duur (min)-->
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput" style = "margin-left: 45%">Duur (min)</label>  
        <div class="col-md-4">
        <input id="textinput" name="textinput" type="text" placeholder="bijv. 420min" class="form-control input-md" style = "margin-left: 105%">
             
        </div>
        </div>

        <!-- Text input Dag-->
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput" style = "margin-left: 45%">Dag</label>  
        <div class="col-md-4">
        <input id="textinput" name="textinput" type="text" placeholder="bijv. zaterdag" class="form-control input-md" style = "margin-left: 105%">
            
        </div>
        </div>

        <!-- Text input Datum -tijd v/t of v-->
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput" style = "margin-left: 45%">Datum -tijd v/t of v</label>  
        <div class="col-md-4">
        <input id="textinput" name="textinput" type="text" placeholder="bijv. 20-04 18:00 tot 18:30" class="form-control input-md" style = "margin-left: 105%">
            
        </div>
        </div>

        <!-- Text input Beoordelaar-->
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput" style = "margin-left: 45%">Beoordelaar</label>  
        <div class="col-md-4">
        <input id="textinput" name="textinput" type="text" placeholder="bijv. D.Bollen" class="form-control input-md" style = "margin-left: 105%">
            
        </div>
        </div>

        <!-- Text input Leverancier-->
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput" style = "margin-left: 45%">Leverancier </label>  
        <div class="col-md-4">
        <input id="textinput" name="textinput" type="text" placeholder="leverancier" class="form-control input-md" style = "margin-left: 105%">
            
        </div>
        </div>

        <!-- Text input Toezicht- lokaal-->
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput" style = "margin-left: 45%">Toezicht- lokaal</label>  
        <div class="col-md-4">
        <input id="textinput" name="textinput" type="text" placeholder="bijv. Derix " class="form-control input-md" style = "margin-left: 105%">
            
        </div>
        </div>

        <!-- Text input Aantal-->
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput" style = "margin-left: 45%">Aantal</label>  
        <div class="col-md-4">
        <input id="textinput" name="textinput" type="text" placeholder="bijv. 2" class="form-control input-md" style = "margin-left: 105%">
            
        </div>
        </div>

        <!-- Text input Studentnummers-->
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput" style = "margin-left: 45%">Studentnummers</label>  
        <div class="col-md-4">
        <input id="textinput" name="textinput" type="text" placeholder="bijv. 405349" class="form-control input-md" style = "margin-left: 105%">
            
        </div>
        </div>

        <!-- Text input Cluster-->
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput" style = "margin-left: 45%">Cluster</label>  
        <div class="col-md-4">
        <input id="textinput" name="textinput" type="text" placeholder="cluster lol" class="form-control input-md" style = "margin-left: 105%">
            
        </div>
        </div>

        <!-- Text input Versie-->
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput" style = "margin-left: 45%">Versie</label>  
        <div class="col-md-4">
        <input id="textinput" name="textinput" type="text" placeholder="bijv. 2.2" class="form-control input-md" style = "margin-left: 105%">
            
        </div>
        </div>

        <!-- Text input Week-->
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput" style = "margin-left: 45%">Week</label>  
        <div class="col-md-4">
        <input id="textinput" name="textinput" type="text" placeholder="bijv. 16" class="form-control input-md" style = "margin-left: 105%">
            
        </div>
        </div>

        <!-- Text input Locatie opmerking-->
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput" style = "margin-left: 45%">Locatie opmerking</label>  
        <div class="col-md-4">
        <input id="textinput" name="textinput" type="text" placeholder="bijv. gat in de grond" class="form-control input-md" style = "margin-left: 105%"   >
            
        </div>
        </div>

        </fieldset>
    </form>

</body>
</html>
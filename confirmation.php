<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" type="text/css" href="./css/styles.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>BikeSite - Confirmation</title>
</head>
<body>
<header class="header">
    <div class="container fluid">
        <img id="logo" src="img/logo.jpg" height="100" width="130" alt="BikeSite logo - BS"/>
        <div id="header-animation">
            <video width="160" height="120" autoplay loop muted playsinline>
                <source src="./img/bike_silhuoette.webm" type="video/webm">
                Silhouette of man riding bike.
            </video>
        </div>
    </div>
</header>
<div class="container-fluid" style="padding-top: 99px;">
    <div class="row">
        <ul class="col-xs-12 col-sm-9 col-md-3 col-lg-3 sidenav">
            <br><li><a href="./home.php">Home Page</a></li>
            <li><a href="./registration.php">Registration</a></li>
            <li><a href="./animations.php">Animations</a></li>
            <br><li>Store coming soon!</li><br><br>
        </ul>
        <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9 content">
            <div class="transbox">
                <p>Confirmation:</p>
                <p><?php
                foreach($_POST as $key => $value) {
                    if ($key == "username"){
                        echo "<br/>Username: $value<br/>";
                    }
                    if ($key == "pwd"){
                        echo "<br/>Password: $value<br/>";
                    }
                    if ($key == "first-name"){
                        echo "<br/>First name: $value<br/>";
                    }
                    if ($key == "last-name"){
                        echo "<br/>Last name: $value<br/>";
                    }
                    if ($key == "gender"){
                        echo "<br/>Gender: $value<br/>";
                    }
                    if ($key == "marital-status"){
                        echo "<br/>Marital status: $value<br/>";
                    }
                    if ($key == "birthday"){
                        echo "<br/>Birthday: $value<br/>";
                    }
                    if ($key == "address-1"){
                        echo "<br/>Address Line 1: $value<br/>";
                    }
                    if ($key == "address-2"){
                        echo "<br/>Address Line 2: $value<br/>";
                    }
                    if ($key == "city"){
                        echo "<br/>City: $value<br/>";
                    }
                    if ($key == "state"){
                        echo "<br/>State: $value<br/>";
                    }
                    if ($key == "zip-code"){
                        echo "<br/>Zip code: $value<br/>";
                    }
                    if ($key == "phone"){
                        echo "<br/>Phone number: $value<br/>";
                    }
                    if ($key == "email"){
                        echo "<br/>Email address: $value<br/>";
                    }
                }
                    ?></p>
            </div>
        </div>
    </div>
</div>
<footer class="footer">
    <div class="container-fluid">
        <p><a href="https://www.bikeride.com/guide/">Videos on Bicycle Repair and Maintenance</a>  -
            <a href="https://www.active.com/cycling">Find cycling events near you</a>  -
            <a href="https://www.wikihow.com/Ride-a-Bicycle">Learn how to ride a bike</a></p>
        <p><a href="https://www.nhtsa.gov/road-safety/bicycle-safety">Learn about bicycle safety</a></p>
    </div>
</footer>
</body>
</html>
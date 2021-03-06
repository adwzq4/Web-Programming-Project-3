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
    <title>BikeSite - Registration</title>
</head>
<body id="registration-body">
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
            <li><a href="./home.php">Home Page</a></li>
            <li><a href="./registration.php">Registration</a></li>
            <li><a href="./animations.php">Animations</a></li>
            <li>Store coming soon!</li>
        </ul>
        <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9 content">
            <div class="transbox-wide">
                <h2>Register here!</h2>
                <h4>Sign up to hear about the latest deals, local bike events, and more!</h4>
            </div>
            <?php
                include 'inputValidate.php';
            ?>
            <form method="post" class="needs-validation" novalidate action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 transbox">
                        <div class="form-group" id="username">
                            <label for="username">Username:</label>
                            <input name="username" class="form-control" type="text" required
                                   value="<?php echo $userName; ?>"/>
                            <p class="error">* <?php echo $userNameErr;?></p>
                        </div>
                        <div class="form-group" id="pwd">
                            <label for="pwd">Password:</label>
                            <input id="password-text" name="pwd" class="form-control" type="password" required
                                   value="<?php echo $pwd; ?>"/>
                            <p class="error">* <?php echo $pwdErr;?></p>
                        </div>
                        <div class="form-group" id="repeat-pwd">
                            <label for="repeat-pwd">Repeat Password:</label>
                            <input name="repeat-pwd" class="form-control" type="password" required
                                   value="<?php echo $rptPwd; ?>"/>
                            <p class="error">* <?php echo $rptPwdErr;?></p>
                        </div>
                        <div class="form-group" id="first-name">
                            <label for="first-name">First Name:</label>
                            <input name="first-name" class="form-control" type="text" required
                                   value="<?php echo $firstName; ?>"/>
                            <p class="error">* <?php echo $firstNameErr;?></p>
                        </div>
                        <div class="form-group" id="last-name">
                            <label for="last-name">Last Name:</label>
                            <input name="last-name" class="form-control" type="text" required
                                   value="<?php echo $lastName; ?>"/>
                            <p class="error">* <?php echo $lastNameErr;?></p>
                        </div>
                        <div class="form-group" id="gender">
                            <label class="control-label" for="gender">Gender:</label>
                            <input name="gender" class="form-control" type="text" required
                                   value="<?php echo $gender; ?>"/>
                            <p class="error">* <?php echo $genderErr;?></p>
                        </div>
                        <div class="form-group" id="marital-status">
                            <label for="marital-status">Marital Status:</label>
                            <input name="marital-status" class="form-control" type="text" required
                                   value="<?php echo $marital; ?>"/>
                            <p class="error">* <?php echo $maritalErr;?></p>
                        </div>
                        <div class="form-group" id="birthday">
                            <label for="birthday">Birthday:</label>
                            <input name="birthday" class="form-control" type="text" required placeholder="mm/dd/yyyy"
                                   value="<?php echo $bday; ?>"/>
                            <p class="error">* <?php echo $bdayErr;?></p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 transbox">
                        <div class="form-group" id="address-1">
                            <label for="address-1">Address:</label>
                            <input name="address-1" class="form-control" type="text" required
                                   value="<?php echo $address1; ?>"/>
                            <p class="error">* <?php echo $address1Err;?></p>
                        </div>
                        <div class="form-group" id="address-2">
                            <label for="address-2">Address Line 2 (optional):</label>
                            <input name="address-2" class="form-control" type="text"
                                   value="<?php echo $address2; ?>"/>
                            <p class="error"><?php echo $address2Err;?></p>
                        </div>
                        <div class="form-group" id="city">
                            <label for="city">City:</label>
                            <input name="city" class="form-control" type="text" required
                                   value="<?php echo $city; ?>"/>
                            <p class="error">* <?php echo $cityErr;?></p>
                        </div>
                        <div class="form-group" id="state">
                            <label for="state">State:</label>
                            <input name="state" class="form-control" type="text" required
                                   value="<?php echo $state; ?>">
                            <p class="error">* <?php echo $stateErr;?></p>
                        </div>
                        <div class="form-group" id="zip-code">
                            <label for=zip-code>Zip Code:</label>
                            <input name="zip-code" class="form-control" type="text" required
                                   value="<?php echo $zip; ?>"/>
                            <p class="error">* <?php echo $zipErr;?></p>
                        </div>
                        <div class="form-group" id="phone">
                            <label for=phone>Phone Number:</label>
                            <input name="phone" class="form-control" type="text" placeholder="123-456-7890" required
                                   value="<?php echo $phone; ?>"/>
                            <p class="error">* <?php echo $phoneErr;?></p>
                        </div>
                        <div class="form-group" id="email">
                            <label for=email>Email Address:</label>
                            <input name="email" class="form-control" type="text" required
                                   value="<?php echo $email; ?>"/>
                            <p class="error">* <?php echo $emailErr;?></p>
                        </div>
                        <input type="submit" id="submit" class="btn btn-success" value="Submit"><br><br><br>
                        <p class="error">* means required field.</p>
                    </div>
                </div>
            </form>
            <?php
            if ($isValid) {
                ?>
                <form id="hiddenForm" name="hiddenForm"
                      method="POST" action="confirmation.php">
                    <?php
                    foreach($_POST as $key => $value) {
                        ?>
                        <input name="<?php echo $key;?>"
                               value="<?php echo $value;?>"
                               type="hidden"/>
                        <?php
                    }
                    ?>
                </form>
                <script>
                    document.createElement('form').submit.call(document.getElementById('hiddenForm'));
                </script>
                <?php
            }
            ?>
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
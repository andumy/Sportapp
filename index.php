<html>

<head>
<!-- PHP SCRIPTS -->
    <?php
    require 'php/scripts/homeRedirect.php';
    require 'php/scripts/sessionActivation.php';
    ?>
<!-- CSS & BOOTSTRAP -->
    <link rel = "stylesheet" type="text/css" href="css/mainPanel.css"></link>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- METALINKS -->
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate"/>
    <meta http-equiv="Pragma" content="no-cache"/>
    <meta http-equiv="Expires" content="0"/>
    
</head>
<body class="background">
    <div class="container">
        <div class="row">
            <div class = "col-sm-4 col-sm-offset-4">
                <img src="assets/logo.svg" alt="logo" class="logo">
            </div>
        </div>
        <form action="php/scripts/login.php" method="POST">
            <div class = "row">    
                <div class = "col-sm-2">
                </div>

                <div class = "col-sm-4">
                <input type="text" name="user" placeholder="Username" class="inpts">
                </div>

                <div class = "col-sm-4 ">
                <input type="password" name="pass" placeholder="Password" class="inpts">
                </div>

                <div class = "col-sm-2">
                </div>
                    
            </div>
            <div class = "row">  
                <div class = "col-sm-8">
                </div>
                <div class = "col-sm-2">
                   <div class="forget"> <a href="php/pages/forget.php">Forget Pasword?</a> </div>
                </div>
                <div class = "col-sm-2">
                </div>
            </div>
            <div class = "row">  
                <div class = "col-sm-4">
                </div>
                <div class = "col-sm-4">
                     <input type="submit" value="Login" name="login" class="loginButton">
                     </br>
                    <div class="register"> or <a href="php/pages/registerCluburi.php">Register here</a> </div>
                </div>
                <div class = "col-sm-4">
                </div>
            </div>
        </form>
         
        </div>
    </div>
</body>
</html>
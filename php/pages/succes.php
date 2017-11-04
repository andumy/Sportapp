<html>
<head>
    <link rel = "stylesheet" type="text/css" href="../../css/mainPanel.css"></link>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <?php
    require '../scripts/dbconnection.php';
    require '../scripts/sessionActivation.php';

    
    ?>
</head>



<body class="background">
    <div class="container">
        <div class="row">
            <div class = "col-sm-4 col-sm-offset-4">
            <img src="../../assets/logo.svg" alt="logo" class="logo">
            </div>
        </div>

            <div class = "row">  
                <div class = "col-sm-2">
                </div>

                <div class = "col-sm-8">
                    <?php
                        echo "<div class='mesaj'>".$_SESSION['message']."</div>";
                    ?>
                </div>

                <div class = "col-sm-2">
                </div>
            </div>
            <div class = "row">  
                <div class = "col-sm-4">
                </div>

                <div class = "col-sm-4">
                     <a href = "http://localhost/php/pages/dashboard.php">
                        <div class="loginButton divButon">
                            Back
                        </div>
                      </a>
                    
                </div>

                <div class = "col-sm-4">
                </div>

            </div>
         
        </div>
    </div>
</body>



</html>
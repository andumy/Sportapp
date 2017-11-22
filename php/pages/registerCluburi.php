<html>
<head>
    <?php
    require '../scripts/sessionActivation.php';
    ?>
    <link rel = "stylesheet" type="text/css" href="../../css/mainPanel.css"></link>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>
<body class="background">
    <div class="container">
        <div class="row">
            <div class = "col-sm-4 col-sm-offset-4">
            <img src="../../assets/logo.svg" alt="logo" class="logo">
            </div>
        </div>
        <form action="../scripts/registerCluburiToMysql.php" method="POST">
            <div class = "row">    

                <div class = "col-sm-4">
                <label for="user" class="label">Username</label>
                <input type="text" name="user" class="inpts">
                </div>

                <div class = "col-sm-4 ">
                <label for="pass" class="label">Password</label>
                <input type="password" name="pass" class="inpts">
                </div>

                <div class = "col-sm-4">
                <label for="email" class="label">Email</label>
                <input type="mail" name="email" class="inpts">
                </div>
                    
            </div>
            <div class = "row">  
                <div class = "col-sm-8">
                </div>

                <div class = "col-sm-2">
                </div>

                <div class = "col-sm-2">
                </div>
            </div>
            <div class = "row">  
                <div class = "col-sm-4">
                </div>

                <div class = "col-sm-4">
                     <input type="submit"  value="Register" name="register" class="loginButton">
                     </br>
                     <div class="register"> <a href="../../index.php">Back</a> </div>
                </div>

                <div class = "col-sm-4">
                </div>

            </div>
        </form>
         
        </div>
    </div>
</body>

</html>


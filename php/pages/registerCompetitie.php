<html>
<head>
    <?php
    require '../scripts/loggedVerify.php';
    require '../scripts/sessionActivation.php';
    ?>


    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel = "stylesheet" type="text/css" href="../../css/dashboard.css"></link>



</head>
<body class="background">

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
        <a class="navbar-brand" href="http://localhost/php/pages/dashboard.php">
            <img src="../../assets/logo.svg" alt="logo" class="logo">
        </a>
    </div>

    <ul class="nav navbar-nav navbar-right">
        <?php
        echo "<li><a href='http://localhost/php/pages/editProfile.php' class='hello'>Hello ".$_SESSION['user']."</a></li>";
        ?>
        <li><a href="http://localhost/php/scripts/logout.php" class="logout">Log Out</a></li>
    </ul>
  </div>
</nav>


<div class="container">
        
        <form action="../scripts/registerCompetitieToMysql.php" method="POST">
        </br>
            <div class = "row">    
                <div class = "col-sm-2">
                </div>

                <div class = "col-sm-4">
                    <label for="nume" class="label">Name</label>
                    <input type="text" name="nume">
                </div>

                <div class = "col-sm-4">
                    <label for="data" class="label">Date</label>
                    <input type="date" name="data">
                </div> 

                <div class = "col-sm-2">
                </div> 
            </div>

            
            <div class="row">
                <div class="col-sm-1" > 
                </div>
        
                <div class="col-sm-2" >
                    <a href = "http://localhost/php/pages/listCompetitii.php">
                        <div class="loginButton  divButon topSpace">
                            Back
                        </div>
                    </a>
                </div>
                
                <div class="col-sm-6" > 
                </div>
        
                <div class="col-sm-2" >
                    <input type="submit" value="Submit" name="submit" class="loginButton topSpace">
                </div>
        
                <div class="col-sm-1" > 
                </div>
            </div>

        </form>
        </div>
    </div>   
</body>

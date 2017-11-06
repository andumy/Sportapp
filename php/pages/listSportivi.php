<html>
<head>
    <?php
    require '../scripts/loggedVerify.php';
    require '../scripts/dbconnection.php';
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



<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="scrollBox">
                <div class="displayBox">
                    <div class="container-fluid">
                        <?php

                            $result = $db->query("SHOW TABLES LIKE '".$tableSportivi."'");   

                            if($result->num_rows > 0)
                            {
                                $sql = "SELECT * FROM ".$tableSportivi." WHERE club='".$_SESSION['user']."'";
                                $result = $db->query($sql);
                            
                                if ($result->num_rows > 0) 
                                {
                                    while($row = $result->fetch_assoc())
                                    {
                                        echo "
                                        <div class='row'>
                                            <div class='col-sm-5'>
                                                ".$row['nume']." ".$row['prenume']."
                                            </div>
                                            <div class='col-sm-1'>
                                                ".$row['sex']."
                                            </div>
                                            <div class='col-sm-1'>
                                            ".$row['gradval']." ".$row['grad']."
                                            </div>
                                            <div class='col-sm-1'>
                                            ".$row['greutate']." Kg
                                            </div>
                                            <div class='col-sm-2'>
                                            ".$row['ziNastere']."
                                            </div>

                                            <div class='col-sm-1'>
                                                <a href='../pages/editSportiv.php?hash=".$row['hash']."'>
                                                    <img src='../../assets/Icons/SVG/Edit.svg' class='iconList'>
                                                </a>
                                            </div>
                                            <div class='col-sm-1'>
                                                <a href='../scripts/deleteSportiv.php?hash=".$row['hash']."'>
                                                    <img src='../../assets/Icons/SVG/Delete.svg' class='iconList'>
                                                </a>
                                            </div>
                                        </div>
                                        <div class='row'>
                                            <div class='col-sm-1'>
                                            </div>
                                            
                                            <div class='col-sm-3'>
                                                <div class='clubStyle'>
                                                    ".$row['club']."
                                                </div>
                                            </div>
                                        </div>
                                        ";
                                    }
                                } 
                            }
                                
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-1" > 
        </div>

        <div class="col-sm-2" >
            <a href = "http://localhost/php/pages/dashboard.php">
                <div class="loginButton  divButon">
                      Back
                </div>
            </a>
        </div>
        
        <div class="col-sm-6" > 
        </div>

        <div class="col-sm-2" >
            <a href = "registerSportiv.php">
                <div class="loginButton  divButon">
                    Register Athlete
                </div>
            </a>
        </div>

        <div class="col-sm-1" > 
        </div>
    </div>
</div>

</body>
</html>
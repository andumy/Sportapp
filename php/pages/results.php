<html>
<head>
    <?php
    require '../scripts/loggedVerify.php';
    require '../scripts/dbconnection.php';
    require '../scripts/sessionActivation.php';
    require '../scripts/cat.php';
    ?>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel = "stylesheet" type="text/css" href="../../css/dashboard.css"></link>
    <?php
        $hash = $db->escape_string($_GET['hash']);
        $sql = "SELECT nume FROM ".$tableCompetitii." WHERE hash='".$hash."'";
        $results = $db->query($sql);
        while($row = $results->fetch_assoc())
        {
            $compName = $row['nume'];
        }
    ?>
    <script type="text/javascript" src="../../js/catSlide.js"></script>
    
</head>
<body class="background" onload="displayCat(<?php echo "'".$hash."',".str_replace("\"","'",json_encode($catName)).""; ?>)">


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


<form action="../scripts/savePlaces.php" id="savePlaces" method="POST">
<input type="text" name="update" id="json" style="display:none">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="scrollBox">
                <div class="titleSection">
                    <div onclick="leftCat()" class="catTitle">
                        <?php
                            echo "
                                <svg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' version='1.1' id='Capa_1' x='0px' y='0px' width='512px' height='512px' viewBox='0 0 370.814 370.814' style='enable-background:new 0 0 370.814 370.814;' xml:space='preserve' class='iconList'>
                                    <polygon points='292.92,24.848 268.781,0 77.895,185.401 268.781,370.814 292.92,345.961 127.638,185.401 '/>                            
                                </svg>
                            ";
                        ?>
                    </div>
                        <div class="catTitle">
                            <?php echo $compName;?> 
                            
                            <div id="cat" class="catName">
                                <!-- To be filled from Ajax request -->
                            </div>
                        </div>

                    <div onclick="rightCat()" class="catTitle">  
                        <?php
                        echo "
                            <svg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' version='1.1' id='Layer_1' x='0px' y='0px' viewBox='0 0 407.436 407.436' style='enable-background:new 0 0 407.436 407.436;' xml:space='preserve' width='512px' height='512px' class='iconList'>
                                <polygon points='112.814,0 91.566,21.178 273.512,203.718 91.566,386.258 112.814,407.436 315.869,203.718 '/>
                            </svg>
                        ";
                        ?>
                    </div>
                </div>
                    <div class="displayBox">
                        <div class="container-fluid">
                            <div id="catDisplayBox">
                                <!-- To be filled from Ajax request -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-1" > 
            </div>

            <div class="col-sm-2" >
                <a href = "listCompetitii.php">
                    <div class="loginButton  divButon">
                        Back
                    </div>
                </a>
            </div>
            
            <div class="col-sm-6" > 
            </div>

            <div class="col-sm-2" >
                <?php
                    $sql = "
                        (SELECT Nume FROM ".$tableCluburi." 
                        WHERE cluburiId=
                                (SELECT organizator FROM ".$tableCompetitii." 
                                WHERE hash='".$hash."')
                        )
                    ";
                    $results = $db->query($sql);
                    while($row = $results->fetch_assoc())
                    {
                        if ($row['Nume'] == $_SESSION['user'])
                        echo "
                        
                            <div class='loginButton  divButon' onclick='fetchHash()'>
                                Save Changes
                            </div>

                        ";
                    }
                ?>            
            </div>

            <div class="col-sm-1" > 
            </div>
        </div>
    </div>
</form>
<script>

    

    function fetchHash(){
        var data = new Object();
        var index = 0;
        
        var place = document.getElementById("loc"+index);
        while (typeof(place) != 'undefined' && place != null)
        {
            
            data[index] = new Object();
            data[index].hash = place.name;
            data[index].place = place.value;
            index=index+1;
            place = document.getElementById("loc"+index);
        }
        var jsonData = JSON.stringify(data);
        document.getElementById("json").value = jsonData;
        document.getElementById("savePlaces").submit();
    }
</script>
</body>
</html>
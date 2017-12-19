
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

    <?php
        $hashComp = $db->real_escape_string($_GET["hash"]);
        $dir = $db->real_escape_string($_GET["dir"]);
        $url = ($dir == "kata")? ("../scripts/registerSportiviToKata.php"):("../scripts/registerSportiviToKumite.php");
        $index = 0;
    ?>

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
                <div class="titleSection">
                    <?php
                        $sql = "SELECT * FROM ".$tableCompetitii." WHERE hash='".$hashComp."'";
                        $results = $db->query($sql);

                        while($row = $results->fetch_assoc())
                        {
                            echo $row['nume']." - ".$dir;
                        }
                    ?>
                </div>
                <div class="displayBox">
                    <div class="container-fluid">
                        <?php

                            $result = $db->query("SHOW TABLES LIKE '".$tableSportivi."'");   

                            if($result->num_rows > 0)
                            {
                                $sql = "SELECT * FROM ".$tableCluburi." RIGHT JOIN ".$tableSportivi." ON ".$tableSportivi.".club = ".$tableCluburi.".cluburiId WHERE ".$tableCluburi.".Nume='".$_SESSION['user']."'";
                                $result = $db->query($sql);
                            
                                if ($result->num_rows > 0) 
                                {
                                    while($row = $result->fetch_assoc())
                                    {
                                        $hash = $row['hash'];
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
                                                <div onclick=highlight(".$index.",'".$hash."')>
                                                    <svg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' version='1.1' x='0px' y='0px' viewBox='0 0 288.941 288.941'
                                                        style='enable-background:new 0 0 288.941 288.941;' xml:space='preserve' class='iconList' id='enter".$index++."' >
                                                        <path  d='M285.377,46.368c-4.74-4.704-12.439-4.704-17.179,0L96.309,217.114L20.734,142.61   
                                                        c-4.74-4.704-12.439-4.704-17.179,0s-4.74,12.319,0,17.011l84.2,82.997c4.692,4.644,12.499,4.644,17.191,0l180.43-179.239   
                                                        C290.129,58.687,290.129,51.06,285.377,46.368C280.637,41.664,290.129,51.06,285.377,46.368z'/>  
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class='col-sm-1'>
                                            </div>
                                        </div>
                                        <div class='row'>
                                            <div class='col-sm-1'>
                                            </div>
                                            
                                            <div class='col-sm-3'>
                                                <div class='clubStyle'>
                                                    ".$row['Nume']."
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
            <a href = "http://localhost/php/pages/listCompetitii.php">
                <div class="loginButton  divButon">
                      Back
                </div>
            </a>
        </div>
        
        <div class="col-sm-6" > 
        </div>

        <div class="col-sm-2" >
                <form action=<?php echo "'".$url."'"?> id="registerAthletesFormId" method="post">
                    <input type="text" name="hash" id="hashId"  class="inpts">
                    <input type="text" name="compHash" value=<?php echo "'".$hashComp."'"?> class="inpts">
                </form>
                <div class="loginButton  divButon" onclick="fetchHash()">
                      Register Athletes
                </div>
        </div>

        <div class="col-sm-1" > 
        </div>
    </div>
</div>


<script>
    let active;
    let string = "";
    let stringArray = [];

    (active = []).length = 10000; 
    active.fill(0);
    
    function highlight(index,hash)
    {
        active[index] = !active[index];

        if(active[index])
        {
          document.getElementById("enter"+index).classList.add("checkActive");
          stringArray[index] = "[hash]" + hash + "[/hash]";
        }
        else
        {
          document.getElementById("enter"+index).classList.remove("checkActive");
          stringArray[index] = "";
        }
    }
    function fetchHash(){
       
        document.getElementById("hashId").value = stringArray;
        document.getElementById("registerAthletesFormId").submit();
    }
</script>
</body>
</html>
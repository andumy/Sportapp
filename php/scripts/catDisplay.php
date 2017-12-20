<html>
<head>
<?php
    require '../scripts/loggedVerify.php';
    require '../scripts/dbconnection.php';
    require '../scripts/sessionActivation.php';
    require '../scripts/cat.php';
?>
</head>
<body>
<?php
    $idIndex=0;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $hash = $db->escape_string($_POST['hash']);
        $index = $db->escape_string($_POST['index']);
    }
    $sql = "SELECT * FROM ".$tableCompetitii." WHERE hash='".$hash."'";

    $results = $db->query($sql);

    while($row = $results->fetch_assoc())
    {
        $name = $row['nume'];
    }

    $name = str_replace(' ', '',preg_replace("/[^A-Za-z0-9 ]/", '',$db->real_escape_string($name)));

    $tableCat = "cattable".$name.$cat[$index];
    echo "<input type='text' name='cat' value='".$tableCat."' style='display:none;'></input>";
    $sql = "SELECT * FROM ".$tableCluburi." RIGHT JOIN ".$tableCat." ON ".$tableCat.".club = ".$tableCluburi.".cluburiId ";
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
                        
                    </div>
                    <div class='col-sm-2'>
                    Degree - ".$row['gradval']." ".$row['grad']."
                    </div>
                    <div class='col-sm-1'>
                    
                    </div>";

                    $sql = "
                                        (SELECT Nume FROM ".$tableCluburi." 
                                        WHERE cluburiId=
                                                (SELECT organizator FROM ".$tableCompetitii." 
                                                WHERE hash='".$hash."')
                                        )
                        ";

                    $occurence = $db->query($sql);
                    while($rowOccurence = $occurence->fetch_assoc())
                    {
                        $sql = "SELECT loc FROM ".$tableCat." WHERE hash='".$row['hash']."'";
                        $loc = $db->query($sql);
                        if ($rowOccurence['Nume']==$_SESSION['user'])
                        {
                            
                            while($locVal = $loc->fetch_assoc())
                            {
                                echo "
                                <div class='col-sm-2'>
                                    <form action=''>
                                    Place - <input type='text' name='".$row['hash']."' id='loc".$idIndex."' spellcheck='false' value='".$locVal['loc']."' class='inputLoc'>
                                    </form>
                                </div>
                                ";
                                $idIndex=$idIndex+1;
                            }
                        }
                        else
                        {
                            
                            while($locVal = $loc->fetch_assoc())
                            {
                                echo "
                                <div class='col-sm-1'>
                                    ".$locVal['loc']."
                                </div>
                                ";
                            }
                        }
                    }

                    echo "<div class='col-sm-1'>
                        
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
        
?>
</body>
</html>
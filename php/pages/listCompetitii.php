<html>
<head>
    <?php
    require '../scripts/loggedVerify.php';
    require '../scripts/dbconnection.php';
    require '../scripts/sessionActivation.php';
    ?>
</head>
<body>

<?php

   
$result = $db->query("SHOW TABLES LIKE '".$tableCompetitii."'");   

        if($result->num_rows > 0)
        {
            $sql = "SELECT * FROM ".$tableCompetitii;
            $result = $db->query($sql);
        
            if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
        
            echo  $row["nume"]. "  " . $row["organizator"]. "  " . $row["data"];
                if ($row["organizator"]==$_SESSION['user'])
                {
                    echo "<a href='http://localhost/php/pages/editCompetition.php?hash=".$row['hash']."'>
                            <button>
                                Edit
                            </button>
                          </a>";
                }
            echo "</br>";
            }
            } else {
            echo "<br> 0 results";
        
            }
        
        }
            else 
            {
                echo "<br> 0 results";
            }


?>



<a href="registerCompetitie.php">
    <button>
        Creeare Competitie
    </button>
</a>
<a href="http://localhost/php/pages/dashboard.php">
    <button>
        Back
    </button>
</a>

</body>
</html>
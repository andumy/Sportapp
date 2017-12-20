
<?php
    
    $sql = "SELECT COUNT(sportivID) FROM ".$tableSportivi." 
    WHERE club=(
        SELECT cluburiId FROM ".$tableCluburi." 
        WHERE Nume = '".$_SESSION['user']."'
    )";
    $result = $db->query($sql);
    while($row = $result->fetch_assoc())
    {
       $athletes = $row['COUNT(sportivID)'];
    }

    $gold = 0;
    $silver = 0;
    $bronze = 0;
    $sql = "SELECT nume FROM ".$tableCompetitii;
    $result = $db->query($sql);
    
    while($row = $result->fetch_assoc())
    {
        foreach($cat as $catType)
        {
            $tabName = "cattable".str_replace(' ', '',preg_replace("/[^A-Za-z0-9 ]/", '',$db->real_escape_string($row["nume"]))).$catType;
            
            $sql = "SELECT COUNT(sportivID) FROM ".$tabName."
            WHERE club=(
                SELECT cluburiId FROM ".$tableCluburi." 
                WHERE Nume = '".$_SESSION['user']."'
            ) AND loc='1'
            ";
            $entries = $db->query($sql);
            while($entry = $entries->fetch_assoc())
            {
                $gold+=$entry['COUNT(sportivID)'];
            }

            $sql = "SELECT COUNT(sportivID) FROM ".$tabName."
            WHERE club=(
                SELECT cluburiId FROM ".$tableCluburi." 
                WHERE Nume = '".$_SESSION['user']."'
            ) AND loc='2'
            ";
            $entries = $db->query($sql);
            while($entry = $entries->fetch_assoc())
            {
                $silver+=$entry['COUNT(sportivID)'];
            }

            $sql = "SELECT COUNT(sportivID) FROM ".$tabName."
            WHERE club=(
                SELECT cluburiId FROM ".$tableCluburi." 
                WHERE Nume = '".$_SESSION['user']."'
            ) AND loc='3'
            ";
            $entries = $db->query($sql);
            while($entry = $entries->fetch_assoc())
            {
                $bronze+=$entry['COUNT(sportivID)'];
            }


        }

    }


    

?>
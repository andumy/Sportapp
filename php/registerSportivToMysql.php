<html>
    <head>

    </head>
    <body>
<?php

    $user = 'root';
    $pass = '';
    $tableSportivi = "sportivi";
    $tableCluburi = "cluburi";

    $db = 'competition_database';

    $db = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");


    
    $nume = $prenume = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nume = test_input($_POST["nume"]);
        $prenume = test_input($_POST["prenume"]);
        $sex = test_input($_POST["sex"]);
        $club = test_input($_POST["club"]);
        $ziNastere = test_input($_POST["ziNastere"]);
        $gradval = test_input($_POST["gradval"]);
        $grad = test_input($_POST["grad"]);
        $greutate = test_input($_POST["greutate"]);
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $sportiviCreate = "CREATE TABLE ".$tableSportivi."(
        sportivID int NOT NULL AUTO_INCREMENT,
        nume varchar(50) NOT NULL,
        prenume varchar(50) NOT NULL,
        sex varchar(1) NOT NULL,
        club varchar(50) NOT NULL , 
        ziNastere date NOT NULL,
        greutate int,
        gradval int,
        grad varchar(1),
        PRIMARY KEY (sportivID),
        FOREIGN KEY (club) REFERENCES ".$tableCluburi."(Nume)
        )";
       
    $sportiviInsert = "INSERT INTO ".$tableSportivi."(nume,prenume,sex,club,ziNastere,greutate,gradval,grad)
                        VALUES ('".$nume."','".$prenume."','".$sex."','".$club."','".$ziNastere."','".$greutate."','".$gradval."','".$grad."')";


    $result = $db->query("SHOW TABLES LIKE '".$tableSportivi."'");   

        if($result->num_rows > 0){}
            else {
                if($db->query($sportiviCreate)==TRUE){}
                    else{
                        echo "creation failed <br>". $db->error."<br>";
                    }
                
            }
        
        
        

    if($db->query($sportiviInsert)==TRUE) {}
    else echo "insertion failed <br>".$db->error."<br>";


    $sql = "SELECT * FROM ".$tableSportivi;
    $result = $db->query($sql);

    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    echo  $row["sportivID"]. "  " . $row["nume"]. "  " . $row["prenume"]. "  " . $row["sex"]."  " . $row["club"]."  " . $row["ziNastere"]."  " . $row["greutate"]."  " . $row["gradval"]."  " . $row["grad"]."<br>";
    }
    } else {
    echo "<br> 0 results";

    }
?>
<a href="../index.html">back</a>
</body>

</html>
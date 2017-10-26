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
       
  

    $result = $db->query("SHOW TABLES LIKE '".$tableSportivi."'");   

        if($result->num_rows > 0){}
            else {
                if($db->query($sportiviCreate)==TRUE){}
                    else{
                        echo "creation failed <br>". $db->error."<br>";
                    }
                
            }
        
        
    $sportiviInsert = "INSERT INTO ".$tableSportivi."(nume,prenume,sex,club,ziNastere,greutate,gradval,grad)
                        VALUES ('".$nume."','".$prenume."','".$sex."','".$club."','".$ziNastere."','".$greutate."','".$gradval."','".$grad."')";
    

    if($db->query($sportiviInsert)==TRUE) {
        header("Location: http://localhost/php/pages/listSportivi.php");
        exit;
    }
    else echo "insertion failed <br>".$db->error."<br>";
    


    
?>

<form action="../pages/listSportivi.php">
    <input type="submit" name="back" value="Back">
</form>
</body>
</html>
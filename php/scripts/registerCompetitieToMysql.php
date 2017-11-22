<?php

require 'dbconnection.php';
require 'sessionActivation.php';



    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $spnume = str_replace(' ', '',preg_replace("/[^A-Za-z0-9 ]/", '',$db->real_escape_string($_POST["nume"])));
        
        $nume = $db->real_escape_string($_POST["nume"]);
        $data = $db->real_escape_string($_POST["data"]);
        $organizator = $_SESSION['id'];
        $hash = md5(rand(0,1000));
    }
    
   
    

    $kataCreate = "CREATE TABLE cattable".$spnume."KataU18F(
        sportivID int NOT NULL AUTO_INCREMENT,
        nume varchar(50) NOT NULL,
        prenume varchar(50) NOT NULL,
        sex varchar(1) NOT NULL,
        club int NOT NULL , 
        ziNastere date NOT NULL,
        greutate int,
        gradval int,
        grad varchar(4),
        loc int(3),
        hash varchar(50) NOT NULL,
        PRIMARY KEY (sportivID),
        FOREIGN KEY (club) REFERENCES ".$tableCluburi." (cluburiId)
        )";
    $db->query($kataCreate);

    $kataCreate = "CREATE TABLE cattable".$spnume."KataP18F(
        sportivID int NOT NULL AUTO_INCREMENT,
        nume varchar(50) NOT NULL,
        prenume varchar(50) NOT NULL,
        sex varchar(1) NOT NULL,
        club int NOT NULL , 
        ziNastere date NOT NULL,
        greutate int,
        gradval int,
        grad varchar(4),
        loc int(3),
        hash varchar(50) NOT NULL,
        PRIMARY KEY (sportivID),
        FOREIGN KEY (club) REFERENCES ".$tableCluburi." (cluburiId)
        )";
    $db->query($kataCreate);

    $kataCreate = "CREATE TABLE cattable".$spnume."KataU18M(
        sportivID int NOT NULL AUTO_INCREMENT,
        nume varchar(50) NOT NULL,
        prenume varchar(50) NOT NULL,
        sex varchar(1) NOT NULL,
        club int NOT NULL , 
        ziNastere date NOT NULL,
        greutate int,
        gradval int,
        grad varchar(4),
        loc int(3),
        hash varchar(50) NOT NULL,
        PRIMARY KEY (sportivID),
        FOREIGN KEY (club) REFERENCES ".$tableCluburi." (cluburiId)
        )";
    $db->query($kataCreate);

    $kataCreate = "CREATE TABLE cattable".$spnume."KataP18M(
        sportivID int NOT NULL AUTO_INCREMENT,
        nume varchar(50) NOT NULL,
        prenume varchar(50) NOT NULL,
        sex varchar(1) NOT NULL,
        club int NOT NULL , 
        ziNastere date NOT NULL,
        greutate int,
        gradval int,
        grad varchar(4),
        loc int(3),
        hash varchar(50) NOT NULL,
        PRIMARY KEY (sportivID),
        FOREIGN KEY (club) REFERENCES ".$tableCluburi." (cluburiId)
        )";
    $db->query($kataCreate);

    $kumiteCreate = "CREATE TABLE cattable".$spnume."KumiteU18F(
        sportivID int NOT NULL AUTO_INCREMENT,
        nume varchar(50) NOT NULL,
        prenume varchar(50) NOT NULL,
        sex varchar(1) NOT NULL,
        club int NOT NULL , 
        ziNastere date NOT NULL,
        greutate int,
        gradval int,
        grad varchar(4),
        loc int(3),
        hash varchar(50) NOT NULL,
        PRIMARY KEY (sportivID),
        FOREIGN KEY (club) REFERENCES ".$tableCluburi." (cluburiId)
        )";
    $db->query($kumiteCreate);
    
    $kumiteCreate = "CREATE TABLE cattable".$spnume."KumiteP18F(
        sportivID int NOT NULL AUTO_INCREMENT,
        nume varchar(50) NOT NULL,
        prenume varchar(50) NOT NULL,
        sex varchar(1) NOT NULL,
        club int NOT NULL , 
        ziNastere date NOT NULL,
        greutate int,
        gradval int,
        grad varchar(4),
        loc int(3),
        hash varchar(50) NOT NULL,
        PRIMARY KEY (sportivID),
        FOREIGN KEY (club) REFERENCES ".$tableCluburi." (cluburiId)
        )";
    $db->query($kumiteCreate);

    $kumiteCreate = "CREATE TABLE cattable".$spnume."KumiteU18M(
        sportivID int NOT NULL AUTO_INCREMENT,
        nume varchar(50) NOT NULL,
        prenume varchar(50) NOT NULL,
        sex varchar(1) NOT NULL,
        club int NOT NULL , 
        ziNastere date NOT NULL,
        greutate int,
        gradval int,
        grad varchar(4),
        loc int(3),
        hash varchar(50) NOT NULL,
        PRIMARY KEY (sportivID),
        FOREIGN KEY (club) REFERENCES ".$tableCluburi." (cluburiId)
        )";
    $db->query($kumiteCreate);
    
    $kumiteCreate = "CREATE TABLE cattable".$spnume."KumiteP18M(
        sportivID int NOT NULL AUTO_INCREMENT,
        nume varchar(50) NOT NULL,
        prenume varchar(50) NOT NULL,
        sex varchar(1) NOT NULL,
        club int NOT NULL , 
        ziNastere date NOT NULL,
        greutate int,
        gradval int,
        grad varchar(4),
        loc int(3),
        hash varchar(50) NOT NULL,
        PRIMARY KEY (sportivID),
        FOREIGN KEY (club) REFERENCES ".$tableCluburi." (cluburiId)
        )";
    $db->query($kumiteCreate);

    $competitiiCreate = "CREATE TABLE ".$tableCompetitii."(
        competitieID int NOT NULL AUTO_INCREMENT,
        nume varchar(50) NOT NULL,
        organizator int NOT NULL,
        data date NOT NULL,
        hash varchar(50) NOT NULL,
        PRIMARY KEY (competitieID),
        FOREIGN KEY (organizator) REFERENCES ".$tableCluburi." (cluburiId)
        )";

    $result = $db->query("SHOW TABLES LIKE '".$tableCompetitii."'");   

        if($result->num_rows > 0)
        {

        }
            else 
            {
                if($db->query($competitiiCreate)==TRUE)
                {

                }
                    else{
                        echo "creation failed <br>". $db->error."<br>";
                    }
                
            }
        

    $competitiiInsert = "INSERT INTO ".$tableCompetitii."(nume,organizator,data,hash)
                        VALUES ('".$nume."','".$_SESSION['id']."','".$data."','".$hash."')";
    

    if($db->query($competitiiInsert)==TRUE) {
        

         $_SESSION['message'] = "Succesfully register";
         header("Location: http://localhost/php/pages/succes.php");
    }
    else 
    {
        $_SESSION['message'] = "Unsuccesfully register, please retry";
         header("Location: http://localhost/php/pages/error.php");
    }


    
?>

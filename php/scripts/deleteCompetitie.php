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
    $hash = $db->escape_string($_GET['hash']);
    
    $sql = "SELECT nume FROM ".$tableCompetitii." WHERE hash='".$hash."'";
    $results = $db->query($sql);

    while($row = $results->fetch_assoc())
    {
        $nume = $row['nume'];
    } 
    $spnume = str_replace(' ', '',preg_replace("/[^A-Za-z0-9 ]/", '',$nume));
    
    $sql = "DROP TABLE ".$spnume."katap18f";
    $db->query($sql);
    $sql = "DROP TABLE ".$spnume."katau18f";
    $db->query($sql);
    $sql = "DROP TABLE ".$spnume."katap18m";
    $db->query($sql);
    $sql = "DROP TABLE ".$spnume."katau18m";
    $db->query($sql);
    $sql = "DROP TABLE ".$spnume."kumitep18f";
    $db->query($sql);
    $sql = "DROP TABLE ".$spnume."kumiteu18f";
    $db->query($sql);
    $sql = "DROP TABLE ".$spnume."kumitep18m";
    $db->query($sql);
    $sql = "DROP TABLE ".$spnume."kumiteu18m";
    $db->query($sql);

    $sql = "DELETE FROM ".$tableCompetitii."  WHERE hash='".$hash."'";
    
    if($db->query($sql)==TRUE)
    {
        $_SESSION['message'] = "The competition was removed";
        header("Location: http://localhost/php/pages/succes.php");
        
    }
    else
    {   
        $_SESSION['message'] = "The competition was removed, please retry";
        header("Location: http://localhost/php/pages/error.php");
    }
?>
</body>
</html>
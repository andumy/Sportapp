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
    
    $sql = "DELETE FROM ".$tableCompetitii."  WHERE hash='".$hash."'";
    
    if($db->query($sql)==TRUE)
    {
        $_SESSION['message'] = "Competitia a fost stearsa";
        header("Location: http://localhost/php/pages/succes.php");
        
    }
    else
    {   
        $_SESSION['message'] = "Competitia nu a fost stearsa. Va rugam reincercati";
        header("Location: http://localhost/php/pages/error.php");
    }
?>
</body>
</html>
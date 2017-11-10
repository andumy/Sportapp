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
    
    $sql = "DELETE FROM ".$tableArbitrii."  WHERE hash='".$hash."'";
    
    if($db->query($sql)==TRUE)
    {
        $_SESSION['message'] = "The athlete was removed";
        header("Location: http://localhost/php/pages/succes.php");
        
    }
    else
    {   
        $_SESSION['message'] = "The athlete was not removed, please retry";
        header("Location: http://localhost/php/pages/error.php");
    }
?>
</body>
</html>
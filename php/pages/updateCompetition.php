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
    $nume = $db->escape_string($_POST['nume']);
    $data = $db->escape_string($_POST['data']);
    $hash = $db->escape_string($_GET['hash']);
    
    $sql = "UPDATE ".$tableCompetitii." SET nume='".$nume."' AND data='".$data."' WHERE hash='".$hash."'";
    
    if($db->query($sql)==TRUE)
    {
        $_SESSION['message'] = "Competitia a fost updatata";
        header("Location: http://localhost/php/pages/succes.php");
        
    }
    else
    {   
        $_SESSION['message'] = "Competitia nu a fost updatata. Va rugam reincercati";
        header("Location: http://localhost/php/pages/error.php");
    }
?>
</body>
</html>
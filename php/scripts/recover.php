
<?php
require 'dbconnection.php';
require 'sessionActivation.php';


if(isset($_GET['email'])&&!empty($_GET['email'])&&isset($_GET['hash'])&&!empty($_GET['hash']))
{
    $mail=$db->escape_string(substr($_GET["email"], 1, -1));
    $hash=$db->escape_string(substr($_GET["hash"], 1, -1));
   
    
    $sql = "SELECT * FROM ".$tableCluburi." WHERE mail='".$mail."' AND hash='".$hash."'";
    
    $results = $db->query($sql);

    if($results->num_rows > 0)
    {
        $_SESSION['mail'] = $mail;
        header("Location: http://localhost/php/pages/changePass.php");
    }
    else{
         $_SESSION['message']= "Cont deja activat sau link eronat";
         header("Location: http://localhost/php/pages/error.php");
    }
}
else
{
    $_SESSION['message']= "Link eronat";
   header("Location: http://localhost/php/pages/error.php");
}

?>


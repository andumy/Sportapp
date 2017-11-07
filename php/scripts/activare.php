
<?php
require 'dbconnection.php';
require 'sessionActivation.php';


if(isset($_GET['email'])&&!empty($_GET['email'])&&isset($_GET['hash'])&&!empty($_GET['hash']))
{
    $mail=$db->escape_string($_GET["email"]);
    $hash=$db->escape_string($_GET["hash"]);
   
   
    $sql = "SELECT * FROM ".$tableCluburi." WHERE mail='".$mail."' AND hash='".$hash."' AND active='0' ";
    
    $results = $db->query($sql);

    if($results->num_rows > 0)
    {
        $sql = "UPDATE ".$tableCluburi." SET active='1' WHERE mail='".$mail."'";
        $db->query($sql);
         $_SESSION['message']= "Your account is active now";
         header("Location: http://localhost/php/pages/succes.php");
    }
    else{
         $_SESSION['message']= "Wrong link or already activated account";
         header("Location: http://localhost/php/pages/error.php");
    }
}
else
{
    $_SESSION['message']= "Wrong link";
   header("Location: http://localhost/php/pages/error.php");
}

?>


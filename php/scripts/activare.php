<?php
require 'dbconnection.php';
session_start();


if(isset($_GET['email'])&&!empty($_GET['email'])&&isset($_GET['hash'])&&!empty($_GET['hash']))
{
    $mail=$db->escape_string(substr($_GET["email"], 1, -1));
    $hash=$db->escape_string(substr($_GET["hash"], 1, -1));
   
    
    $sql = "SELECT * FROM ".$tableCluburi." WHERE mail='".$mail."' AND hash='".$hash."' AND active='0' ";
    if(!$db->query($sql))
    echo $db->error;
    $results = $db->query($sql);

    if($results->num_rows > 0)
    {
        $sql = "UPDATE ".$tableCluburi." SET active='1' WHERE mail='".$mail."'";
        if(!$db->query($sql))
        echo $db->error;
        echo "Contul dumneavoastra a fost activat";
    }
    else{
        echo "Cont deja activat sau link eronat";
    }
}
else
{
    echo "Link eronat";
}

?>


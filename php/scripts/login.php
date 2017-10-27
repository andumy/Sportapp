
<?php
require 'dbconnection.php';
session_start();


$nume = $prenume = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $db->real_escape_string($_POST["user"]);
    $pass = md5($db->real_escape_string($_POST["pass"]));
}



$sql = " SELECT * FROM ".$tableCluburi." WHERE Nume='".$user."' AND parola='".$pass."'";

if($db->query($sql) == TRUE){}
    else{
        echo $db->error;
    }
$result = $db->query($sql);

if($result->num_rows > 0){

    header("Location: http://localhost/php/pages/dashboard.php");
}
else {
    header("Location: http://localhost");
    
}

?>

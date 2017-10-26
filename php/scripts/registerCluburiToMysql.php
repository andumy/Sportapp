
<?php

$user = 'root';
$pass = '';
$tableSportivi = "sportivi";
$tableCluburi = "cluburi";
$db = 'competition_database';
$db = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");

$nume = $prenume = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = test_input($_POST["user"]);
    $pass = md5(test_input($_POST["pass"]));
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


$sql = "INSERT INTO ".$tableCluburi."(Nume,parola,Sportivi)
        VALUES ('".$user."','".$pass."',0)";
if($db->query($sql) == TRUE){
    include("../../html/confirm.html");
}
    else{
        echo $db->error;
        include("../../html/confirm.html");
    }

?>



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

$sql = " SELECT * FROM ".$tableCluburi." WHERE Nume='".$user."' AND parola='".$pass."'";

if($db->query($sql) == TRUE){}
    else{
        echo $db->error;
    }
$result = $db->query($sql);

if($result->num_rows > 0){
    include("../pages/dashboard.php");
}
else {
    echo "login failed";
    include("../../html/confirm.html");
}

?>

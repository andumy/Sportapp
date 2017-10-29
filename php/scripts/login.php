
<?php
require 'dbconnection.php';
require 'sessionActivation.php';


$nume = $prenume = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $db->real_escape_string($_POST["user"]);
    $pass = md5($db->real_escape_string($_POST["pass"]));
}



$sql = " SELECT * FROM ".$tableCluburi." WHERE Nume='".$user."' AND parola='".$pass."' AND active='1'";


$result = $db->query($sql);

if($result->num_rows > 0){
    header("Location: http://localhost/php/pages/dashboard.php");
    $_SESSION['user']=$user;
    $_SESSION['logged']=1;
    
}
else {
    $_SESSION['message']="Cont inactiv sau inexistent";
    header("Location: http://localhost/php/pages/error.php");
    
}

?>

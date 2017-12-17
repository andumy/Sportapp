
<?php
require 'dbconnection.php';
require 'sessionActivation.php';


$nume = $prenume = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $db->real_escape_string($_POST["user"]);
    $pass = md5($db->real_escape_string($_POST["pass"]));
}



$sql = " SELECT * FROM ".$tableCluburi." WHERE BINARY Nume='".$user."' AND parola='".$pass."' AND active='1'";


$result = $db->query($sql);

if($result->num_rows > 0){
    while($row=$result->fetch_assoc())
    {
        $_SESSION['user']=$user;
        $_SESSION['mail']=$row['mail'];
        $_SESSION['logged']=1;
        $_SESSION['hash'] = $row['hash'];
        $_SESSION['id'] = $row['cluburiId'];
    }
    header("Location: http://localhost/php/pages/dashboard.php");
}
else {
    $_SESSION['message']="Wrong link or already activated account";
    header("Location: http://localhost/php/pages/error.php");
    
}

?>

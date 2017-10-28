
<?php
require 'dbconnection.php';
session_start();

    $_SESSION['user']=NULL;
    $_SESSION['logged']=0;
    
 header("Location: http://localhost");

?>

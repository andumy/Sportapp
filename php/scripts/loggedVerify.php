<?php
require 'dbconnection.php';
require 'sessionActivation.php';

if ($_SESSION['logged']==0)
{
    header("Location: http://localhost");
    exit;
}

?>
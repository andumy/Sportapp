<?php
require 'dbconnection.php';
require 'sessionActivation.php';

if(isset($_SESSION['logged']))
if ($_SESSION['logged']==1)
{
    header("Location: http://localhost/php/pages/dashboard.php");
    exit;
}
?>
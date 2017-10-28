<?php
require 'dbconnection.php';
session_start();

if ($_SESSION['logged']==1)
{
    header("Location: http://localhost/php/pages/dashboard.php");
    exit;
}
?>
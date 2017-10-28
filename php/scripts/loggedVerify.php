<?php
require 'dbconnection.php';
session_start();

if ($_SESSION['logged']==0)
{
    header("Location: http://localhost");
    exit;
}

?>
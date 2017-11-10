<?php
$user = 'root';
$pass = '';
$tableSportivi = "sportivi";
$tableCluburi = "cluburi";
$tableCompetitii = "competitii";
$tableArbitrii = "arbitrii";

$db = 'competition_database';
$db = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");

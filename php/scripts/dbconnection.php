<?php
$user = 'root';
$pass = '';
$tableSportivi = "sportivi";
$tableCluburi = "cluburi";
$db = 'competition_database';
$db = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");

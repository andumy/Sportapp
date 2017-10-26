<html>
<head>
</head>
<body>
<?php

 $user = 'root';
    $pass = '';
    $tableSportivi = "sportivi";
    $tableCluburi = "cluburi";

    $db = 'competition_database';

    $db = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");


$sql = "SELECT * FROM ".$tableSportivi;
    $result = $db->query($sql);

    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

    echo  $row["sportivID"]. "  " . $row["nume"]. "  " . $row["prenume"]. "  " . $row["sex"]."  " . $row["club"]."  " . $row["ziNastere"]."  " . $row["greutate"]."  " . $row["gradval"]."  " . $row["grad"]."<br>";
    }
    } else {
    echo "<br> 0 results";

    }
?>
<form action="registerSportiv.php">
           <input type="submit" name="inregistraresportivi" value="Inregistrare Sportivi">
</form>
<form action="dashboard.php">
           <input type="submit" name="dashboard" value="Back">
</form>
</body>
</html>
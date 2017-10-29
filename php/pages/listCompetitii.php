<html>
<head>
    <?php
    require '../scripts/loggedVerify.php';
    require '../scripts/dbconnection.php';
    session_start();
    ?>
</head>
<body>
<?php

   


$sql = "SELECT * FROM ".$tableSportivi." WHERE club='".$_SESSION['mail']."'";
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
<a href="registerCompetitie.php">
    <button>
        Creeare Competitie
    </button>
</a>
<a href="http://localhost/php/pages/dashboard.php">
    <button>
        Back
    </button>
</a>

</body>
</html>
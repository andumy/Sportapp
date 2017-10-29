<?php
require 'dbconnection.php';
require 'sessionActivation.php';


if (isset($_GET['dropdownValues']))
    {
        $dropdownValues = $_GET['dropdownValues'];
    }
;

$sql = "SELECT Nume FROM ".$tableCluburi;

$result = $db->query($sql);

if ($result->num_rows > 0) {
// output data of each row
        while($row = $result->fetch_assoc()) {
            
            echo "<option value='".$row['Nume']."' name='".$row['Nume']."'>".$row['Nume']."</option></br>";
        }
    }
   
?>
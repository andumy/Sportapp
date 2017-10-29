<html>
<head>
<?php
require '../scripts/dbconnection.php';
require '../scripts/sessionActivation.php';

?>
</head>
<body>
<?php

echo $_SESSION['message'];
?>
</br>
<a href="http://localhost/php/pages/dashboard.php">
    <button>
        Back
    </button>
</a>
</body>
</html>
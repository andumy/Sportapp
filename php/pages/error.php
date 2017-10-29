<html>
<head>
</head>
<body>
<?php
require '../scripts/dbconnection.php';
require '../scripts/sessionActivation.php';

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
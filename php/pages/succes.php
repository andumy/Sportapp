<html>
<head>
</head>
<body>
<?php
require '../scripts/dbconnection.php';
session_start();
if(isset($_SESSION['message'])&&!empty($_SESSION['message']))
{
    echo $_SESSION['message'];
}
else
{
    header("Location: http://localhost/php/pages/dashboard.php");
}
?>
</br>
<a href="http://localhost/php/pages/dashboard.php">
    <button>
        Back
    </button>
</a>
</body>
</html>
<html>
<head>
<?php
require '../scripts/sessionActivation.php';
?>
</head>
<body>
        <form action="../scripts/sendRecoverMail.php" method="POST">
            <br>Username or Email<br>
            <input type="text" name="data">
            <input type="submit" value="Recover" name="Recover">
        </form>
</body>
</html>


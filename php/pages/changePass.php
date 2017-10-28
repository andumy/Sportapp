<html>
<head>
    <?php
        require '../scripts/dbconnection.php';
        session_start();
    ?>
</head>
<body>
        <form action="../scripts/updatePass.php" method="POST">
            
            <br>New Password<br>
            <input type="password" name="pass">
            <br>
            <input type="submit" value="Register" name="register">
        </form>
</body>
</html>


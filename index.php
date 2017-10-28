<html>

<head>
    <?php
    require 'php/scripts/homeRedirect.php';
    ?>
</head>
<body>
    <form action="php/scripts/login.php" method="POST">
        <br>Username<br>
        <input type="text" name="user">
        <br>Password<br>
        <input type="password" name="pass">
        <br>
        <input type="submit" value="Login" name="login">
    </form>
        <a href="php/pages/registerCluburi.php"><button>Register</button></a>   
        <a href="php/pages/forget.php"><button>Forget Pasword</button></a>   
    
</body>
</html>
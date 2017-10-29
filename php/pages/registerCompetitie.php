<html>
<head>
    <?php
    require '../scripts/loggedVerify.php';
    require '../scripts/sessionActivation.php';
    ?>


</head>
<body>
    <form action="../scripts/registerCompetitieToMysql.php" method="POST">
          Nume </br>
        <input type="text" name="nume">     
    </br> Data nasterii </br>
        <input type="date" name="data">
        
        <input type="submit" name="submit">

    </form>
</body>
<a href="http://localhost/php/pages/listCompetitii.php">
    <button>
        Back
    </button>
</a>
</html>
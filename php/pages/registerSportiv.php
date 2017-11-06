<html>
<head>
    <?php
    require '../scripts/loggedVerify.php';
    require '../scripts/sessionActivation.php';
    ?>
<!--<script src="../../js/dropdown.js"></script>-->

</head>
<body>
    <form action="../scripts/registerSportivToMysql.php" method="POST">
          Nume </br>
        <input type="text" name="nume">
    </br> Prenume </br>
        <input type="text" name="prenume">
    <!--</br> Club </br>
    <select name="club" id="club">
    </select>-->
    </br> 
        M &nbsp; F </br>
        <input type="radio" name="sex" value="M">    
        <input type="radio" name="sex" value="F">
    </br>     
    </br> Data nasterii </br>
        <input type="date" name="ziNastere">
    </br>
        Grad &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;KYU  DAN </br>
        <input type="text" name="gradval">
        <input type="radio" name="grad" value="Kyu">    
        <input type="radio" name="grad" value="Dan">
    </br> Greutate </br>
    <input type="text" name="greutate">
    </br>
        
        <input type="submit" name="submit">

    </form>
</body>
<a href="http://localhost/php/pages/listSportivi.php">
    <button>
        Back
    </button>
</a>
</html>
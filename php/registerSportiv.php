<html>
<head>
<script src="../js/dropdown.js"></script>

</head>
<body>
    <form action="registerSportivToMysql.php" method="POST">
          Nume </br>
        <input type="text" name="nume">
    </br> Prenume </br>
        <input type="text" name="prenume">
    </br> Club </br>
    <select name="club" id="club">
    </select>
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
        <input type="radio" name="grad" value="K">    
        <input type="radio" name="grad" value="D">
    </br> Greutate </br>
    <input type="text" name="greutate">
    </br>
        
        <input type="submit" name="submit">

    </form>
</body>
</html>
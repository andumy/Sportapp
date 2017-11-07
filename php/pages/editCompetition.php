<html>
<head>
    <?php
    require '../scripts/loggedVerify.php';
    require '../scripts/sessionActivation.php';
   $link = "<form action='../scripts/updateCompetition.php?hash=".$_GET['hash']."' method='POST'>";
   echo $link;
   ?>


</head>
<body>
    
          Nume </br>
        <input type="text" name="nume">     
    </br> Data Competitiei </br>
        <input type="date" name="data">
        
        <input type="submit" name="submit">

    </form>
</body>
<a href="http://localhost/php/pages/listCompetitii.php">
    <button>
        Back
    </button>
</a>
<?php
 $link = "<form action='../scripts/deleteCompetition.php?hash=".$_GET['hash']."' method='POST'>";
 echo $link;
?>
    <input type="submit" name="Delete" value="Delete">
</form>
</html>
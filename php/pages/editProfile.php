<html>
<head>
    <?php
    require '../scripts/sessionActivation.php';
    ?>
    <link rel = "stylesheet" type="text/css" href="../../css/mainPanel.css"></link>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>
<body class="background">
    <div class="container">
        <div class="row">
            <div class = "col-sm-4 col-sm-offset-4">
            <img src="../../assets/logo.svg" alt="logo" class="logo">
            </div>
        </div>
        <form action='../scripts/updateCluburi.php' method='POST'>
            <div class = "row">    

                <div class = "col-sm-4">
                    <label for="user" class="label">Username</label>
                    <?php
                        echo "<input type='text' name='user' placeholder='".$_SESSION['user']."' value='".$_SESSION['user']."'>"
                    ?>
                </div>

                <div class = "col-sm-4 ">
                    <label for="pass" class="label">Password</label>
                    <input type="password" name="pass" placeholder="Click to change" class="inpts">
                </div>

                <div class = "col-sm-4">
                    <label for="email" class="label">Email</label>
                    <?php
                        echo "<input type='mail' name='email' placeholder='".$_SESSION['mail']."' value='".$_SESSION['mail']."'>"
                    ?>
                </div>
                    
            </div>
            <div class = "row">  
                <div class = "col-sm-8">
                </div>

                <div class = "col-sm-2">
                </div>

                <div class = "col-sm-2">
                </div>
            </div>
            <div class = "row">  
                <div class = "col-sm-4">
                </div>

                <div class = "col-sm-4">
                     <input type="submit"  value="Save" name="save" class="loginButton">
                     </br>
                     <div class="register"> <a href="http://localhost">Back</a> </div>
                </div>

                <div class = "col-sm-4">
                </div>

            </div>
        </form>
         
        </div>
    </div>
</body>

</html>


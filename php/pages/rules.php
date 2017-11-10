<html>
<head>
    <?php
    require '../scripts/loggedVerify.php';
    require '../scripts/dbconnection.php';
    require '../scripts/sessionActivation.php';
    ?>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel = "stylesheet" type="text/css" href="../../css/dashboard.css"></link>

</head>
<body class="background">


<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
        <a class="navbar-brand" href="http://localhost/php/pages/dashboard.php">
            <img src="../../assets/logo.svg" alt="logo" class="logo">
        </a>
    </div>

    <ul class="nav navbar-nav navbar-right">
        <?php
        echo "<li><a href='http://localhost/php/pages/editProfile.php' class='hello'>Hello ".$_SESSION['user']."</a></li>";
        ?>
        <li><a href="http://localhost/php/scripts/logout.php" class="logout">Log Out</a></li>
    </ul>
  </div>
</nav>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="scrollBox">
                <div class="displayBox rules">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac porta ex, in commodo augue. 
                Maecenas feugiat gravida purus at egestas. Curabitur vitae interdum erat. 
                Integer ac lacinia lectus, eget suscipit ligula. Suspendisse vestibulum arcu orci, at tempor 
                tortor rhoncus ut. Nulla eu nibh varius, gravida nibh sed, porttitor orci. Etiam accumsan egestas egestas. 
                Nullam posuere mattis libero, ut porttitor arcu maximus vel. Praesent pharetra libero est, in sagittis 
                nisl tristique sed. Mauris vitae libero non leo sollicitudin pellentesque ac eu ipsum.
                Suspendisse eleifend leo lectus, aliquam efficitur felis vestibulum et. Orci varius natoque penatibus et
                magnis dis parturient montes, nascetur ridiculus mus. Quisque eget mi tincidunt, congue ex in, lobortis urna.
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-1">
        </div>

        <div class="col-sm-2">
            <a href = "http://localhost/php/pages/dashboard.php">
                <div class="loginButton  divButon">
                      Back
                </div>
            </a>
        </div>

        <div class="col-sm-9">
        </div>
    </div>
</div>

</body>
</html>
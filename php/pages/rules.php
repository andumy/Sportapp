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
            <div class="titleSection">
                <?php
                     echo "Rules";
                ?>
            </div>
                <div class="displayBox rules">
                Kumite (組手) literally translated means "grappling hands" and is one of the three main sections of karate training, along with kata and kihon. Kumite is the part of karate in which a person trains against an adversary, using the techniques learned from the kihon and kata.[1]
                
                Kumite can be used to develop a particular technique or a skill (e.g. effectively judging and adjusting one's distance from one's opponent) or it can be done in competition
                Points[edit]
                Most high school karate associations use the following point scheme:

                1 point: punching to chest and stomach.
                2 points: Back Slap Kick.
                3 points: face slap kick.
                International competition under the World Karate Federation also includes the following point scoring:

                2 points: punching or kicking the adversary's back.
                3 points: for a sweep/takedown with a follow up technique such as a stomp or a punch. (Any sweep/takedown that is not followed up with a technique may be ruled to be a dangerous technique that can result in a warning against the instigator of that sweep/takedown.)
                </br></br>
                Kata (型 or 形 literally: "form"), a Japanese word, are detailed choreographed patterns of movements practiced either solo or in pairs. The term form is used for the corresponding concept in non-Japanese martial arts in general.[1]

                Kata are used in many traditional Japanese arts such as theatre forms like kabuki and schools of tea ceremony (chado), but are most commonly known for the presence in the martial arts. Kata are used by most Japanese and Okinawan martial arts, such as aikido, judo, kendo, kempo, and karate.
                The most popular image associated with kata is that of a karate practitioner performing a series of punches and kicks in the air. The kata are executed as a specified series of approximately 20 to 70 moves, generally with stepping and turning, while attempting to maintain perfect form. There are perhaps 100 kata across the various forms of karate, each with many minor variations. The number of moves in a kata may be referred to in the name of the kata, e.g., Gojū Shiho, which means "54 steps." The number of moves may also have links with Buddhist spirituality. The number 108 is significant in Buddhism & Hinduism, and kata with 54, 36, or 27 moves (divisors of 108) are common. The practitioner is generally counselled to visualize the enemy attacks, and his responses, as actually occurring, and karateka are often told to "read" a kata, to explain the imagined events. Kata can contain techniques beyond the superficially obvious ones. The study of the meaning of the movements is referred to as the bunkai, meaning analysis, of the kata.[4]

One explanation of the use of kata is as a reference guide for a set of moves. Not to be used following that "set" pattern but to keep the movements "filed". After learning these kata, this set of learned skills can then be used in a sparring scenario (particularly without points). The main objective here is to try out different combinations of techniques in a safe, practice environment to ultimately find out how to defeat your opponent.[citation needed]




Koshiki-no-kata by Kano(l) and Yamashita(r)
Recently, with the spread of Extreme Martial arts or XMA, a style of kata called CMX kata has formed.[citation needed] These kata are performed in tournaments and include gymnastics related elements, such as backflips, cartwheels, and splits.[citation needed] These kata can also be performed with weapons
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
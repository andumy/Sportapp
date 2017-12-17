<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/main.css"></link>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Raleway:100,300,400,900" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="  crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/main.js"></script>
    
</head>
<body onload="initialDisplay(),slide()" >
    <nav class="navbar navbar-light navbar-transparent fixed-bottom">
            <div class="navbar-nav">
                
                <a class="nav-item nav-link" id="link0" onclick="activate(0)">3D Graphics</a>
                <a class="nav-item nav-link" id="link1" onclick="activate(1)">Branding</a>
                <a class="nav-item nav-link" id="link2" onclick="activate(2)">
                    <div class="logoAboutMe" id="logo">
                        <?php echo file_get_contents("assets/logo.svg"); ?>
                    </div> 
                </a>
                <a class="nav-item nav-link" id="link3" onclick="activate(3)">Web development</a>
                <a class="nav-item nav-link" id="link4" onclick="activate(4)">OOP</a>
            </div>
    </nav>

        <div id="graphics">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12">
                        GRAPH
                    </div>
                </div>
            </div>
        </div> 
        <div id="branding">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12">
                        BRAND
                    </div>
                </div>
            </div>
        </div>
        <div id="aboutme">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-5 offset-2 col-sm-5 offset-sm-2 col-md-5 offset-md-1 col-lg-3 offset-lg-1 col-xl-3 offset-xl-1">
                        <div id="portrait" class="portrait">
                                <?php echo file_get_contents("assets/face.svg"); ?>
                        </div>
                    </div>
                    <div class="hidden-sm-down col-md-6 col-lg-8 col-xl-7">
                        <div id="headline" class="headline">
                            ANDREI
                            </br>
                            DUMITRESCU
                            <div id="subheadline" class="subheadline ">
                                FULL STACK WEB DEVELOPER</br>
                                SOFTWARE ENGINEER</br>
                                3D ARTIST & ANIMATOR
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-12 hidden-md-up">
                        <div class="headline">
                            ANDREI
                            </br>
                            DUMITRESCU
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="webdevelopment">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12">
                        WEB
                    </div>
                </div>
            </div>
        </div>
        <div id="oop">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12">
                        OOP
                    </div>
                </div>
            </div>
        </div>

    
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</body>
</html>
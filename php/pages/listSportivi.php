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
                <div class="displayBox">
                    <div class="container-fluid">
                        <?php

                            $result = $db->query("SHOW TABLES LIKE '".$tableSportivi."'");   

                            if($result->num_rows > 0)
                            {
                                $sql = "SELECT * FROM ".$tableSportivi." WHERE club='".$_SESSION['user']."'";
                                $result = $db->query($sql);
                            
                                if ($result->num_rows > 0) 
                                {
                                    while($row = $result->fetch_assoc())
                                    {
                                        echo "
                                        <div class='row'>
                                            <div class='col-sm-5'>
                                                ".$row['nume']." ".$row['prenume']."
                                            </div>
                                            <div class='col-sm-1'>
                                                ".$row['sex']."
                                            </div>
                                            <div class='col-sm-1'>
                                            ".$row['gradval']." ".$row['grad']."
                                            </div>
                                            <div class='col-sm-1'>
                                            ".$row['greutate']." Kg
                                            </div>
                                            <div class='col-sm-2'>
                                            ".$row['ziNastere']."
                                            </div>

                                            <div class='col-sm-1'>
                                                <a href='../pages/editSportiv.php?hash=".$row['hash']."'>
                                                    <svg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' version='1.1' id='Capa_1' x='0px' y='0px' viewBox='0 0 55.25 55.25' xml:space='preserve' width='512px' height='512px' class='iconList'>
                                                        <path d='M52.618,2.631c-3.51-3.508-9.219-3.508-12.729,0L3.827,38.693C3.81,38.71,3.8,38.731,3.785,38.749  c-0.021,0.024-0.039,0.05-0.058,0.076c-0.053,0.074-0.094,0.153-0.125,0.239c-0.009,0.026-0.022,0.049-0.029,0.075  c-0.003,0.01-0.009,0.02-0.012,0.03l-3.535,14.85c-0.016,0.067-0.02,0.135-0.022,0.202C0.004,54.234,0,54.246,0,54.259  c0.001,0.114,0.026,0.225,0.065,0.332c0.009,0.025,0.019,0.047,0.03,0.071c0.049,0.107,0.11,0.21,0.196,0.296  c0.095,0.095,0.207,0.168,0.328,0.218c0.121,0.05,0.25,0.075,0.379,0.075c0.077,0,0.155-0.009,0.231-0.027l14.85-3.535  c0.027-0.006,0.051-0.021,0.077-0.03c0.034-0.011,0.066-0.024,0.099-0.039c0.072-0.033,0.139-0.074,0.201-0.123  c0.024-0.019,0.049-0.033,0.072-0.054c0.008-0.008,0.018-0.012,0.026-0.02l36.063-36.063C56.127,11.85,56.127,6.14,52.618,2.631z   M51.204,4.045c2.488,2.489,2.7,6.397,0.65,9.137l-9.787-9.787C44.808,1.345,48.716,1.557,51.204,4.045z M46.254,18.895l-9.9-9.9  l1.414-1.414l9.9,9.9L46.254,18.895z M4.961,50.288c-0.391-0.391-1.023-0.391-1.414,0L2.79,51.045l2.554-10.728l4.422-0.491  l-0.569,5.122c-0.004,0.038,0.01,0.073,0.01,0.11c0,0.038-0.014,0.072-0.01,0.11c0.004,0.033,0.021,0.06,0.028,0.092  c0.012,0.058,0.029,0.111,0.05,0.165c0.026,0.065,0.057,0.124,0.095,0.181c0.031,0.046,0.062,0.087,0.1,0.127  c0.048,0.051,0.1,0.094,0.157,0.134c0.045,0.031,0.088,0.06,0.138,0.084C9.831,45.982,9.9,46,9.972,46.017  c0.038,0.009,0.069,0.03,0.108,0.035c0.036,0.004,0.072,0.006,0.109,0.006c0,0,0.001,0,0.001,0c0,0,0.001,0,0.001,0h0.001  c0,0,0.001,0,0.001,0c0.036,0,0.073-0.002,0.109-0.006l5.122-0.569l-0.491,4.422L4.204,52.459l0.757-0.757  C5.351,51.312,5.351,50.679,4.961,50.288z M17.511,44.809L39.889,22.43c0.391-0.391,0.391-1.023,0-1.414s-1.023-0.391-1.414,0  L16.097,43.395l-4.773,0.53l0.53-4.773l22.38-22.378c0.391-0.391,0.391-1.023,0-1.414s-1.023-0.391-1.414,0L10.44,37.738  l-3.183,0.354L34.94,10.409l9.9,9.9L17.157,47.992L17.511,44.809z M49.082,16.067l-9.9-9.9l1.415-1.415l9.9,9.9L49.082,16.067z'/>
                                                    </svg>
                                                </a>
                                            </div>
                                            <div class='col-sm-1'>
                                                <a href='../scripts/deleteSportiv.php?hash=".$row['hash']."'>
                                                    <svg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' version='1.1' id='Capa_1' x='0px' y='0px' width='512px' height='512px' viewBox='0 0 56.061 56.062' xml:space='preserve' class='iconList'>
                                                        <path d='M40.149,12.335H15.914c-2.02,0-3.661,1.653-3.661,3.694l1.653,36.37c0,2.021,1.644,3.662,3.662,3.662h20.926    c2.021,0,3.662-1.632,3.662-3.63l1.653-36.436C43.811,13.979,42.166,12.335,40.149,12.335z M38.492,52.447l-20.971-0.078    l-1.654-36.372c0-0.024,0.021-0.046,0.047-0.046l24.28,0.014L38.492,52.447z' />
                                                        <path d='M28.05,50.393c1.069,0,1.94-0.87,1.94-1.939V22.23c0-1.068-0.869-1.938-1.94-1.938c-1.068,0-1.938,0.87-1.938,1.938    v26.223C26.113,49.522,26.981,50.393,28.05,50.393z'/>
                                                        <path d='M35.069,50.392h0.02c1.059,0,1.93-0.859,1.941-1.918l0.299-26.22c0.006-0.519-0.189-1.007-0.553-1.378    c-0.364-0.371-0.846-0.578-1.387-0.584c-1.06,0-1.929,0.859-1.939,1.917l-0.301,26.22C33.139,49.499,33.998,50.38,35.069,50.392z' />
                                                        <path d='M20.972,50.392h0.02c1.07-0.013,1.931-0.894,1.918-1.963l-0.299-26.22c-0.012-1.058-0.883-1.917-1.961-1.917    c-0.52,0.006-1.004,0.213-1.367,0.584c-0.362,0.371-0.557,0.859-0.551,1.378l0.299,26.22    C19.042,49.532,19.914,50.392,20.972,50.392z' />
                                                        <path d='M14.707,10.91l27.086-1.562c0.468-0.026,0.896-0.233,1.209-0.585c0.312-0.35,0.47-0.8,0.438-1.266    c-0.053-0.929-0.819-1.653-1.75-1.653L14.604,7.406c-0.467,0.026-0.896,0.233-1.207,0.585c-0.312,0.35-0.471,0.8-0.44,1.267    C13.006,10.184,13.776,10.91,14.707,10.91z M14.707,10.396C14.707,10.396,14.707,10.397,14.707,10.396v0.014V10.396z'/>
                                                        <path d='M23.854,6.294l0.104-0.003c0.481-0.027,0.926-0.241,1.245-0.603c0.322-0.36,0.484-0.824,0.455-1.307l0.021-0.49    l4.833-0.232l0.025,0.44c0.057,0.956,0.848,1.704,1.803,1.704L32.446,5.8c0.482-0.028,0.926-0.242,1.246-0.603    c0.322-0.36,0.481-0.825,0.455-1.308l-0.025-0.439c-0.115-2.007-1.848-3.553-3.865-3.445L25.47,0.281    c-2.017,0.115-3.562,1.852-3.443,3.866l0.025,0.441C22.106,5.546,22.897,6.294,23.854,6.294z M23.854,5.783L23.854,5.783v0.013    V5.783z' />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                        <div class='row'>
                                            <div class='col-sm-1'>
                                            </div>
                                            
                                            <div class='col-sm-3'>
                                                <div class='clubStyle'>
                                                    ".$row['club']."
                                                </div>
                                            </div>
                                        </div>
                                        ";
                                    }
                                } 
                            }
                                
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-1" > 
        </div>

        <div class="col-sm-2" >
            <a href = "http://localhost/php/pages/dashboard.php">
                <div class="loginButton  divButon">
                      Back
                </div>
            </a>
        </div>
        
        <div class="col-sm-6" > 
        </div>

        <div class="col-sm-2" >
            <a href = "registerSportiv.php">
                <div class="loginButton  divButon">
                    Register Athlete
                </div>
            </a>
        </div>

        <div class="col-sm-1" > 
        </div>
    </div>
</div>

</body>
</html>
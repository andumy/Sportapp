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
                     echo "Competitions";
                ?>
                </div>
                <div class="displayBox">
                    <div class="container-fluid">
                        <?php

                            $result = $db->query("SHOW TABLES LIKE '".$tableCompetitii."'");   

                            if($result->num_rows > 0)
                            {
                                $sql = "SELECT * FROM ".$tableCluburi." RIGHT JOIN ".$tableCompetitii." ON ".$tableCluburi.".cluburiId = ".$tableCompetitii.".organizator ORDER BY ".$tableCompetitii.".data ASC ";
                                $result = $db->query($sql);
                            
                                if ($result->num_rows > 0) 
                                {
                                    while($row = $result->fetch_assoc())
                                    {
                                        echo "
                                        <div class='row'>
                                            <div class='col-sm-4'>
                                                ".$row['nume']."
                                            </div>

                                            <div class='col-sm-2'>
                                            ".$row['data']."
                                            </div>
                                            <div class='col-sm-1'>
                                                
                                            </div>

                                            <div class='col-sm-1'>
                                                <a href='results.php?hash=".$row['hash']."'> 
                                                    <svg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' version='1.1' id='Layer_1' x='0px' y='0px' viewBox='0 0 496 496' style='enable-background:new 0 0 496 496;' xml:space='preserve' width='512px' height='512px' class='iconList'>
                                                        <path d='M480,480V344H344V208H152v136H16v136H0v16h496v-16H480z M152,480H32V360h120V480z M328,440h-16v16h16v24H168v-24h128v-16     H168V224h160V440z M464,480H344V360h120V480z' />
                                                        <polygon points='240,328 256,328 256,240 224,240 224,256 240,256    ' />
                                                        <path d='M120,440H87.552l18.856-11.312C114.792,423.648,120,414.456,120,404c0-15.44-12.56-28-28-28s-28,12.56-28,28v12h16v-12     c0-6.616,5.384-12,12-12c6.616,0,12,5.384,12,12.68c0,4.184-2.232,8.136-5.832,10.288L64,435.472V456h56V440z' />
                                                        <path d='M432,432c0-6.144-2.32-11.752-6.128-16c3.808-4.248,6.128-9.856,6.128-16c0-13.232-10.768-24-24-24h-32v16h32     c4.408,0,8,3.584,8,8c0,4.416-3.592,8-8,8h-16v16h16c4.408,0,8,3.584,8,8c0,4.416-3.592,8-8,8h-32v16h32     C421.232,456,432,445.232,432,432z' />
                                                        <path d='M122.096,103.176L154.4,192h187.2l32.304-88.824C384.272,100.528,392,91.184,392,80c0-13.232-10.768-24-24-24     s-24,10.768-24,24c0,2.28,0.424,4.448,1.024,6.544l-30.888,15.44c-2.632,1.32-5.584,2.016-8.528,2.016     c-7.536,0-14.384-4.456-17.448-11.336l-23.056-51.872C269.36,36.456,272,30.536,272,24c0-13.232-10.768-24-24-24     s-24,10.768-24,24c0,6.536,2.64,12.456,6.896,16.792L207.84,92.664c-3.064,6.88-9.912,11.336-17.448,11.336     c-2.952,0-5.904-0.696-8.536-2.016l-30.88-15.44C151.576,84.448,152,82.28,152,80c0-13.232-10.768-24-24-24s-24,10.768-24,24     C104,91.184,111.728,100.528,122.096,103.176z M368,72c4.408,0,8,3.584,8,8s-3.592,8-8,8c-4.408,0-8-3.584-8-8S363.592,72,368,72     z M248,16c4.408,0,8,3.584,8,8s-3.592,8-8,8c-4.408,0-8-3.584-8-8S243.592,16,248,16z M141.592,99.744l33.104,16.552     c4.848,2.424,10.272,3.704,15.696,3.704c13.848,0,26.44-8.176,32.064-20.832l22.864-51.432C246.208,47.832,247.08,48,248,48     s1.792-0.168,2.68-0.272l22.864,51.432c5.624,12.664,18.208,20.84,32.064,20.84c5.424,0,10.848-1.28,15.688-3.704L354.4,99.744     c0.968,0.672,2.024,1.208,3.088,1.728L342.032,144H288v16h48.216l-5.816,16H165.6l-5.816-16H208v-16h-54.032l-15.464-42.528     C139.568,100.952,140.624,100.408,141.592,99.744z M128,72c4.408,0,8,3.584,8,8s-3.592,8-8,8s-8-3.584-8-8S123.592,72,128,72z' />
                                                        <path d='M248,168c13.456,0,24-14.056,24-32c0-17.944-10.544-32-24-32s-24,14.056-24,32C224,153.944,234.544,168,248,168z      M248,120c3.264,0,8,6.232,8,16s-4.736,16-8,16c-3.264,0-8-6.232-8-16S244.736,120,248,120z' />
                                                    </svg>
                                                </a>
                                            </div>

                                            <div class='col-sm-1'>
                                                <a href='listSportivToCompetitie.php?hash=".$row['hash']."&dir=kata'>
                                                    <svg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' version='1.1' id='Layer_1' x='0px' y='0px' viewBox='0 0 501.999 501.999' style='enable-background:new 0 0 501.999 501.999;' xml:space='preserve' class='iconList'>
                                                    <path d='M414.24,117.039C370.145,103.348,312.172,95.808,251,95.808s-119.146,7.541-163.24,21.232     
                                                    C15.226,139.562,0,173.313,0,197.664c0,24.349,15.226,58.102,87.76,80.624c27.453,8.524,60.43,14.7,96.419,18.125l-50.555,50.555    
                                                    c-13.526,13.527-13.526,35.537,0,49.063c6.553,6.552,15.265,10.161,24.531,10.161c9.266,0,17.979-3.608,24.532-10.161     
                                                    l67.325-67.325l43.62,43.621c6.554,6.552,15.266,10.161,24.531,10.161c9.267,0,17.979-3.609,24.531-10.162     
                                                    c13.525-13.526,13.525-35.536,0-49.063l-26.686-26.686c36.692-3.388,70.318-9.622,98.231-18.289     
                                                    c72.534-22.522,87.76-56.275,87.76-80.624S486.774,139.562,414.24,117.039z M93.691,259.188     
                                                    C45.482,244.219,20,222.943,20,197.664c0-25.28,25.482-46.555,73.691-61.523c42.227-13.112,98.093-20.333,157.309-20.333     
                                                    s115.082,7.221,157.309,20.333h0.001c25.871,8.033,45.187,17.884,57.542,29.193l-22.676,19.187    
                                                    c-7.879-6.183-22.983-14.686-51.528-22.657c-38.494-10.751-88.444-16.671-140.648-16.671c-52.205,0-102.155,5.92-140.65,16.671     
                                                    c-45.168,12.615-56.705,26.563-59.165,30.538c-1.996,3.225-1.996,7.301,0,10.525c2.46,3.975,13.996,17.922,59.165,30.538     
                                                    c25.124,7.017,55.444,12.04,88.179,14.634v29.473C159.029,274.591,122.971,268.279,93.691,259.188z M427.181,197.659     
                                                    c-6.555,4.214-18.876,10.388-40.911,16.542c-23.944,6.686-53.016,11.475-84.53,13.963c-4.116-11.504-15.121-19.759-28.023-19.759     
                                                    h-45.434c-12.901,0-23.906,8.255-28.022,19.759c-31.515-2.488-60.588-7.277-84.531-13.963     
                                                    c-22.047-6.158-34.369-12.334-40.911-16.533c6.554-4.213,18.876-10.388,40.911-16.542c36.792-10.275,84.832-15.934,135.27-15.934     
                                                    s98.477,5.659,135.27,15.934C408.317,187.284,420.639,193.461,427.181,197.659z M168.545,381.888     
                                                    c-2.775,2.775-6.465,4.303-10.39,4.303c-3.925,0-7.614-1.528-10.389-4.303c-5.729-5.729-5.729-15.05,0-20.778l55.499-55.499     
                                                    l0.003-0.011c5.301,8.217,14.529,13.673,25.014,13.673h2.877L168.545,381.888z M228.283,299.274L228.283,299.274     
                                                    c-5.002-0.001-9.132-3.787-9.686-8.644l24.165-24.165c3.905-3.905,3.905-10.237,0-14.143c-3.905-3.905-10.237-3.905-14.143,0    
                                                    l-10.09,10.09v-23.623v-0.63c0-5.378,4.375-9.754,9.754-9.754h45.434c5.379,0,9.755,4.375,9.755,9.754v0.63v49.479v1.252    
                                                    c0,5.378-4.376,9.754-9.755,9.754H228.283z M328.553,337.404c5.728,5.729,5.728,15.051,0,20.779     
                                                    c-2.775,2.775-6.465,4.304-10.389,4.304s-7.614-1.529-10.39-4.303l-38.909-38.91h4.852c9.976,0,18.815-4.94,24.216-12.497     
                                                    l0.003,0.01L328.553,337.404z M408.309,259.188c-29.279,9.092-65.338,15.404-104.837,18.384v-29.473     
                                                    c32.734-2.594,63.055-7.618,88.177-14.634c34.105-9.525,49.03-19.807,55.357-25.985l31.105-26.32    
                                                    c2.574,5.28,3.889,10.789,3.889,16.505C482,222.943,456.519,244.218,408.309,259.188z' />
                                                        
                                                            
                                                    <path d='M67.187,173.461c4.833-2.672,6.585-8.757,3.913-13.59c-2.673-4.833-8.756-6.584-13.59-3.913     
                                                    c-8.403,4.646-15.292,9.671-20.477,14.934c-3.876,3.935-3.828,10.266,0.106,14.142c1.948,1.919,4.483,2.876,7.017,2.876    
                                                    c2.584,0,5.168-0.996,7.125-2.982C55.115,181.034,60.467,177.177,67.187,173.461z' />
                                                            
                                                        
                                                    <path d='M97.903,160.128c0.984,0,1.986-0.146,2.976-0.455c21.417-6.667,47.764-11.909,76.191-15.158     
                                                    c5.487-0.627,9.427-5.584,8.8-11.071c-0.627-5.487-5.583-9.428-11.071-8.8c-30.078,3.438-56.948,8.798-79.866,15.933     
                                                    c-5.273,1.642-8.217,7.247-6.575,12.521C89.691,157.382,93.641,160.128,97.903,160.128z' />
                                                            
                                                    
                                                    </svg>
                                                </a>
                                            </div>
                                            <div class='col-sm-1'>
                                            <a href='listSportivToCompetitie.php?hash=".$row['hash']."&dir=kumite'>
                                                <svg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' version='1.1' id='Layer_1' x='0px' y='0px' viewBox='0 0 512 512' style='enable-background:new 0 0 512 512;' xml:space='preserve' class='iconList'>
                                                    <path d='M85.157,337.547c4.909,0,8.887-3.978,8.887-8.887V222.501c0-4.909-3.978-8.887-8.887-8.887   
                                                        c-4.909,0-8.887,3.978-8.887,8.887V328.66C76.271,333.568,80.25,337.547,85.157,337.547z' />
                                                        <path d='M115.82,179.965H40.332c-4.909,0-8.887,3.978-8.887,8.887v173.457c0,4.909,3.978,8.887,8.887,8.887h75.488     
                                                        c4.909,0,8.887-3.978,8.887-8.887V188.851C124.706,183.942,120.729,179.965,115.82,179.965z M106.933,353.421H49.219V197.738     h57.714V353.421z' />
                                                        <path d='M487.705,161.622c-19.157-34.59-50.087-53.033-91.991-54.913c-13.591-31.734-50.724-50.218-87.572-42.553    
                                                        c-52.618,10.952-84.896,32.719-101.162,68.327c-20.015,6.177-40.07,13.804-59.4,23.201c-6.831-8.228-17.13-13.478-28.634-13.478     
                                                        h-81.74C16.691,142.206,0,158.898,0,179.414v192.332c0,20.515,16.691,37.205,37.206,37.205h81.739     
                                                        c11.247,0,21.336-5.023,28.166-12.937c37.26,20.976,70.471,34.062,106.693,42.122c36.027,8.016,76.307,11.435,134.687,11.435     
                                                        c46.763,0,79.103-14.626,98.866-44.713C504.169,379.265,512,342.086,512,287.85C512,232.434,504.053,191.144,487.705,161.622z      
                                                        M118.947,391.178h-81.74c-10.716,0-19.433-8.717-19.433-19.432V179.414c0-10.716,8.718-19.433,19.433-19.433h81.739     
                                                        c10.715,0,19.432,8.717,19.432,19.433v192.332h0.001C138.379,382.461,129.661,391.178,118.947,391.178z M311.763,81.557    
                                                        c15.08-3.141,30.607-0.846,43.719,6.458c8.475,4.721,15.363,11.149,20.161,18.664c-32.773,0.698-87.091,4.38-144.393,18.984     
                                                        C243.125,108.948,265.392,91.208,311.763,81.557z M388.49,431.8c-107.617,0-163.536-12.172-233.31-51.635     
                                                        c0.628-2.707,0.972-5.523,0.972-8.419V179.414c0-2.653-0.284-5.241-0.815-7.738c87.706-42.658,191.748-47.364,233.154-47.364     
                                                        c39.185,0,66.554,15.022,83.666,45.921c14.851,26.82,22.071,65.292,22.071,117.62C494.227,391.44,464.581,431.8,388.49,431.8z' />
                                                    </svg>
                                            </a>
                                        </div>
                                        ";
                                        if($_SESSION['user'] == $row['Nume'])    
                                            echo   "<div class='col-sm-1'>
                                                    <a href='editCompetitie.php?hash=".$row['hash']."'>
                                                        <svg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' version='1.1' id='Capa_1' x='0px' y='0px' viewBox='0 0 55.25 55.25' xml:space='preserve' width='512px' height='512px' class='iconList'>
                                                            <path d='M52.618,2.631c-3.51-3.508-9.219-3.508-12.729,0L3.827,38.693C3.81,38.71,3.8,38.731,3.785,38.749  c-0.021,0.024-0.039,0.05-0.058,0.076c-0.053,0.074-0.094,0.153-0.125,0.239c-0.009,0.026-0.022,0.049-0.029,0.075  c-0.003,0.01-0.009,0.02-0.012,0.03l-3.535,14.85c-0.016,0.067-0.02,0.135-0.022,0.202C0.004,54.234,0,54.246,0,54.259  c0.001,0.114,0.026,0.225,0.065,0.332c0.009,0.025,0.019,0.047,0.03,0.071c0.049,0.107,0.11,0.21,0.196,0.296  c0.095,0.095,0.207,0.168,0.328,0.218c0.121,0.05,0.25,0.075,0.379,0.075c0.077,0,0.155-0.009,0.231-0.027l14.85-3.535  c0.027-0.006,0.051-0.021,0.077-0.03c0.034-0.011,0.066-0.024,0.099-0.039c0.072-0.033,0.139-0.074,0.201-0.123  c0.024-0.019,0.049-0.033,0.072-0.054c0.008-0.008,0.018-0.012,0.026-0.02l36.063-36.063C56.127,11.85,56.127,6.14,52.618,2.631z   M51.204,4.045c2.488,2.489,2.7,6.397,0.65,9.137l-9.787-9.787C44.808,1.345,48.716,1.557,51.204,4.045z M46.254,18.895l-9.9-9.9  l1.414-1.414l9.9,9.9L46.254,18.895z M4.961,50.288c-0.391-0.391-1.023-0.391-1.414,0L2.79,51.045l2.554-10.728l4.422-0.491  l-0.569,5.122c-0.004,0.038,0.01,0.073,0.01,0.11c0,0.038-0.014,0.072-0.01,0.11c0.004,0.033,0.021,0.06,0.028,0.092  c0.012,0.058,0.029,0.111,0.05,0.165c0.026,0.065,0.057,0.124,0.095,0.181c0.031,0.046,0.062,0.087,0.1,0.127  c0.048,0.051,0.1,0.094,0.157,0.134c0.045,0.031,0.088,0.06,0.138,0.084C9.831,45.982,9.9,46,9.972,46.017  c0.038,0.009,0.069,0.03,0.108,0.035c0.036,0.004,0.072,0.006,0.109,0.006c0,0,0.001,0,0.001,0c0,0,0.001,0,0.001,0h0.001  c0,0,0.001,0,0.001,0c0.036,0,0.073-0.002,0.109-0.006l5.122-0.569l-0.491,4.422L4.204,52.459l0.757-0.757  C5.351,51.312,5.351,50.679,4.961,50.288z M17.511,44.809L39.889,22.43c0.391-0.391,0.391-1.023,0-1.414s-1.023-0.391-1.414,0  L16.097,43.395l-4.773,0.53l0.53-4.773l22.38-22.378c0.391-0.391,0.391-1.023,0-1.414s-1.023-0.391-1.414,0L10.44,37.738  l-3.183,0.354L34.94,10.409l9.9,9.9L17.157,47.992L17.511,44.809z M49.082,16.067l-9.9-9.9l1.415-1.415l9.9,9.9L49.082,16.067z'/>
                                                        </svg>
                                                    </a>
                                                </div>
                                                <div class='col-sm-1'>
                                                    <a href='../scripts/deleteCompetitie.php?hash=".$row['hash']."'>
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
                                            </div>";
                                        else
                                        echo "</div>";

                                        echo    "<div class='row'>
                                                    <div class='col-sm-1'>
                                                    </div>
                                                    
                                                    <div class='col-sm-3'>
                                                        <div class='clubStyle'>
                                                            ".$row['Nume']."
                                                        </div>
                                                    </div>

                                                    <div class='col-sm-8'>
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
            <a href = "registerCompetitie.php">
                <div class="loginButton  divButon">
                    Register Competition
                </div>
            </a>
        </div>

        <div class="col-sm-1" > 
        </div>
    </div>
</div>

</body>
</html>




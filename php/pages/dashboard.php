<html>
<head>
    <?php
    require '../scripts/loggedVerify.php';
    require '../scripts/sessionActivation.php';
    require '../scripts/cat.php';
    require '../scripts/dashboardGetData.php';
    
    ?>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel = "stylesheet" type="text/css" href="../../css/dashboard.css"></link>
    <script type="text/javascript" src="../../js/dashboardData.js"></script>
</head>
<body class="background" onload="iterate(0,0,0,0,<?php echo $athletes.",".$gold.",".$silver.",".$bronze ?>);">

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
        <div class="col-sm-3">
           <div class="statistics">
                <div class="insideContentStatistics">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="info">
                                    Total</br>Athletes
                                </div>
                            </div>
                            <div class="col-sm-1">
                                <div class="bar">
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="entries">
                                    <div id="Athletes"></div></br> <div class="quantity">Entries</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
           <div class="statistics gold">
               <div class="insideContentStatistics">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="sup">
                                    st
                                </div>
                                <div class="placeValue">
                                    1
                                </div>
                                <div class="place">   
                                    Place
                                </div>
                            </div>
                            <div class="col-sm-1">
                                <div class="bar">
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="entries">
                                    <div id="Gold"></div></br><div class="quantity">Medals</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
           </div>
        </div>
        <div class="col-sm-3">
           <div class="statistics silver">
               <div class="insideContentStatistics">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="sup">
                                    nd
                                </div>
                                <div class="placeValue">
                                    2
                                </div>
                                <div class="place">   
                                    Place
                                </div>
                            </div>
                            <div class="col-sm-1">
                                <div class="bar">
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="entries">
                                    <div id="Silver"></div></br><div class="quantity">Medals</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
           </div>
        </div>
        <div class="col-sm-3">
           <div class="statistics bronze">
               <div class="insideContentStatistics">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="sup">
                                    rd
                                </div>
                                <div class="placeValue">
                                    3
                                </div>
                                <div class="place">   
                                    Place
                                </div>
                            </div>
                            <div class="col-sm-1">
                                <div class="bar">
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="entries">
                                    <div id="Bronze"></div></br><div class="quantity">Medals</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
           </div>
        </div>
    </div>
</div> 
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-6 col-md-3">
            <a href="listSportivi.php">
                <div class="box" id="AthletsBox">
                    <div class="boxIcon">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 398.085 398.085" style="enable-background:new 0 0 398.085 398.085;" xml:space="preserve">
                                <path id="Athlets" d="M397.61,225.431c-37.93-93.854-94.732-156.638-103.069-165.557c-0.634-1.348-1.711-2.48-3.132-3.139  
                                c0,0-41.109-19.05-41.165-19.073c-31.552-13.571-67.895-13.932-99.71-0.988l-43.591,20.062c-1.173,0.543-2.106,1.414-2.759,2.456  
                                c-5.376,5.67-64.584,69.424-103.711,166.239c-1.139,2.817-0.173,6.048,2.325,7.778c13.383,9.271,38.112,28.391,38.36,28.582  
                                c1.146,0.887,2.547,1.359,3.978,1.359c0.328,0,0.658-0.024,0.986-0.075c1.76-0.271,3.333-1.251,4.35-2.713l66.951-96.234  
                                l8.19,58.085l-22.328,120.96c-0.53,2.87,0.919,5.742,3.542,7.021c0.847,0.413,19.218,9.248,39.738,9.248  
                                c0.315,0,0.634-0.002,0.95-0.007c0.008,0.132,0.017,0.262,0.025,0.393c0.185,2.907,2.281,5.336,5.13,5.944  
                                c0,0,3.498,0.745,5.186,1.071c13.858,2.688,27.776,4.021,41.627,4.021c31.593-0.001,62.809-6.947,91.956-20.629  
                                c2.675-1.256,4.166-4.157,3.63-7.063l-22.328-120.96l8.144-57.763l66.727,95.912c1.017,1.462,2.59,2.442,4.35,2.713 
                                c0.329,0.051,0.658,0.075,0.986,0.075c1.431,0,2.832-0.473,3.978-1.359c0.248-0.191,24.974-19.309,38.36-28.582 
                                C397.784,231.479,398.749,228.248,397.61,225.431z M254.049,53.75l27.518,12.752l-21.058,149.351h-84.457  
                                c8.352-30.196,19.714-58.696,33.642-83.407L254.049,53.75z M242.152,48.381l-42.733,75.817l-43.767-75.569  
                                C183.223,37.477,214.55,37.418,242.152,48.381z M143.745,54.009l48.425,83.611c-12.123,23.743-22.086,50.331-29.562,78.232h-24.764  
                                L116.787,66.502L143.745,54.009z M43.694,247.342c-7.046-5.396-19.556-14.896-29.214-21.803  
                                c30.289-72.793,72.709-126.807,90.744-147.931l9.53,67.593L43.694,247.342z M146.92,346.442  
                                c-12.148,0.093-23.758-3.672-29.904-6.042l20.591-111.547h21.727C150.213,267.334,145.789,307.812,146.92,346.442z M281.363,340.539  
                                c-38.193,16.826-79.929,21.513-121.036,13.542c-0.031-0.006-0.063-0.012-0.095-0.019c-2.062-40.92,2.452-84.311,12.443-125.21  
                                h15.553l-12.304,94.213c-0.465,3.56,2.044,6.822,5.604,7.287h0c3.56,0.465,6.822-2.044,7.287-5.604l8.617-65.984l12.253,50.793  
                                c0.842,3.49,4.353,5.636,7.843,4.795l0,0c3.49-0.842,5.636-4.353,4.794-7.843l-18.733-77.657h57.158L281.363,340.539z   
                                M354.391,247.342l-70.837-101.819l9.538-67.645c18.165,21.314,60.354,75.181,90.513,147.661  
                                C373.947,232.446,361.437,241.947,354.391,247.342z" class="iconStyle"/>
                            </svg>

                    </div>
                    <br>
                        Athlets
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-md-3">
            <a href="listArbitrii.php">
                <div class="box" id="AthletsBox">
                    <div class="boxIcon">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                viewBox="-49 141 512 512" style="enable-background:new -49 141 512 512;" xml:space="preserve">
                            <path d="M138.528,454.539c-35.395,35.396-35.395,92.987-0.001,128.381c17.121,17.12,39.918,26.549,64.19,26.549
                                c24.272,0,47.069-9.429,64.189-26.549c17.121-17.121,26.549-39.917,26.549-64.189c0-24.274-9.428-47.069-26.549-64.19
                                c-17.121-17.12-39.917-26.549-64.19-26.549C178.444,427.991,155.647,437.419,138.528,454.539z M277.146,518.731
                                c0,19.915-7.732,38.616-21.773,52.656c-14.041,14.041-32.74,21.773-52.657,21.773c-19.917,0-38.618-7.732-52.657-21.773
                                c-29.035-29.034-29.035-76.278,0-105.313c14.041-14.041,32.741-21.772,52.656-21.772c19.916,0,38.616,7.732,52.657,21.773
                                C269.413,480.113,277.146,498.814,277.146,518.731z"  class="iconStyle"/>
                            <path d="M405.368,272.068l-67.173-67.173c0-0.001-0.001-0.001-0.002-0.002l-61.507-61.506c-3.185-3.184-8.349-3.184-11.532,0
                                L46.264,362.277c-52.352,52.353-52.352,137.536,0,189.888l61.508,61.508C133.132,639.033,166.85,653,202.716,653
                                c35.864,0,69.583-13.967,94.943-39.326c52.351-52.353,52.351-137.535,0-189.888l-16.239-16.238l123.948-123.944
                                C408.553,280.417,408.553,275.254,405.368,272.068z M64.528,367.08l29.582-29.583l27.584,27.584l-30.546,30.547l-27.584-27.584
                                L64.528,367.08z M83.277,458.112c-12.2,24.534-17.147,52.748-13.351,79.918c0.652,4.67,1.563,9.305,2.722,13.875
                                c0.092,0.367,0.186,0.735,0.283,1.103c0.311,1.186,0.635,2.369,0.98,3.548c0.025,0.087,0.047,0.175,0.072,0.261l-16.186-16.186
                                c-44.054-44.054-45.904-114.567-5.564-160.851l33.148,33.148c1.592,1.592,3.68,2.388,5.766,2.388c2.087,0,4.174-0.796,5.766-2.388
                                l42.079-42.079c1.53-1.53,2.389-3.603,2.389-5.767c0-2.164-0.86-4.236-2.389-5.767l-33.35-33.351L270.92,160.687l49.975,49.976
                                c-13.734,13.734-27.468,27.468-41.202,41.202c-28.48,28.48-56.962,56.962-85.442,85.442c-24.215,24.215-48.43,48.43-72.644,72.644
                                c-12.983,12.983-25.841,25.637-34.969,41.823C85.463,453.857,84.342,455.97,83.277,458.112z M264.122,401.781
                                c-1.53,1.53-2.389,3.603-2.389,5.767c0,2.164,0.859,4.236,2.389,5.767l22.005,22.004c45.993,45.993,45.993,120.828,0,166.821
                                c-22.28,22.28-51.902,34.55-83.411,34.55c-31.51,0-61.132-12.269-83.411-34.55c-5.75-5.749-10.78-11.949-15.091-18.487
                                c-1.077-1.634-2.111-3.29-3.099-4.965c-26.995-45.756-19.33-105.849,18.19-143.369l213.124-213.125l55.639,55.641L264.122,401.781z"
                                class="iconStyle"/>
                        </svg>
                    </div>
                    <br>
                        Referees
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-md-3">
            <a href="listCompetitii.php">
                <div class="box" id="AthletsBox">
                    <div class="boxIcon">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                            viewBox="-49 141 512 512" style="enable-background:new -49 141 512 512;" xml:space="preserve">
                            <path d="M462.982,238.7c-0.51-43.455-22.748-67.388-62.619-67.388c-15.432,0-30.302,3.592-40.023,6.589
                                c0.968-17.762,0.983-28.726,0.983-29.271l0.001-7.604H52.683v7.603c0,0.26,0.026,11.397,1.005,29.281
                                c-9.72-2.999-24.604-6.598-40.051-6.598c-39.87,0-62.109,23.932-62.619,67.388c-0.502,42.75,9.248,80.804,28.977,113.107
                                c19.371,31.715,44.128,50.826,61.487,61.272c27.803,16.732,55.59,20.244,74.006,20.244c4.54,0,8.914-0.214,13.005-0.636
                                c0.271-0.028,0.522-0.06,0.787-0.089c8.904,9.589,18.503,17.27,28.76,22.978c7.561,4.207,12.82,11.544,14.622,19.977
                                c-10.195,3.173-17.618,12.698-17.618,23.923c0,11.477,7.763,21.17,18.31,24.12v31.91h-41.142v33.301h-40.6v64.167h230.781v-64.167
                                h-40.6v-33.301h-41.142v-31.91c10.548-2.951,18.311-12.643,18.311-24.12c0-11.226-7.423-20.75-17.618-23.923
                                c1.802-8.433,7.06-15.77,14.622-19.977c10.232-5.693,19.897-13.415,28.779-22.974c3.147,0.349,7.866,0.72,13.766,0.72
                                c0.002,0,0.001,0,0.004,0c18.413,0,46.199-3.514,74.001-20.244c17.358-10.446,42.117-29.556,61.487-61.272
                                C453.735,319.504,463.484,281.45,462.982,238.7z M356.334,226.045c10.302-3.429,23.654-6.887,35.614-6.887
                                c10.029,0,17.25,2.45,21.463,7.282c4.842,5.554,6.403,14.884,4.637,27.734c-7.353,53.526-30.562,95.307-65.354,117.647
                                c-12.119,7.782-25.171,10.997-36.109,12.139C339.723,335.33,350.921,274.314,356.334,226.045z M345.992,156.232
                                c-0.068,2.781-0.176,6.277-0.342,10.369H68.387c-0.172-4.091-0.287-7.592-0.361-10.369H345.992z M65.495,279.008
                                c7.479,40.115,17.805,74.563,30.693,102.386c0.399,0.864,0.805,1.715,1.209,2.566c-10.934-1.145-23.978-4.359-36.092-12.137
                                C26.513,349.483,3.304,307.702-4.05,254.176c-1.765-12.851-0.205-22.182,4.638-27.734c4.213-4.832,11.435-7.281,21.463-7.281
                                c11.971,0,25.335,3.463,35.641,6.894C59.533,242.517,62.051,260.536,65.495,279.008z M117.375,418.102
                                c-0.612,0.01-1.242,0.015-1.888,0.015c-16.488,0-41.353-3.135-66.164-18.066C23.948,384.78-34.946,338.506-33.776,238.88
                                c0.414-35.233,15.923-52.36,47.413-52.36c16.841,0,33.474,5.077,41.077,7.754c0.379,5.101,0.804,10.217,1.274,15.312
                                c-10.335-3.036-22.512-5.634-33.936-5.634c-14.618,0-25.696,4.203-32.925,12.493c-7.859,9.013-10.632,22.403-8.242,39.798
                                c4.094,29.801,12.65,56.141,25.431,78.287c12.201,21.142,27.938,37.994,46.772,50.086c18.396,11.813,38.293,14.792,52.486,15.077
                                c0.048,0.084,0.097,0.164,0.145,0.247c0.778,1.363,1.564,2.703,2.358,4.026c0.247,0.413,0.496,0.823,0.745,1.232
                                c0.757,1.244,1.52,2.476,2.291,3.683c0.29,0.454,0.584,0.897,0.876,1.347c0.525,0.807,1.053,1.607,1.585,2.398
                                c0.514,0.765,1.03,1.522,1.549,2.271c0.509,0.733,1.019,1.462,1.533,2.181C116.898,417.416,117.134,417.768,117.375,418.102z
                                M307.187,604.015v33.753H106.82v-33.753h25.393h149.581H307.187z M266.587,570.714v18.094H147.42v-18.094h25.935h67.299H266.587z
                                M188.561,555.507v-30.982h36.885v30.982H188.561z M233.915,509.317h-53.822c-5.427,0-9.842-4.415-9.842-9.842
                                s4.415-9.842,9.842-9.842h53.822c5.427,0,9.842,4.415,9.842,9.842S239.34,509.317,233.915,509.317z M248.574,442.288
                                c-12.051,6.704-20.245,18.611-22.499,32.139h-38.142c-2.255-13.529-10.449-25.435-22.5-32.139
                                c-9.436-5.249-17.958-12.266-25.657-20.651l-1.86-2.122c-7.56-8.622-14.686-19.068-21.179-31.045l-1.989-3.671
                                C82.051,321.621,72.16,230.311,69.179,181.807h275.705c-0.127,2.11-0.266,4.289-0.42,6.552c-0.007,0.105-0.015,0.213-0.022,0.318
                                c-0.168,2.452-0.348,4.911-0.539,7.372c-0.005,0.072-0.011,0.144-0.016,0.217c-0.608,7.8-1.328,15.629-2.149,23.365l-0.497,4.678
                                c-5.525,49.528-17.194,112.625-41.801,160.153l-2.173,4.007c-4.835,8.916-10.02,16.982-15.476,24.083
                                c-0.084,0.109-0.168,0.218-0.252,0.327c-0.748,0.968-1.502,1.912-2.26,2.843c-0.186,0.227-0.369,0.458-0.556,0.684
                                c-0.833,1.012-1.673,2.002-2.517,2.968c-0.041,0.046-0.079,0.094-0.12,0.14C267.607,429.186,258.351,436.848,248.574,442.288z
                                M364.676,400.05c-24.813,14.932-49.673,18.066-66.16,18.066c-0.001,0-0.003,0-0.004,0c-0.647,0-1.276-0.005-1.889-0.015
                                c0.01-0.014,0.02-0.029,0.03-0.043c0.987-1.362,1.959-2.744,2.916-4.145c0.117-0.171,0.232-0.346,0.349-0.517
                                c0.809-1.192,1.606-2.4,2.394-3.62c0.203-0.313,0.406-0.627,0.607-0.942c0.872-1.369,1.735-2.747,2.581-4.149
                                c0.133-0.219,0.262-0.444,0.394-0.665c0.693-1.158,1.378-2.327,2.054-3.507c0.158-0.276,0.321-0.54,0.479-0.818
                                c14.193-0.285,34.09-3.264,52.486-15.077c18.834-12.094,34.571-28.946,46.772-50.086c12.78-22.146,21.336-48.486,25.431-78.287
                                c2.388-17.396-0.384-30.786-8.242-39.798c-7.229-8.291-18.307-12.494-32.925-12.494c-11.423,0-23.602,2.596-33.936,5.633
                                c0.478-5.195,0.89-10.178,1.242-14.914c0.01-0.132,0.021-0.265,0.031-0.396c7.605-2.679,24.237-7.754,41.077-7.754
                                c31.49,0,46.999,17.127,47.414,52.358C448.945,338.506,390.052,384.779,364.676,400.05z"  class="iconStyle"/>
                            <path d="M130.656,395.604c4.336,6.583,8.996,12.564,13.851,17.776l11.128-10.366c-4.278-4.591-8.409-9.9-12.28-15.777
                                L130.656,395.604z"  class="iconStyle"/>
                            <path d="M110.716,302.922l-14.826,3.382c7.292,31.965,17.027,58.799,28.933,79.756l13.222-7.512
                                C126.872,358.882,117.677,333.438,110.716,302.922z"  class="iconStyle"/>
                            <polygon points="394.655,459.301 381.818,459.309 381.809,446.473 366.602,446.483 366.611,459.32 353.774,459.329 353.784,474.536 
                                366.621,474.527 366.63,487.364 381.837,487.354 381.828,474.516 394.665,474.508 "  class="iconStyle"/>
                            <polygon points="63.769,538.267 52.997,538.278 52.985,527.505 37.779,527.521 37.79,538.294 27.016,538.305 27.032,553.512 
                                37.805,553.5 37.816,564.274 53.023,564.259 53.012,553.485 63.785,553.474 "  class="iconStyle"/>
                            <rect x="-0.156" y="429.16" width="14.345" height="15.207"  class="iconStyle"/>
                            <rect x="92.039" y="474.152" width="14.345" height="15.207"  class="iconStyle"/>
                            <rect x="323.254" y="519.904" width="14.345" height="15.207"  class="iconStyle"/>
                        </svg>


                    </div>
                    <br>
                        Competitions
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-md-3">
            <a href="rules.php">
                <div class="box" id="AthletsBox">
                    <div class="boxIcon">
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                viewBox="-49 141 512 512" style="enable-background:new -49 141 512 512;" xml:space="preserve">
                        <g>
                            <path d="M396.936,141.126L21.189,141C-17.509,141-49,172.491-49,211.189V653h388.127V318.839l17.112-11.407l32.44,16.215
                                l33.034-16.512L463,327.781V211.189C463,173.872,433.729,143.261,396.936,141.126L396.936,141.126z M322.615,211.189V636.48H-32.48
                                V211.189c0-29.596,24.075-53.669,53.669-53.669H347.62C332.335,170.408,322.615,189.69,322.615,211.189L322.615,211.189z
                                    M446.48,301.057l-24.775-12.389l-33.034,16.52l-33.615-16.817l-15.929,10.611v-87.793c0-29.596,24.081-53.669,53.678-53.669
                                c29.594,0,53.675,24.073,53.675,53.669V301.057z M446.48,301.057" class="iconStyle"/>
                            <path d="M196.318,320.261l35.453-35.456l35.456,35.456l11.678-11.686l-35.456-35.445l35.456-35.456l-11.678-11.675l-35.456,35.453
                                l-35.453-35.453l-11.678,11.675l35.456,35.456l-35.456,35.445L196.318,320.261z M196.318,320.261" class="iconStyle"/>
                            <path d="M105.824,245.585L93.47,234.601l-58.954,66.328l-10.583-15.868l-13.743,9.17l22.456,33.676L105.824,245.585z
                                    M105.824,245.585" class="iconStyle"/>
                            <rect x="-7.711" y="347.451" width="132.13" height="16.52"  class="iconStyle"/>
                            <rect x="-7.711" y="388.74" width="132.13" height="16.52"  class="iconStyle"/>
                            <rect x="-7.711" y="430.029" width="132.13" height="16.52"  class="iconStyle"/>
                            <rect x="-7.711" y="471.318" width="132.13" height="16.52"  class="iconStyle" />
                            <rect x="-7.711" y="512.613" width="132.13" height="16.512"  class="iconStyle"/>
                            <rect x="-7.711" y="553.902" width="66.066" height="16.512"  class="iconStyle"/>
                            <rect x="165.708" y="347.451" width="132.13" height="16.52"  class="iconStyle"/>
                            <rect x="165.708" y="388.74" width="132.13" height="16.52" class="iconStyle"/>
                            <rect x="165.708" y="430.029" width="132.13" height="16.52" class="iconStyle"/>
                            <rect x="165.708" y="471.318" width="99.098" height="16.52" class="iconStyle"/>
                        </g>
                    </svg>
                    </div>
                    <br>
                        Rules
                </div>
            </a>
        </div>
    </div>
</div>
</body>
</html>


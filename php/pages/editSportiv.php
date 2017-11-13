<html>
<head>
    <?php
    require '../scripts/loggedVerify.php';
    require '../scripts/sessionActivation.php';
    ?>


    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel = "stylesheet" type="text/css" href="../../css/dashboard.css"></link>


    <?php
        if($_SERVER['REQUEST_METHOD']=="GET")
        {
            
            $hash = $db->real_escape_string($_GET['hash']);
        
            $sql = "SELECT * FROM ".$tableSportivi." WHERE hash='".$hash."'";

            if($db->query($sql) == TRUE)
            {
                $result = $db->query($sql);
                while($row=$result->fetch_assoc())   
                if($result->num_rows > 0)
                {
                    $nume = $row['nume'];
                    $prenume = $row['prenume'];
                    $ziNastere = $row['ziNastere'];
                    $greutate = $row['greutate'];
                    $gradval = $row['gradval'];
                    $sex = $row['sex'];
                    $grad = $row['grad'];
                }
            }
        }
        else 
        {
            $_SESSION['message'] = "Wrong link";
            header("Location: http://localhost/php/pages/error.php");
            exit;
        }
    ?>
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


<div class="container">
        <?php
            echo "<form action='../scripts/updateSportiv.php?hash=".$hash."' method='POST'>"
        ?>
        
        </br>
            <div class = "row">    
                <div class = "col-sm-2">
                </div>

                <div class = "col-sm-4">
                    <label for="nume" class="label">First Name</label>
                    <?php
                        echo "<input type='text' name='nume' placeholder=".$nume." value='".$nume."'>";
                    ?>
                    
                </div>

                <div class = "col-sm-4 ">
                    <label for="prenume" class="label">Last Name</label>
                    <?php
                        echo "<input type='text' name='prenume' placeholder=".$prenume." value='".$prenume."'>";
                    ?>
                </div>

                <div class = "col-sm-2">
                </div>    
            </div>
       
            <div class = "row">    
                <div class = "col-sm-2">
                </div>

                <div class = "col-sm-4">
                    <label for="gradval" class="label">Grade</label>
                    <?php
                        echo "<input type='text' name='gradval' placeholder=".$gradval." value=".$gradval.">";
                    ?>
                </div>   
                
                <div class = "col-sm-1">
                </div>
                
                <div class = "col-sm-1">
                    <div id="gradKyu" class="gradType">
                        Kyu
                    </div>

                    <input id="radioKyu" type="radio" name="grad" value="Kyu" class="inpts">  
                </div>
                <div class = "col-sm-1">
                    <div id="gradDan" class="gradType">
                        Dan
                    </div>
                    <input id="radioDan" type="radio" name="grad" value="Dan" class="inpts">  
                </div>
            </div>

        
            <div class = "row">    
                <div class = "col-sm-2">
                </div>

                <div class = "col-sm-4">
                    <label for="greutate" class="label">Weight</label>
                    <?php
                        echo "<input type='text' name='greutate' placeholder=".$greutate." value=".$greutate.">";
                    ?>
                </div>

                <div class = "col-sm-4 ">
                    <label for="ziNastere" class="label">Birth Date</label>
                    <?php
                        echo "<input type='date' name='ziNastere' placeholder=".$ziNastere." value=".$ziNastere.">";
                    ?>
                </div>

                <div class = "col-sm-2">
                </div>    
            </div>


            <div class = "row">    
                <div class = "col-sm-4">
                </div>

                <div class = "col-sm-2">
                    <input id="radioM" type="radio" name="sex" value="M" class="inpts">   
                    <div id="maleSex" class="sexBox">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512.055 512.055"  xml:space="preserve">
                            <path d="M135.77,207.789c0,35.83,12.712,72.123,34.877,99.573c23.267,28.815,53.617,44.685,85.458,44.685   c31.835,0,62.147-15.86,85.353-44.659c22.091-27.416,34.761-63.695,34.761-99.536v-32.07c23.5-74.604,14.779-137.596,7.134-154.97   c-0.012-0.026-0.027-0.051-0.039-0.077c-0.073-0.16-0.153-0.315-0.236-0.47c-0.045-0.084-0.087-0.17-0.135-0.251   c-0.078-0.135-0.164-0.264-0.25-0.394c-0.063-0.096-0.125-0.193-0.192-0.286c-0.073-0.101-0.153-0.196-0.23-0.293   c-0.089-0.111-0.177-0.224-0.271-0.33c-0.063-0.07-0.13-0.135-0.195-0.203c-0.116-0.122-0.232-0.243-0.355-0.356   c-0.056-0.051-0.115-0.098-0.173-0.147c-0.137-0.119-0.274-0.237-0.418-0.347c-0.061-0.046-0.125-0.087-0.188-0.131   c-0.145-0.103-0.29-0.206-0.441-0.299c-0.078-0.048-0.16-0.09-0.239-0.135c-0.14-0.08-0.28-0.161-0.424-0.232   c-0.101-0.05-0.206-0.092-0.309-0.138c-0.129-0.057-0.256-0.116-0.387-0.166c-0.118-0.045-0.239-0.081-0.359-0.12   c-0.124-0.041-0.246-0.083-0.372-0.118c-0.12-0.033-0.242-0.057-0.364-0.084c-0.132-0.03-0.264-0.062-0.398-0.085   c-0.11-0.019-0.221-0.029-0.332-0.043c-0.152-0.02-0.303-0.04-0.457-0.051c-0.094-0.006-0.188-0.006-0.283-0.01   c-0.174-0.006-0.347-0.01-0.522-0.005c-0.083,0.002-0.167,0.011-0.251,0.016c-0.183,0.012-0.366,0.026-0.55,0.05   c-0.028,0.004-0.055,0.003-0.083,0.008c-20.062,2.866-44.351-2.012-70.066-7.175C261.715,0.282,217.162-8.642,182.326,16.2   c-0.524-0.108-1.066-0.165-1.622-0.165c-35.729,0-60.682,29.608-60.682,72.002c0,32.772,13.789,93.92,15.748,102.441V207.789z    M329,297.349c-20.108,24.955-45.996,38.698-72.894,38.698c-26.911,0-52.84-13.757-73.01-38.736   c-19.908-24.654-31.326-57.284-31.326-89.521v-9.112c0-28.498,16.16-66.981,21.654-79.238c55.276-6.495,99.31-0.006,126.773,6.703   c24.089,5.886,39.896,12.934,45.595,15.701l14.428,34.33v31.68C360.22,240.106,348.841,272.727,329,297.349z M180.704,32.035   c0.772,0,1.517-0.115,2.224-0.32c2.342,0.671,4.958,0.277,7.047-1.31c29.374-22.312,71.23-13.906,111.709-5.778   c21.237,4.265,41.547,8.343,60.306,8.343c2.89,0,5.74-0.109,8.555-0.317c4.921,17.754,9.586,62.522-3.829,117.681l-7.31-17.395   c-0.697-1.658-1.932-3.033-3.507-3.903c-2.952-1.63-73.615-39.763-188.896-24.933c-0.02,0.002-0.038,0.008-0.058,0.01   c-0.15,0.021-0.298,0.052-0.446,0.081c-0.116,0.022-0.234,0.041-0.348,0.068c-0.094,0.022-0.186,0.054-0.279,0.08   c-1.015,0.283-1.939,0.754-2.738,1.374c-0.517,0.399-0.991,0.861-1.405,1.39c-0.012,0.016-0.026,0.03-0.039,0.045   c-0.084,0.109-0.159,0.227-0.239,0.342c-0.073,0.104-0.148,0.207-0.216,0.314c-0.051,0.082-0.095,0.17-0.144,0.254   c-0.086,0.149-0.172,0.299-0.248,0.454c-0.007,0.015-0.016,0.028-0.023,0.043c-0.619,1.282-9.674,20.183-16.721,43.296   c-3.985-21.141-8.077-46.958-8.077-63.817C136.022,49.351,158.464,32.035,180.704,32.035z"/>
                            <path d="M480.737,414.086c-10.786-15.799-25.828-26.767-43.5-31.717c-0.172-0.048-0.346-0.09-0.521-0.127l-63.821-13.349   l-17.179-26.049c-0.088-0.134-0.181-0.267-0.278-0.396c-2.603-3.471-6.565-5.761-10.873-6.284c-4.305-0.522-8.702,0.753-12.06,3.5   c-0.052,0.042-0.103,0.085-0.153,0.128l-76.325,65.701l-76.325-65.701c-0.051-0.043-0.102-0.086-0.153-0.128   c-3.357-2.747-7.754-4.023-12.059-3.5c-4.307,0.522-8.27,2.813-10.874,6.284c-0.097,0.129-0.189,0.261-0.278,0.396l-17.179,26.049   l-63.821,13.349c-0.175,0.037-0.349,0.079-0.521,0.127c-17.672,4.951-32.714,15.918-43.5,31.717   c-9.866,14.45-15.299,31.891-15.299,49.108v19.843c0,15.999,14.355,29.016,32.001,29.016h183.985c0.01,0,0.02,0.001,0.03,0.001   c0.011,0,0.022-0.001,0.033-0.001h47.918c0.011,0,0.022,0.001,0.033,0.001c0.01,0,0.02-0.001,0.03-0.001h183.985   c17.646,0,32.001-13.017,32.001-29.016v-19.843C496.036,445.977,490.603,428.536,480.737,414.086z M342.628,352.059l15.674,23.767   l-55.236,75.949l-17.378-17.377c-0.002-0.002-0.004-0.004-0.006-0.006l-17.902-17.902L342.628,352.059z M248.027,472.052h16.001   c0.481,0,0.958-0.019,1.432-0.046l4.81,24.048h-28.485l4.81-24.048C247.069,472.033,247.546,472.052,248.027,472.052z    M272.028,448.051c0,4.411-3.589,8-8,8h-16.001c-4.412,0-8-3.589-8-8v-4.687l16.001-16.001l16.001,16.001V448.051z    M169.427,352.059l74.848,64.43l-17.902,17.902c-0.002,0.002-0.004,0.004-0.006,0.006l-17.378,17.377l-55.236-75.949   L169.427,352.059z M32.018,483.037v-19.843c0-25.88,16.097-56.588,46.866-65.349l61.712-12.908l60.959,83.819   c1.376,1.892,3.511,3.087,5.844,3.27c0.209,0.016,0.418,0.024,0.626,0.024c2.113,0,4.15-0.837,5.656-2.343l12.262-12.262   c1.309,3.066,3.242,5.802,5.634,8.058l-6.11,30.549H48.019C39.197,496.053,32.018,490.214,32.018,483.037z M480.036,483.037   c0,7.177-7.178,13.016-16.001,13.016H286.587l-6.11-30.549c2.392-2.255,4.325-4.992,5.634-8.058l12.262,12.262   c1.506,1.506,3.543,2.343,5.656,2.343c0.208,0,0.417-0.008,0.626-0.024c2.333-0.183,4.468-1.378,5.844-3.27l60.959-83.819   l61.712,12.908c30.77,8.761,46.866,39.469,46.866,65.349V483.037z" />
                        </svg>
                    </div>
                </div>

                <div class = "col-sm-2">
                   <input id="radioF" type="radio" name="sex" value="F" class="inpts"> 
                    <div id="femaleSex" class="sexBox">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512" xml:space="preserve" >
                                <path d="M418.186,366.807c-6.749-33.805-38.461-39.559-38.561-39.605v0.001c-0.341-0.1,2.909,0.715-77.341-19.177v-2.723h59.075    c12.177,0,22.083-9.907,22.083-22.083V170.554c0.993-4.189,0.995-8.544,0-12.742v-41.119c0-4.144-3.359-7.501-7.501-7.501    c-4.144,0-7.501,3.357-7.501,7.501v21.527c-3.96-2.364-8.483-4.059-13.357-4.898c-1.76-7.817-8.252-13.997-16.485-15.078    c-8.582-1.128-15.086-6.131-19.331-14.869c-1.987-4.091-5.879-6.778-10.409-7.19c-4.534-0.41-8.827,1.527-11.514,5.185    c-12.894,17.548-48.739,56.907-110.636,56.905c-4.709,0-7.902-0.223-9.014-0.273c-11.374-0.685-20.991,8.403-20.991,19.8v17.235    c0,27.547,11.428,54.253,31.352,73.269c6.608,6.307,13.897,11.568,21.67,15.763v6.234H150.92c-3.905,0-7.082-3.177-7.082-7.081    v-168.55c0-54.643,44.553-99.669,98.371-99.669c0.174,0,0.348,0.001,0.521,0.002c19.282,0.103,41.545,5.58,56.716,13.949    c9.615,5.307,15.554,1.089,25.049,1.089c23.175,0,41.747,23.83,43.973,45.263c0.014,0.314,0.047,1.571,0.051,6.387    c0.005,7.241,8.183,7.797,7.507,7.495c4.144-0.003,7.498-3.365,7.495-7.507c-0.001-1.332,0.01-6.555-0.115-7.767    c-3.016-29.837-28.467-58.873-58.91-58.873c-11.89,0-13.743,3.014-17.802,0.778c-17.203-9.491-42.279-15.7-63.883-15.816    C180.539-0.4,128.835,51.477,128.835,114.671v168.55c0,12.177,9.907,22.083,22.084,22.083h58.806v2.723l-77.038,19.093    c-0.102,0.025-0.202,0.054-0.303,0.083l-5.628,1.66c-0.169,0.05-0.335,0.105-0.5,0.166c-10.044,3.748-27.613,13.639-32.434,37.782    c-22.83,114.682-21.869,109.785-21.924,110.178c-2.75,19.451,6.987,35.01,30.41,35.01h81.115c4.144,0,7.501-3.358,7.501-7.501    c0-4.144-3.358-7.501-7.501-7.501h-28.227v-70.75c0-4.144-3.358-7.501-7.501-7.501s-7.501,3.358-7.501,7.501v70.75h-37.886    c-9.964,0-15.75-3.208-15.846-13.675c-0.042-5.106-0.243-0.129,22.073-113.578c3.359-16.823,15.575-23.85,22.732-26.571    l5.202-1.534l44.24-10.965c49.213,57.976,46.299,54.904,49.143,57.678c16.426,16.023,39.864,14.892,55.29-3.224l46.325-54.413    l44.071,10.923c1.275,0.586,23.213,4.445,27.936,28.103c22.124,112.467,22.116,108.451,22.074,113.575    c-0.076,10.252-5.622,13.682-15.846,13.682h-37.617v-70.751c0-4.144-3.357-7.501-7.501-7.501s-7.501,3.358-7.501,7.501v70.75    H218.428c-4.144,0-7.501,3.358-7.501,7.501c0,4.144,3.358,7.501,7.501,7.501h191.275c18.532,0,30.677-10.197,30.848-28.563    C440.614,474.859,440.103,478.957,418.186,366.807z M355.574,148.797c6.264,1.863,11.095,5.991,12.867,11.089v8.594    c-1.772,5.099-6.603,9.227-12.867,11.089V148.797z M355.574,196.343v-1.385c4.688-0.866,9.041-2.526,12.867-4.811v93.074    c0,3.905-3.177,7.08-7.081,7.08h-59.076v-5.797C334.088,267.877,355.574,234.586,355.574,196.343z M198.414,257.452    c-16.973-16.201-26.707-38.95-26.707-62.417c0.446-16.332-1.081-18.311,1.525-20.765c0.923-0.87,2.164-1.375,3.561-1.295    c53.784,3.238,100.044-20.406,130.586-59.994c8.235,14.46,20.312,18.962,29.266,20.139c2.238,0.294,3.927,2.204,3.927,4.445    c0,20.751,0,38.177,0,58.779C340.572,270.98,251.22,307.851,198.414,257.452z M273.717,375.402    c-10.451,12.277-25.081,12.244-35.507-0.062l-15.651-18.473h66.938L273.717,375.402z M302.271,341.864H209.85l-12.891-15.216    l22.074-5.472c3.348-0.829,5.696-3.907,5.696-7.355l0.001-23.206c20.64,6.88,42.437,6.805,62.552,0.214    c0.141,23.975-0.322,23.426,0.418,25.541c0.818,2.338,2.767,4.183,5.277,4.805l22.219,5.507L302.271,341.864z"/>
                        </svg>
                    </div>
                </div>

                <div class = "col-sm-4">
                </div>    
            </div>
            
            
            <div class="row">
                <div class="col-sm-1" > 
                </div>
        
                <div class="col-sm-2" >
                    <a href = "http://localhost/php/pages/listSportivi.php">
                        <div class="loginButton  divButon topSpace">
                            Back
                        </div>
                    </a>
                </div>
                
                <div class="col-sm-6" > 
                </div>
        
                <div class="col-sm-2" >
                    <input type="submit" value="Submit" name="submit" class="loginButton topSpace">
                </div>
        
                <div class="col-sm-1" > 
                </div>
            </div>

        </form>
        </div>
    </div>   
<script>

var kyu = document.getElementById('gradKyu');
var dan = document.getElementById('gradDan');
var male = document.getElementById('maleSex');
var female = document.getElementById('femaleSex');

var sex =  "<?php echo $sex; ?>";
var grad =  "<?php echo $grad; ?>";


if(sex == 'F') {
    document.getElementById('radioF').checked = true;
    female.classList.add('sexBoxActive');
}       
else{ 
    document.getElementById('radioM').checked = true;
    male.classList.add('sexBoxActive');
}
if(grad == 'kyu') {
    document.getElementById('radioKyu').checked = true;
    kyu.classList.add('gradTypeActive');
}    
else {
    document.getElementById('radioDan').checked = true;
    dan.classList.add('gradTypeActive');
}

kyu.addEventListener('click',function (){
    document.getElementById('radioKyu').checked = true;

    if(document.getElementById('radioKyu').checked == true)
    {
        kyu.classList.add('gradTypeActive');
        dan.classList.remove('gradTypeActive');
    }
} );


dan.addEventListener('click',function (){
    document.getElementById('radioDan').checked = true;

    if(document.getElementById('radioDan').checked == true)
    {
        dan.classList.add('gradTypeActive');
        kyu.classList.remove('gradTypeActive');
    
    }
} );

male.addEventListener('click',function (){
    document.getElementById('radioM').checked = true;

    if(document.getElementById('radioM').checked == true)
    {
        male.classList.add('sexBoxActive');
        female.classList.remove('sexBoxActive');
    
    }
} );

female.addEventListener('click',function (){
    document.getElementById('radioF').checked = true;

    if(document.getElementById('radioF').checked == true)
    {
        female.classList.add('sexBoxActive');
        male.classList.remove('sexBoxActive');
    
    }
} );

</script>
</body>

</html>
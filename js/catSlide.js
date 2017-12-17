var currentCat = 0;
var cat = ['- Kata Under 18 Male','- Kata Over 18 Male','- Kata Under 18 Female','- Kata Over 18 Female'];
var globalHash;
var globalDir;

function leftCat(){
    if(currentCat == 0)
        currentCat = cat.length-1;
    else
        currentCat--;
    displayCat(globalHash,globalDir);
}

function rightCat(){
    if(currentCat == cat.length-1)
        currentCat = 0;
    else
        currentCat++;
    displayCat(globalHash,globalDir);
}

function displayCat(hash,dir) {
    globalDir = dir;
    globalHash = hash;

    if (window.XMLHttpRequest){
         xmlhttp = new XMLHttpRequest();
     }    else{
         xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
     }
  
     xmlhttp.onreadystatechange = function (){
     
         if (xmlhttp.readyState == 4 && xmlhttp.status == 200){
            document.getElementById('catDisplayBox').innerHTML = xmlhttp.responseText;
            document.getElementById('cat').innerHTML = cat[currentCat];
         }
     }
     var urlCustom = "http://localhost/php/scripts/catDisplay.php";

     xmlhttp.open('POST',urlCustom,true);
     xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

     var data = "index="+currentCat+"&hash="+hash+"&dir="+dir;
     xmlhttp.send(data);
  }

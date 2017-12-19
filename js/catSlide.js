var currentCat = 0;

var catName;
var globalHash;

function leftCat(){
    if(currentCat == 0)
        currentCat = catName.length-1;
    else
        currentCat--;
    displayCat(globalHash,catName);
}

function rightCat(){
    if(currentCat == catName.length-1)
        currentCat = 0;
    else
        currentCat++;
    displayCat(globalHash,catName);
}

function displayCat(hash,catNamePassed) {
    globalHash = hash;
    catName = catNamePassed;
    if (window.XMLHttpRequest){
         xmlhttp = new XMLHttpRequest();
     }    else{
         xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
     }
  
     xmlhttp.onreadystatechange = function (){
     
         if (xmlhttp.readyState == 4 && xmlhttp.status == 200){
            document.getElementById('catDisplayBox').innerHTML = xmlhttp.responseText;
            document.getElementById('cat').innerHTML = catName[currentCat];
         }
     }
     var urlCustom = "http://localhost/php/scripts/catDisplay.php";

     xmlhttp.open('POST',urlCustom,true);
     xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

     var data = "index="+currentCat+"&hash="+hash;
     xmlhttp.send(data);
  }

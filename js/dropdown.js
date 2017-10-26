function dropdownfct() {
  if (window.XMLHttpRequest){
       xmlhttp = new XMLHttpRequest();
   }    else{
       xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
   }

   xmlhttp.onreadystatechange = function (){
   
       if (xmlhttp.readyState == 4 && xmlhttp.status == 200){
          document.getElementById('club').innerHTML = xmlhttp.responseText;
         
       }
   }

   xmlhttp.open('GET','http://localhost/php/scripts/dropdownGet.php',true);
   xmlhttp.send();
}
window.onload = dropdownfct;